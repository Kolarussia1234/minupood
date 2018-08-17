jQuery(document).ready(function() {
	var orderSelected = 'body#order-opc';
	if(typeof orderProcess !== 'undefined' && orderProcess === 'order')
		orderSelected = 'body#order';
	var veebipoed_carrier = {
		checked_options: jQuery(orderSelected + ' div#center_column input.delivery_option_radio:checked'),
		ids: [],
		address: 0
	};
	var veebipoed_carrier_error = '';
	var selected_veebipoed_carriers;
	var selects = false;
	var module;
	var carriers;

	for (var i = veebipoed_carrier.checked_options.length - 1; i >= 0; i--) {
		veebipoed_carrier.ids[getAddress(veebipoed_carrier.checked_options[i].id)] = veebipoed_carrier.checked_options[i].id;
	}

	jQuery(orderSelected + ' div#center_column').off('click').on('click', 'label', function(evt){
		veebipoed_carrier.address = getAddress(evt.currentTarget.control.id);
		if(!(veebipoed_carrier.address in veebipoed_carrier.ids))
			veebipoed_carrier.ids[veebipoed_carrier.address] = evt.currentTarget.control.id;
		if(jQuery.inArray(evt.currentTarget.control.id, veebipoed_carrier.ids) !== -1)
			return false;
		veebipoed_carrier.ids[veebipoed_carrier.address] = evt.currentTarget.control.id;
	});

	$('#center_column').on('change', '#carrier_area', function() {
		moveList();
	});

	$(document).ajaxComplete(function(event, xhr, settings) {
		if (xhr.readyState == 4 &&
			xhr.status == 200 &&
			xhr.responseJSON !== null &&
			typeof xhr.responseJSON !== 'undefined' &&
			'HOOK_BEFORECARRIER' in xhr.responseJSON
		)
		{
			moveList();
		}
	});

	$('input.delivery_option_radio').each(function() {
		module = $('#HOOK_BEFORECARRIER > #veebipoed_carrier_'+parseInt($(this).data('key'), 10)+'_'+$(this).data('id_address'));
		if (module.length === 1)
		{
			$(this).parent().parent().parent().parent().find('.delivery_option_logo').next().append(module.html());
			module.remove();
		}
	});

	//Copy needed data to form
	$('body').on('change', 'input.delivery_option_radio, .veebipoed_carrier, .terminal_cities', function(){
		var $delivery_option = $(this).closest('.delivery_option');
		if ($delivery_option.find('.veebipoed-carrier').length && $delivery_option.find('.hide_address_fields').val() == 1)
		{
			prepareDeliveryInfo($delivery_option);
		}
		else
		{
			clearDeliveryInfo();
		}
	});
	$delivery_option = getActiveDeliveryOption();
	if ($delivery_option)
	{
		prepareDeliveryInfo($delivery_option);
	}

	if (typeof orderProcess !== 'undefined' && orderProcess === 'order')
	{
		$('#center_column').on('change', 'td > .terminal_cities, td > .veebipoed_carrier', function()
		{
			var current_carrier = $(this).parent().parent().parent().find('input.delivery_option_radio');
			if (!current_carrier.prop('checked'))
			{
				current_carrier.prop('checked', true).click().change();
			}
		});

		jQuery('div#carrier_area form').on('submit', function(event) {
			if(jQuery('#cgv').length && !jQuery('input#cgv:checked').length)
			{
				return acceptCGV();
			}
			selected_veebipoed_carriers = jQuery('.delivery_option_radio:checked').parent().parent().parent().parent();

			selects = selected_veebipoed_carriers.find('select.veebipoed_carrier');
			if (selects.length === 0)
			{
				selects = jQuery('.hook_extracarrier .veebipoed_carrier');
			}

			selects.each(function(index, elem)
			{
				if (jQuery(elem).val() == 0) {
					veebipoed_carrier_error = jQuery(elem).next().text();
					alert(veebipoed_carrier_error);
					event.preventDefault();
					return false;
				}
			});
			return true;
		});
	}
});

function getAddress(id_string) {
	var splitted = id_string.split('_');
	return splitted[2];
}

function updateCarrierTerminal(id_address, name, module) {
	var data = {
		terminal_id: $('select#' + module + '_' + id_address).val(),
		id_address: id_address,
		name: module
	};
	var current_carrier;
	disableCheckout();
	$.ajax({
		type: 'POST',
		url:  $('.'+name+'_'+id_address+'_ajax').first().val(),
		data: jQuery.param(data),
		dataType: 'json',
		success: function(json) {
			if(orderProcess === 'order-opc') {
				current_carrier = $('select#' + module + '_' + id_address).parent().parent().parent().find('input.delivery_option_radio');
				if(
					(current_carrier.length === 1 && !current_carrier.prop('checked')) ||
					parseInt(json['old_terminal_id'], 10) === 0 ||
					parseInt(data.terminal_id, 10) === 0
				)
				{ // is_carrier_checked || selected_terminal || deselected_terminal
					if (current_carrier.length === 1)
					{
						current_carrier.prop('checked', true).click().change();
					}
					else
					{
						updateCarrierSelectionAndGift();
					}
				}
			}
			enableCheckout();
		}
	});
}

function disableCheckout()
{
	if (orderProcess === 'order-opc')
	{
		$('.payment_module > a').addClass('disabled');
	}
	else
	{
		$("#carrier_area button[type='submit']").addClass('disabled');
	}
}

function enableCheckout()
{
	if (orderProcess === 'order-opc')
	{
		$('.payment_module > a').removeClass('disabled');
	}
	else
	{
		$("#carrier_area button[type='submit']").removeClass('disabled');
	}
}

function updateCarrierCity(id_address, name, module)
{
	var data = {
		group_id: $('select#' + module + '_city_' + id_address).val(),
		id_address: id_address,
		name: module
	};

	var html = '';
	disableCheckout();
	$.ajax({
		type: 'POST',
		url: $('.'+name+'_'+id_address+'_ajax').first().val(),
		data: jQuery.param(data),
		dataType: 'json',
		success: function(json) {
			if (orderProcess === 'order-opc')
			{
				current_carrier = $('select#' + module + '_' + id_address).parent().parent().parent().find('input.delivery_option_radio');
				if (current_carrier.length === 1)
				{
					current_carrier.prop('checked', true).click().change();
				}
				else
				{
					updateCarrierSelectionAndGift();
				}
			}
			else
			{
				if (json && json.success)
				{
					html = buildOptions(json.terminals, json.is_address, name);
					$('#' + name + '_' + id_address + ' > option[value!="0"]').remove();
					$('#' + name + '_' + id_address).append(html);
				}
				else
				{
					updateExtraCarrier($('input[name="delivery_option['+id_address+']"]:checked').val(), id_address);
				}
				enableCheckout();
			}
		}
	});
}

function buildOptions(terminals, is_address, name)
{
	var options = [];
	var last_city = false;
	for (var i = 0; i < terminals.length; i++)
	{
		options[i] = '<option value="' + terminals[i]['id_' + name] + '"">' + terminals[i].name;
		if (is_address == 1)
		{
			options[i] += ' (' + terminals[i].address + ')';
		}
		options[i] += '</option>';
	}

	return options.join('');
}

function moveList()
{
	if ($('#HOOK_BEFORECARRIER > .hidden').length !== 0)
	{
		$('input.delivery_option_radio').each(function() {
			module = $('#HOOK_BEFORECARRIER > #veebipoed_carrier_'+parseInt($(this).data('key'), 10)+'_'+$(this).data('id_address'));
			if (module.length === 1)
			{
				$(this).parent().parent().parent().parent().find('.delivery_option_logo').next().append(module.html());
				module.remove();
			}
		});
	}
}

var deliveryInfoHidden = false;
function prepareDeliveryInfo($delivery_option)
{
	if (!$delivery_option)
	{
		$delivery_option = getActiveDeliveryOption();
	}
	if ($delivery_option && $delivery_option.find('.hide_address_fields').val() == 1)
	{
		$('.delivery_hidden_input').remove();
		$('#opc_account_form').find('#address1').closest('.form-group').hide();
		$('#opc_account_form').prepend('<input type="hidden" class="delivery_hidden_input" name="address1" id="address1" value="' + $delivery_option.find('.veebipoed_carrier option:selected').attr('data-address') + '" />');
		
		$('#opc_account_form').find('#city').closest('.form-group').hide();
		if ($delivery_option.find('.veebipoed_carrier option:selected').closest('optgroup').attr('label'))
		{
			$('#opc_account_form').prepend('<input type="hidden" class="delivery_hidden_input" name="city" id="city" value="' + $delivery_option.find('.veebipoed_carrier option:selected').closest('optgroup').attr('label') + '" />');
		}
		else
		{
			$('#opc_account_form').prepend('<input type="hidden" class="delivery_hidden_input" name="city" id="city" value="' + $delivery_option.find('.veebipoed_carrier option:selected').closest('optgroup').attr('label') + '" />');
			//$('#opc_account_form').prepend('<input type="hidden" class="delivery_hidden_input" name="city" id="city" value="' + $delivery_option.find('.terminal_cities option:selected').text() + '" />');
		}
		$('#opc_account_form').find('#postcode').closest('.form-group').hide();
		$('#opc_account_form').prepend('<input type="hidden" class="delivery_hidden_input" name="postcode" id="postcode" value="00000" />');
		
		$('#opc_account_form #id_country').closest('.form-group').hide();
		$('#opc_account_form').prepend(
			'<input type="hidden" class="delivery_hidden_input" name="id_country" id="id_country" value="' + $('#opc_account_form #id_country option:selected').val() + '" />'
		);
		deliveryInfoHidden = true;
	}
}
function clearDeliveryInfo()
{
	if (deliveryInfoHidden)
	{
		$('.delivery_hidden_input').remove();
		$('#opc_account_form').find('#city').closest('.form-group').show();
		$('#opc_account_form').find('#address1').closest('.form-group').show();
		$('#opc_account_form').find('#postcode').closest('.form-group').show();
		$('#opc_account_form #id_country').closest('.form-group').show();
		deliveryInfoHidden = false;
	}
}
function getActiveDeliveryOption()
{
	$delivery_option = $('.delivery_option_radio:checked').closest('.delivery_option');
	if ($delivery_option.length)
	{
		if ($delivery_option.find('.veebipoed-carrier'))
		{
			return $delivery_option;
		}
		else
		{
			return false;
		}
	}
	else
	{
		return false;
	}
}
