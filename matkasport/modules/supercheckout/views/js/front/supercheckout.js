/**
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future.If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 * We offer the best and most useful modules PrestaShop and modifications for your online store. 
 *
 * @category  PrestaShop Module
 * @author    knowband.com <support@knowband.com>
 * @copyright 2016 Knowband
 * @license   see file: LICENSE.txt
 */

$(document).ready(function() {
    
    if (typeof cart_empty != 'undefined' && cart_empty == true) {
        return;
    }
    checkCustomFieldBlocks();
    var hash_error = document.location.hash;
    if(hash_error.indexOf('#stripe_error') > -1){
        $('#supercheckout-empty-page-content').append('<div class="permanent-warning">There was a problem with your payment</div>');
    }
    
    if (typeof supercheckout_subscribe_mailchimp != 'undefined') {
        $( "#email" ).blur(function() {
            var email = $( "#email" ).val();
            subscribeCustomer(email);
        });
    }
    $('#'+page_lang_code+'_content').show();
    
    checkout_option('input:radio[name=checkout_option]:checked');
    
    //Display password field, based on checkout option
    $('input[name="checkout_option"]').on('click', function() {
        checkout_option(this);
    });
    
    //to hide social login block when by default guest checkout is selected
    if ($('input:radio[name=checkout_option]:checked').val() == 1) {
        $('#social_login_block').hide();
    }
    
    //To hide Delivery address block when by default login checkout is selected
    if ($('input:radio[name=checkout_option]:checked').val() == 0) {
        $('#checkoutShippingAddress').hide();
        $('#checkoutBillingAddress').hide();
    }
    
    // Login Action
    $('#checkoutLogin').on('click', '#button-login', function() {
        supercheckoutlogin();
    });
    
    // Create State list
    if (typeof guest_information != 'undefined' && typeof guest_information['id_state'] != 'undefined') {
        statelist(default_country, guest_information['id_state'], 'select[name="shipping_address[id_state]"]');
    } else {
        statelist(default_country, 0, 'select[name="shipping_address[id_state]"]');
    }
    if (typeof guest_information != 'undefined' && typeof guest_information['invoice_id_state'] != 'undefined') {
        statelist(default_country, guest_information['invoice_id_state'], 'select[name="payment_address[id_state]"]');
    } else {
        statelist(default_country, 0, 'select[name="payment_address[id_state]"]');
    }
    
    if (show_delivery_add_for_virtualcart == true) {
        $('#use_for_invoice').prop('checked', false);
        $('#checkoutBillingAddress').slideDown();
        updateInvoiceAddress();
    }
    
    if ($('#use_for_invoice').is(':checked')) {
        updateInvoiceAddress();
    }
    
    // BOC - Handling Delivery Address Event
    if ($('input[name="shipping_address_value"]:checked').val() == 1) {
        shipping_address_value($('input[name="shipping_address_value"]:checked'));
    }
    
    $('#checkoutShippingAddress').on('change', 'input[name="shipping_address_value"]', function() {
        shipping_address_value(this);
    });
    
    $('#checkoutShippingAddress').on('change', 'select[name="shipping_address_id"]', function(e) {
        buildAddressBlock($(this).val(), 'delivery');
        if ($('#use_for_invoice').is(':checked')) {
            updateInvoiceAddress();
        }
        loadCarriers();
    });

    $('#checkoutShippingAddress').on('click', '#use_for_invoice', function() {
        updateInvoiceAddress();
        if ($(this).is(':checked')) {
            $('#checkoutBillingAddress').slideUp();
        } else {
            $('#checkoutBillingAddress').slideDown();
            checkDniandVatNumber('invoice');
        }
        updateInvoiceStatus(this);
    });
    
    //Create shipping state list based on selected shipping country
    $('select[name="shipping_address[id_country]"]').change(function() {
        var selected_country = $(this).find('option:selected').attr('value');
        var selected_state = 0;
        statelist(selected_country, selected_state, 'select[name="shipping_address[id_state]"]');
        checkDniandVatNumber('delivery');
        if ($('input[name="shipping_address[postcode]"]').length && $('input[name="shipping_address[postcode]"]').val() != '') {
            checkZipCode(this, true);
        } else {
            loadCarriers();
        }
    });

    //Change shipping state list, if shipping address is same as payment address
    $('#shipping-new').on('change', 'select[name="shipping_address[id_state]"]', function() {
        if ($('#use_for_invoice').is(':checked')) {
            var selected_state = $(this).find('option:selected').attr('value');
            $('select[name="payment_address[id_state]"] option').removeAttr('selected');
            $('select[name="payment_address[id_state]"] option').each(function() {
                if ($(this).val() == selected_state) {
                    $(this).prop('selected', true);
                }
            });
        }
        loadCarriers();
    });
    
    $('input[name="shipping_address[dni]"]').on('blur', function() {
        isValidDni('delivery');
    });
    
    $('input[name="shipping_address[vat_number]"]').on('blur', function() {
        isValidVatNumber('delivery');
    });
    
    $('input[name="shipping_address[postcode]"]').on('blur', function() {
        checkZipCode(this, true);
    });
    // EOC - Handling Delivery Address Event
    
    // BOC - Handling Payment Address Event
    $('#payment-existing').on('change', 'select[name="payment_address_id"]', function(e) {
        buildAddressBlock($(this).val(), 'invoice');
        _loadInvoiceAddress();
        checkDniandVatNumber('invoice');
    });
    
    $('input[name="payment_address_value"]').on('click', function() {
        if ($(this).val() == 0) {
            $('#payment-new').slideUp();
        } else if ($(this).val() == 1) {
            $('#payment-new').slideDown();
            checkDniandVatNumber('invoice');
            checkZipCode(this, false);
        }
        _loadInvoiceAddress();
    });
    
    $('#payment-new').on('change', 'select[name="payment_address[id_country]"]', function() {
        var selected_country = $(this).find('option:selected').attr('value');
        var selected_state = 0;
        statelist(selected_country, selected_state, 'select[name="payment_address[id_state]"]');
        _loadInvoiceAddress();
        checkDniandVatNumber('invoice');
        checkZipCode(this, false);
    });

    $('#payment-new').on('change', 'select[name="payment_address[id_state]"]', function() {
        _loadInvoiceAddress();
    });
    
    $('input[name="payment_address[dni]"]').on('blur', function() {
        isValidDni('invoice');
    });
    
    $('input[name="payment_address[vat_number]"]').on('blur', function() {
        isValidVatNumber('invoice');
    });
    
    $('input[name="payment_address[postcode]"]').on('blur', function() {
        checkZipCode(this, false);
    });
    // EOC - Handling Payment Address Event
    
    //Display Selected Address detail
    buildAddressBlock($('select[name="shipping_address_id"] option:selected').val(), 'delivery');   
    buildAddressBlock($('select[name="payment_address_id"] option:selected').val(), 'invoice');
    
    loadCarriers();

    $(document).on('change','.quantitybox',function(){
        console.log('test');
        var element = $(this).attr("name");
        var hidden_qty = parseInt($('#confirmCheckout input[name=' + element + '_hidden]').val());
        var user_qty = parseInt($('#confirmCheckout  input[name=' + element + ']').val());
        if (hidden_qty > user_qty) {
            updateQty(element, 'down', (hidden_qty - user_qty), false);
        } else if (hidden_qty < user_qty) {
            updateQty(element, 'up', (user_qty - hidden_qty), false);
        } else {
            $('#cart_update_warning').html('<div class="permanent-warning">' + updateSameQty + '</div>');
        }
    });
    //EOC - Cart Detail Handling Event
    
    //BOC - Show or hide gift comment 
    $('#supercheckout-gift_container').on('click', '#gift', function() {
        if ($(this).is(':checked')) {
            $('#supercheckout-gift-comments').slideDown();
        } else {
            $('#supercheckout-gift-comments').slideUp();
        }
        updateDeliveryExtraChange();
    });
    if ($('#gift').is(':checked')) {
        $('#supercheckout-gift-comments').show();
    }
    //EOC - Show or hide gift comment
    
    //BOC - Update cart on Delivery change
    $('#shipping-method').on('change', '.supercheckout_shipping_option', function() {
        updateCarrierOnDeliveryChange();
    });
    //BOC - Update cart on Delivery change
    
    $('#payment-method').on('change', 'input:radio[name="payment_method"]', function() {
        loadPaymentAddtionalInfo();
    });
    
    $("#supercheckout_confirm_order").click(function() {
        placeOrder();
    });
    
    //BOC - Remove Field Errors on active input of addresses
    $('#checkoutBillingAddress input, #checkoutShippingAddress input').on('focus', function() {
        $(this).parent().find('span.errorsmall').remove();
    });
    //EOC - Remove Field Errors on active input of addresses

    //BOC -Remove Field Errors on active input of checkout options
    $('input[name="supercheckout_email"], input[name="supercheckout_password"], input[name="customer_personal[password]"]').on('focus', function() {
        $(this).parent().find('span.errorsmall').remove();
    });
    $('.supercheckout_personal_dob select').on('focus', function() {
        $('.supercheckout_personal_dob').find('span.errorsmall').remove();
    });
    $('.supercheckout_personal_id_gender input').on('focus', function() {
        $('.supercheckout_personal_id_gender').find('span.errorsmall').remove();
    });
    $('.supercheckout_offers_option input').on('click', function() {
        $('.supercheckout_personal_id_gender').parent().parent().parent().parent().find('span.errorsmall').remove();
    });
    $('textarea[name="payment_address[other]"], textarea[name="shipping_address[other]"]').on('focus', function() {
        $(this).parent().find('span.errorsmall').remove();
    });
    //EOC -Remove Field Errors on active input of checkout options
    
    //BOC - Place Orde Button Background Color
    $("#supercheckout-fieldset .orangebutton").mouseover(function() {
        if (button_background != 'F77219')
            $(this).css("background", ColorLuminance(button_background, -0.2));
    });
    $("#supercheckout-fieldset .orangebuttonsmall").mouseover(function() {
        if (button_background != 'F77219')
            $(this).css("background", ColorLuminance(button_background, -0.2));
    });
    $("#supercheckout-fieldset .orangebuttonapply").mouseover(function() {
        if (button_background != 'F77219')
            $(this).css("background", ColorLuminance(button_background, -0.2));
    });
    $("#supercheckout-fieldset .orangebutton").mouseout(function() {
        if (button_background != 'F77219')
            $(this).css("background", button_background);
    });
    $("#supercheckout-fieldset .orangebuttonsmall").mouseout(function() {
        if (button_background != 'F77219')
            $(this).css("background", button_background);
    });
    $("#supercheckout-fieldset .orangebuttonapply").mouseout(function() {
        if (button_background != 'F77219')
            $(this).css("background", button_background);
    });
    //EOC - Place Orde Button Background Color
    
    
    //on blur validation
    if (inline_validation == 1)
    {
        $('input[name="supercheckout_password"], input[name="customer_personal[password]"]').on('blur', function() {
            if ($(this).val() == '')
            {
                $(this).removeClass('error-form');
                $(this).removeClass('ok-form');
                $(this).addClass('error-form');
                $(this).parent().append('<span class="errorsmall">' + required_error + '</span>');
            }
            else if (!validatePasswd($(this).val()))
            {
                $(this).removeClass('error-form');
                $(this).removeClass('ok-form');
                $(this).addClass('error-form');
                $(this).parent().append('<span class="errorsmall">' + pwd_error + '</span>');
            }
            else
            {
                $(this).removeClass('error-form');
                $(this).removeClass('ok-form');
                $(this).addClass('ok-form');
            }
        });
        $('input[name="supercheckout_email"]').on('blur', function() {

            if ($(this).val() == '')
            {
                $(this).removeClass('error-form');
                $(this).removeClass('ok-form');
                $(this).addClass('error-form');
                $('input[name="supercheckout_email"]').parent().append('<span class="errorsmall">' + required_error + '</span>');
            } else if (!validateEmail($(this).val())) {
                $(this).removeClass('error-form');
                $(this).removeClass('ok-form');
                $(this).addClass('error-form');
                $('input[name="supercheckout_email"]').parent().append('<span class="errorsmall">' + invalid_email + '</span>');
            }
            else
            {
                $(this).removeClass('error-form');
                $(this).removeClass('ok-form');
                $(this).addClass('ok-form');
            }
        });
        $('input[name="shipping_address[firstname]"], input[name="shipping_address[lastname]"], input[name="payment_address[firstname]"], input[name="payment_address[lastname]"] ').on('blur', function() {
            if ($(this).siblings('.supercheckout-required').css('display') == "none" && $(this).val() == '')
            {
                $(this).removeClass('ok-form error-form');
            }
            else if ($(this).val() == '') {
                $(this).removeClass('ok-form').addClass('error-form');
                $(this).parent().append('<span class="errorsmall">' + required_error + '</span>');
            }
            else if (!validateName($(this).val()))
            {
                $(this).removeClass('ok-form').addClass('error-form');
                if (validateOnlyNumber($(this).val()))
                {
                    $(this).parent().append('<span class="errorsmall">' + number_error + '</span>');
                }
                else
                {
                    $(this).parent().append('<span class="errorsmall">' + splchar_error + '</span>');
                }

            }
            else if (validateName($(this).val()))
            {
                $(this).removeClass('error-form').addClass('ok-form');
            }
        });
        $('input[name="shipping_address[address1]"], input[name="payment_address[address1]"], input[name="shipping_address[address2]"], input[name="payment_address[address2]"]').on('blur', function() {
            if ($(this).siblings('.supercheckout-required').css('display') == "none" && $(this).val() == '')
            {
                $(this).removeClass('ok-form error-form');
            }
            else if ($(this).val() == '') {
                $(this).removeClass('ok-form').addClass('error-form');
                $(this).parent().append('<span class="errorsmall">' + required_error + '</span>');
            }
            else if (!validateAddress($(this).val()))
            {
                $(this).removeClass('ok-form').addClass('error-form');
                $(this).parent().append('<span class="errorsmall">' + invalid_address + '</span>');
            }
            else if (validateAddress($(this).val()))
            {
                $(this).removeClass('error-form').addClass('ok-form');
            }
        });
        $('input[name="shipping_address[city]"], input[name="payment_address[city]"]').on('blur', function() {
            if ($(this).siblings('.supercheckout-required').css('display') == "none" && $(this).val() == '')
            {
                $(this).removeClass('ok-form error-form');
            }
            else if ($(this).val() == '') {
                $(this).removeClass('ok-form').addClass('error-form');
                $(this).parent().append('<span class="errorsmall">' + required_error + '</span>');
            }
            else if (!validateCityName($(this).val()))
            {
                $(this).removeClass('ok-form').addClass('error-form');
                $(this).parent().append('<span class="errorsmall">' + invalid_city + '</span>');
            }
            else if (validateCityName($(this).val()))
            {
                $(this).removeClass('error-form').addClass('ok-form');
            }
        });
        $('input[name="payment_address[alias]"], input[name="shipping_address[alias]"]').on('blur', function() {

            if ($(this).siblings('.supercheckout-required').css('display') == "none" && $(this).val() == '')
            {
                $(this).removeClass('ok-form error-form');
            }
            else if ($(this).val() == '') {
                $(this).removeClass('ok-form').addClass('error-form');
                $(this).parent().append('<span class="errorsmall">' + required_error + '</span>');
            }
            else if (!validateAddressTitle($(this).val()))
            {
                $(this).removeClass('ok-form').addClass('error-form');
                $(this).parent().append('<span class="errorsmall">' + invalid_title + '</span>');
            }
            else if (validateAddressTitle($(this).val()))
            {
                $(this).removeClass('error-form').addClass('ok-form');
            }
        });
        $('input[name="shipping_address[company]"], input[name="payment_address[company]"]').on('blur', function() {
            if ($(this).siblings('.supercheckout-required').css('display') == "none" && $(this).val() == '')
            {
                $(this).removeClass('ok-form error-form');
            }
            else if ($(this).siblings('.supercheckout-required').css('display') != "none" && $(this).val() == '')
            {
                $(this).removeClass('ok-form').addClass('error-form');
                $(this).parent().append('<span class="errorsmall">' + required_error + '</span>');
            }
            else if ($(this).val() != '')
            {
                $(this).removeClass('error-form').addClass('ok-form');
            }

        });
        $('input[name="shipping_address[phone]"], input[name="shipping_address[phone_mobile]"], input[name="payment_address[phone]"], input[name="payment_address[phone_mobile]"]').on('blur', function() {
            if ($(this).siblings('.supercheckout-required').css('display') == "none" && $(this).val() == '')
            {
                $(this).removeClass('ok-form error-form');
            }
            else if ($(this).val() == '') {
                $(this).removeClass('ok-form').addClass('error-form');
                $(this).parent().append('<span class="errorsmall">' + required_error + '</span>');
            }
            else if (!validatePhoneNumber($(this).val()))
            {
                $(this).removeClass('ok-form').addClass('error-form');
                $(this).parent().append('<span class="errorsmall">' + invalid_number + '</span>');
            }
            else if (validatePhoneNumber($(this).val()))
            {
                $(this).removeClass('error-form').addClass('ok-form');
            }
        });
        $('textarea[name="payment_address[other]"], textarea[name="shipping_address[other]"]').on('blur', function() {
            if ($(this).siblings('.supercheckout-required').css('display') == "none" && $(this).val() == '')
            {
                $(this).removeClass('ok-form error-form');
            }
            else if ($(this).val() == '') {
                $(this).removeClass('ok-form').addClass('error-form');
                $(this).parent().append('<span class="errorsmall">' + required_error + '</span>');
            }
            else if (!validateMessage($(this).val()))
            {
                $(this).removeClass('ok-form').addClass('error-form');
                $(this).parent().append('<span class="errorsmall">' + invalid_other_info + '</span>');
            }
            else if (validateMessage($(this).val()))
            {
                $(this).removeClass('error-form').addClass('ok-form');
            }
        });
        $('.supercheckout_personal_dob > div > select').on('change', function() {
            var flag = 0;
            $('.supercheckout_personal_dob > div > select').each(function() {
                if (this.value == '')
                {
                    $(this).addClass('dob-error-form').removeClass('dob-ok-form');
                    flag = 1;

                }
                else
                {
                    $(this).addClass('dob-ok-form').removeClass('dob-error-form');

                }
            })
            if (flag == 1)
            {
                $('.supercheckout_personal_dob > div').css("width", "240px").addClass('dob-div-error-form').removeClass('dob-div-ok-form');
                $('.supercheckout_personal_dob').append('<span class="errorsmall">' + invalid_dob + '</span>');
            }
            else
            {
                $('.supercheckout_personal_dob > div').css("width", "240px").addClass('dob-div-ok-form').removeClass('dob-div-error-form');
            }
        })
    }

    if ((typeof show_on_supercheckout != 'undefined') && show_on_supercheckout == 'small_buttons') {
        $('#ivss_socialloginizer_buttons').after(loginizer_small);
    } else if ((typeof show_on_supercheckout != 'undefined') && show_on_supercheckout == 'large_buttons') {
        $('#ivss_socialloginizer_buttons').after(loginizer_large);
    } else {
        $('.vss_socialloginizer_buttons').remove();
    }
    
});

function getURLwithTime(url)
{
    return url + ((url.indexOf('?') < 0) ? '?' : '&') + 'rand=' + new Date().getTime()
}

function checkout_option(e)
{

    if (show_delivery_add_for_virtualcart != true) {
        if ($(e).val() == 0) {
            $('#supercheckout-login-box').show();
            $('#supercheckout-new-customer-form').hide();
            $('#social_login_block').show();
            $('#new_customer_password').hide();
            $('#checkoutShippingAddress').hide();
            $('#checkoutBillingAddress').hide();
        } else if ($(e).val() == 1) {

            if (!$('#use_for_invoice').is(':checked')) {
                $('#checkoutBillingAddress').show();
            }
            $('#supercheckout-login-box').hide();
            $('#new_customer_password').hide();
            $('#social_login_block').hide();
            $('#supercheckout-new-customer-form').show();
            $('#checkoutShippingAddress').show();
            if (typeof guest_information != 'undefined')
                setGuestInformation();
        } else {
            if (!$('#use_for_invoice').is(':checked')) {
                $('#checkoutBillingAddress').show();
            }
            $('#supercheckout-login-box').hide();
            $('#new_customer_password').show();
            $('#social_login_block').show();
            $('#supercheckout-new-customer-form').show();
            $('#checkoutShippingAddress').show();
        }
    }
    else // because in case of virtual cart we need to hide delivery address block
    if (show_delivery_add_for_virtualcart == true) {
        if ($(e).val() == 0) {
            $('#supercheckout-login-box').show();
            $('#supercheckout-new-customer-form').hide();
            $('#social_login_block').show();
            $('#new_customer_password').hide();
            $('#checkoutShippingAddress').hide();
            $('#checkoutBillingAddress').hide();
        } else if ($(e).val() == 1) {
            $('#supercheckout-login-box').hide();
            $('#new_customer_password').hide();
            $('#social_login_block').hide();
            $('#supercheckout-new-customer-form').show();
            $('#checkoutShippingAddress').hide();
            $('#use_for_invoice').prop('checked', false);
            $('#checkoutBillingAddress').slideDown();
        } else {
            $('#supercheckout-login-box').hide();
            $('#new_customer_password').show();
            $('#social_login_block').show();
            $('#supercheckout-new-customer-form').show();
            $('#checkoutShippingAddress').hide();
            $('#use_for_invoice').prop('checked', false);
            $('#checkoutBillingAddress').slideDown();
        }
    }

}

function shipping_address_value(e)
{
    var loadcarriers = false;
    if ($(e).val() == 0) {
        loadcarriers = true;
        $('#shipping-new').slideUp();
    } else if ($(e).val() == 1) {
        $('#shipping-new').slideDown();
        checkDniandVatNumber('delivery');
        if ($('input[name="shipping_address[postcode]"]').length && $('input[name="shipping_address[postcode]"]').val() != '') {
            checkZipCode(this, true);
        } else {
            loadcarriers = true;
        }
    }
    if (loadcarriers) {
        loadCarriers();
    }
}

function buildAddressBlock(id_address, type)
{
    var html = '';
    if (prestashop.customer.addresses != undefined && Object.keys(prestashop.customer.addresses).length) {
        for (var i in prestashop.customer.addresses) {
            if (prestashop.customer.addresses[i].id == id_address) {
                html = prestashop.customer.addresses[i].formatted;
                $('#' + type + '_address_detail').html(html);
                break;
            }
        }
    }
}

function updateInvoiceAddress()
{
    $('select[name="payment_address_id"] option').removeAttr('selected');
    $('select[name="payment_address_id"] option').each(function() {
        if ($(this).val() == $('select[name="shipping_address_id"]').find('option:selected').attr('value')) {
            $(this).prop('selected', true);
        }
    });
    buildAddressBlock($('select[name="payment_address_id"] option:selected').val(), 'invoice');
    $('input[name="payment_address_value"]').removeAttr('checked');
    $('input[name="payment_address_value"]').parent().removeClass('checked');
    $('input[name="payment_address_value"]').each(function() {
        if ($(this).val() == $('input[name="shipping_address_value"]:checked').val()) {
            $(this).prop('checked', true);
            $(this).parent().addClass('checked');
        }
    });
    if ($('input[name="payment_address_value"]:checked').val() == 0) {
        $('#payment-new').slideUp();
    }

    $('select[name="payment_address[id_country]"] option').removeAttr('selected');
    $('select[name="payment_address[id_country]"] option').each(function() {
        if ($(this).val() == $('select[name="shipping_address[id_country]"]').find('option:selected').attr('value')) {
            $(this).prop('selected', true);
        }
    });

    var selected_country = $('select[name="shipping_address[id_country]"]').find('option:selected').attr('value');
    var selected_state = 0;
    statelist(selected_country, selected_state, 'select[name="payment_address[id_state]"]');

    $('select[name="payment_address[id_state]"] option').removeAttr('selected');
    $('select[name="payment_address[id_state]"] option').each(function() {
        if ($(this).val() == $('select[name="shipping_address[id_state]"]').find('option:selected').attr('value')) {
            $(this).prop('selected', true);
        }
    });
}

function setGuestInformation()
{
    $('input[name="supercheckout_email"]').val(guest_information['email']);
    $('input[name="shipping_address[firstname]"]').val(guest_information['firstname']);
    $('input[name="shipping_address[lastname]"]').val(guest_information['lastname']);
    $('input[name="payment_address[firstname]"]').val(guest_information['invoice_firstname']);
    $('input[name="payment_address[lastname]"]').val(guest_information['invoice_lastname']);
    $('input[name="shipping_address[address1]"]').val(guest_information['address1']);
    $('input[name="payment_address[address1]"]').val(guest_information['invoice_address1']);
    $('input[name="shipping_address[address2]"]').val(guest_information['address2']);
    $('input[name="payment_address[address2]"]').val(guest_information['invoice_address2']);
    $('input[name="shipping_address[city]"]').val(guest_information['city']);
    $('input[name="payment_address[city]"]').val(guest_information['invoice_city']);
    $('input[name="payment_address[alias]"]').val(guest_information['alias']);
    $('input[name="shipping_address[alias]"]').val(guest_information['invoice_alias']);
    $('input[name="shipping_address[company]"]').val(guest_information['company']);
    $('input[name="payment_address[company]"]').val(guest_information['invoice_company']);
    $('input[name="shipping_address[phone]"]').val(guest_information['phone']);
    $('input[name="shipping_address[phone_mobile]"]').val(guest_information['phone_mobile']);
    $('input[name="payment_address[phone]"]').val(guest_information['invoice_phone']);
    $('input[name="payment_address[phone_mobile]"]').val(guest_information['invoice_phone_mobile']);
    $('input[name="payment_address[dni]"]').val(guest_information['invoice_dni']);
    $('input[name="shipping_address[dni]"]').val(guest_information['dni']);
    $('input[name="shipping_address[vat_number]"]').val(guest_information['vat_number']);
    $('input[name="payment_address[vat_number]"]').val(guest_information['invoice_vat_number']);
    $('input[name="shipping_address[postcode]"]').val(guest_information['postcode']);
    $('input[name="payment_address[postcode]"]').val(guest_information['invoice_postcode']);
    $('input[name="customer_personal[newsletter]"]').val(guest_information['newsletter']);
    $('select[name="customer_personal[dob_days]"]').val(parseInt(guest_information['sl_day']));
    $('select[name="customer_personal[dob_months]"]').val(parseInt(guest_information['sl_month']));
    $('select[name="customer_personal[dob_years]"]').val(parseInt(guest_information['sl_year']));
    $('select[name="shipping_address[id_country]"]').val(parseInt(guest_information['id_country']));
    $('select[name="payment_address[id_country]"]').val(parseInt(guest_information['invoice_id_country']));
    $('select[name="shipping_address[id_state]"]').val(guest_information['id_state']);
    $('select[name="payment_address[id_state]"]').val(guest_information['invoice_id_state']);
    $('textarea[name="payment_address[other]"]').val(guest_information['invoice_other']);
    $('textarea[name="shipping_address[other]"]').val(guest_information['other']);
    if (guest_information['id_gender'] == '1') {
        $('#customer_gender_1').attr('checked', 'checked');
        $('#customer_gender_2').removeAttr('checked');
        $('#customer_gender_1').parent('span').addClass('checked');
        $('#customer_gender_2').parent('span').removeClass('checked');
    } else {
        $('#customer_gender_2').attr('checked', 'checked');
        $('#customer_gender_1').removeAttr('checked');
        $('#customer_gender_2').parent('span').addClass('checked');
        $('#customer_gender_1').parent('span').removeClass('checked');
    }
    if (guest_information['newsletter'] == '1') {
        $('#customer_personal_newsletter').attr('checked', 'checked');
        $('#customer_personal_newsletter').parent('span').addClass('checked');
    }

}

function statelist(selected_country, selected_state, element)
{
    var state_html = ''; //<option value="0">Select State</option>
    var has_states = false;
    var show_state = false;
    for (var id_country in countries) {
        if (id_country == selected_country) {
            if (countries[id_country]['contains_states'] == 1) {
                has_states = true;
                for (var i in countries[id_country]['states']) {
                    if (countries[id_country]['states'][i]['id_state'] == selected_state) {
                        state_html += '<option value="' + countries[id_country]['states'][i]['id_state'] + '" selected="selected" >' + countries[id_country]['states'][i]['name'] + '</option>';
                    } else {
                        state_html += '<option value="' + countries[id_country]['states'][i]['id_state'] + '">' + countries[id_country]['states'][i]['name'] + '</option>';
                    }
                }
            }
        }

    }
    if (element.indexOf("shipping") >= 0 && show_shipping_state == 1) {
        show_state = true;
    } else if (element.indexOf("payment") >= 0 && show_payment_state == 1) {
        show_state = true;
    }

    if (has_states && show_state) {
        $(element).html(state_html);
        $(element).parent().parent().show();
    } else {
        $(element).parent().parent().hide();
    }

}

function set_column_inside_height()
{
    var col_1_inside = $('#column-1-inside').height();
    var col_2_inside = $('#column-2-inside').height();

    if (col_1_inside > col_2_inside) {
        $('#column-2-inside').css('height', col_1_inside + 'px');
    } else if (col_1_inside < col_2_inside) {
        $('#column-1-inside').css('height', col_2_inside + 'px');
    }
}

var shipping_error_found_on_load = false;
function loadCarriers()
{
    var requestParam = getCounrtryAndIdDelivery();
    var id_country = requestParam[0];
    var id_state = 0;
    if (checkStateVisibility(id_country, 'select[name="shipping_address[id_state]"]')) {
        id_state = $('select[name="shipping_address[id_state]"]').val();
    }
    var postcode = $('input[name="shipping_address[postcode]"]').val();
    var id_address_delivery = requestParam[1];
    var vat_code = '';
    if($('input[name="shipping_address[vat_number]"]').val() != 'undefined' && $('input[name="shipping_address[vat_number]"]').val() != '' && $('input[name="shipping_address[vat_number]"]').val() != null){
        vat_code = $('input[name="shipping_address[vat_number]"]').val();
    }
    shipping_error_found_on_load = false;
    $.ajax({
        type: 'POST',
        headers: {"cache-control": "no-cache"},
        url: getURLwithTime($('#module_url').val()),
        async: true,
        cache: false,
        dataType: "json",
        data: 'ajax=true'
                + '&id_country=' + id_country
                + '&id_state=' + id_state
                + '&postcode=' + postcode
                +'&vat_number='+vat_code
                + '&id_address_delivery=' + id_address_delivery
                + '&method=loadCarriers&token=' + prestashop.static_token,
        beforeSend: function() {
            $('#shippingMethodLoader').show();
            $('#shipping_method_update_warning .permanent-warning').remove();
        },
        complete: function() {
            $('#shippingMethodLoader').hide();
        },
        success: function(jsonData)
        {
            if (jsonData['hasError']) {
                $('#shipping-method').html('');
                $('#shipping_method_update_warning').html('<div class="permanent-warning">' + jsonData['shipping_error'][0] + '</div>');
            } else {
                $('#shipping-method').html(jsonData['html']);
            }
            set_column_inside_height();
            loadCart();
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            var errors = sprintf(ajaxRequestFailedMsg, XMLHttpRequest, textStatus);
            $('#shipping_method_update_warning').html('<div class="permanent-warning">' + errors + '</div>');
        }
    });
}

function updateCarrierOnDeliveryChange()
{
    var delivery_option = ($('.supercheckout_shipping_option').length) ? '&' + $('.supercheckout_shipping_option:checked').attr('name') + '=' + $('.supercheckout_shipping_option:checked').attr('value') : '';

    $.ajax({
        type: 'POST',
        headers: {"cache-control": "no-cache"},
        url: getURLwithTime($('#module_url').val()),
        async: true,
        cache: false,
        dataType: "json",
        data: 'ajax=true'
                + delivery_option
                + '&method=updateCarrier&token=' + prestashop.static_token,
        beforeSend: function() {
            $('#shipping_method_update_warning .permanent-warning').remove();
            $('#shippingMethodLoader').show();
        },
        complete: function() {
            $('#shippingMethodLoader').hide();
        },
        success: function(jsonData)
        {
            if (jsonData['hasError']) {
                $('#shipping_method_update_warning').html('<div class="permanent-warning">' + jsonData['errors'][0] + '</div>');
            } else {
                loadCart();
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            var errors = sprintf(ajaxRequestFailedMsg, XMLHttpRequest, textStatus);
            $('#shipping_method_update_warning').html('<div class="permanent-warning">' + errors + '</div>');
        }
    });
}

function updateDeliveryExtraChange() {
    var messagePattern = /[<>{}]/i;
    var gift_message = '';
    var extrasError = false;
    if ($('#gift').length && $('#gift').is(':checked')) {
        gift_message = $('#gift_message').val();
        if (messagePattern.test(gift_message)) {
            extrasError = true;
            $('#gift_message').parent().append('<span class="errorsmall">' + commentInvalid + '</span>');
        }
    }

    if (!extrasError) {
        var recycle = ($('#recyclable').length && $('#recyclable').is(':checked')) ? 1 : 0;
        var gift = ($('#gift').length && $('#gift').is(':checked')) ? 1 : 0;
        gift_message = $('#gift_message').val();
        $.ajax({
            type: 'POST',
            headers: {"cache-control": "no-cache"},
            url: getURLwithTime($('#module_url').val()),
            async: true,
            cache: false,
            dataType: "json",
            data: 'ajax=true'
                    + '&recycle=' + recycle
                    + '&gift=' + gift
                    + '&gift_message=' + gift_message
                    + '&method=updateDeliveryExtra&token=' + prestashop.static_token,
            beforeSend: function() {
                $('#supercheckout-empty-page-content').find('.permanent-warning').html('');
            },
            success: function(jsonData)
            {
                if (jsonData['hasError']) {
                    var arr = jsonData['errors'];
                    $('#supercheckout-empty-page-content').html('<div class="permanent-warning">' + arr.join('<br>') + '</div>');
                    $("html, body").animate({scrollTop: 0}, "fast");
                }
                loadCart();
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                var errors = sprintf(ajaxRequestFailedMsg, XMLHttpRequest, textStatus);
                displayGeneralError(errors);
            }
        });
    }
}

function loadCart()
{
    $.ajax({
        type: 'POST',
        headers: {"cache-control": "no-cache"},
        url: getURLwithTime($('#module_url').val()),
        async: true,
        cache: false,
        dataType: "json",
        data: 'ajax=true'
                + '&method=loadCart&token=' + prestashop.static_token,
        beforeSend: function() {
            $('#cart_update_warning .permanent-warning').remove();
            $('#confirmLoader').show();
        },
        success: function(jsonData)
        {
            if (jsonData['redirect'] == true) {
                location.reload();
            } else {
                $('#confirmLoader').hide();
                $('#confirmCheckout').html(jsonData['html']);
                loadPayments();
                
            }
            checkCustomFieldBlocks();
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            var errors = sprintf(ajaxRequestFailedMsg, XMLHttpRequest, textStatus);
            $('#cart_update_warning').html('<div class="permanent-warning">' + errors + '</div>');
        }
    });
}

function checkDniandVatNumber(type)
{
    var id_country = $('select[name="shipping_address[id_country]"] option:selected').val();
    if (type == 'invoice') {
        id_country = $('select[name="payment_address[id_country]"] option:selected').val();
    }
    $.ajax({
        type: 'POST',
        headers: {"cache-control": "no-cache"},
        url: getURLwithTime($('#module_url').val()),
        async: true,
        cache: false,
        dataType: "json",
        data: 'ajax=true'
                + '&method=checkDniandVat'
                + '&id_country=' + id_country
                + '&token=' + prestashop.static_token,
        beforeSend: function() {
            hideGeneralError();
        },
        complete: function() {
        },
        success: function(jsonData) {
            if (type == 'delivery') {
                if (jsonData['is_need_dni']) {
                    $('input[name="shipping_address[dni]"]').parent().parent().show();
                } else {
                    $('input[name="shipping_address[dni]"]').attr('value', '');
                    $('input[name="shipping_address[dni]"]').parent().parent().hide();
                }
                if (jsonData['is_need_vat']) {
                    $('input[name="shipping_address[vat_number]"]').parent().find('.supercheckout-required').show();
                } else {
                    $('input[name="shipping_address[vat_number]"]').attr('value', '');
                    $('input[name="shipping_address[vat_number]"]').parent().find('.supercheckout-required').hide();
                }
                if (jsonData['is_need_states'] && show_shipping_state == 1) {
                    $('select[name="shipping_address[id_state]"]').parent().parent().show();
                } else {
                    $('select[name="shipping_address[id_state]"]').removeAttr('selected');
                    $('select[name="shipping_address[id_state]"]').parent().parent().hide();
                }
                if (jsonData['is_need_zip_code'] != 0 && show_shipping_postcode == 1) {
                    $('input[name="shipping_address[postcode]"]').parent().parent().show();
                } else {
                    $('input[name="shipping_address[postcode]"]').attr('value', '');
                    $('input[name="shipping_address[postcode]"]').parent().parent().hide();
                }
            }
            if (type == 'invoice') {
                if (jsonData['is_need_dni']) {
                    $('input[name="payment_address[dni]"]').parent().parent().show();
                } else {
                    $('input[name="payment_address[dni]"]').attr('value', '');
                    $('input[name="payment_address[dni]"]').parent().parent().hide();
                }
                if (jsonData['is_need_vat']) {
                    $('input[name="payment_address[vat_number]"]').parent().find('.supercheckout-required').show();
                } else {
                    $('input[name="payment_address[vat_number]"]').attr('value', '');
                    $('input[name="payment_address[vat_number]"]').parent().find('.supercheckout-required').hide();
                }
                if (jsonData['is_need_states'] && show_payment_state == 1) {
                    $('select[name="payment_address[id_state]"]').parent().parent().show();
                } else {
                    $('select[name="payment_address[id_state]"]').removeAttr('selected');
                    $('select[name="payment_address[id_state]"]').parent().parent().hide();
                }
                if (jsonData['is_need_zip_code'] != 0 && show_payment_postcode == 1) {
                    $('input[name="payment_address[postcode]"]').parent().parent().show();
                } else {
                    $('input[name="payment_address[postcode]"]').attr('value', '');
                    $('input[name="payment_address[postcode]"]').parent().parent().hide();
                }
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            var errors = sprintf(ajaxRequestFailedMsg, XMLHttpRequest, textStatus);
            $('#checkoutShippingAddress .supercheckout-checkout-content .permanent-warning').html(errors);
        }
    });
}

function isValidVatNumber(type) {
    var id_country = $('select[name="shipping_address[id_country]"] option:selected').val();
    var vat_number = $('input[name="shipping_address[vat_number]"]').val();
    if (type == 'invoice') {
        id_country = $('select[name="payment_address[id_country]"] option:selected').val();
        vat_number = $('input[name="payment_address[vat_number]"]').val();
    }
    $.ajax({
        type: 'POST',
        headers: {"cache-control": "no-cache"},
        url: getURLwithTime($('#module_url').val()),
        async: true,
        cache: false,
        dataType: "json",
        data: 'ajax=true'
                + '&method=isValidVatNumber'
                + '&id_country=' + id_country
                + '&vat_number=' + vat_number
                + '&token=' + prestashop.static_token,
        beforeSend: function() {
            hideGeneralError();
            if (inline_validation == 1) {
                if (type == 'delivery') {
                    $('input[name="shipping_address[vat_number]"]').removeClass('ok-form error-form');
                }
                if (type == 'invoice') {
                    $('input[name="payment_address[vat_number]"]').removeClass('ok-form error-form');
                }
            }

        },
        complete: function() {
        },
        success: function(jsonData) {
            if (jsonData['error'] != undefined) {
                var errors = jsonData['error'].join('<br>');
                if (type == 'delivery') {
                    $('input[name="shipping_address[vat_number]"]').parent().append('<span class="errorsmall">' + errors + '</span>');
                    if (inline_validation == 1)
                        $('input[name="shipping_address[vat_number]"]').addClass('error-form');
                }
                if (type == 'invoice') {
                    $('input[name="payment_address[vat_number]"]').parent().append('<span class="errorsmall">' + errors + '</span>');
                    if (inline_validation == 1)
                        $('input[name="payment_address[vat_number]"]').addClass('error-form');
                }
            } else {
                loadCarriers();
                if (inline_validation == 1) {
                    if (type == 'delivery') {
                        if ($('input[name="shipping_address[vat_number]"]').siblings('.supercheckout-required').css('display') == "none" && $('input[name="shipping_address[vat_number]"]').val() == ''){
                            $('input[name="shipping_address[vat_number]"]').removeClass('ok-form error-form');
                        }else{
                            $('input[name="shipping_address[vat_number]"]').addClass('ok-form');
                        }

                    }
                    if (type == 'invoice'){
                        if ($('input[name="payment_address[vat_number]"]').siblings('.supercheckout-required').css('display') == "none" && $('input[name="payment_address[vat_number]"]').val() == ''){
                            $('input[name="payment_address[vat_number]"]').removeClass('ok-form error-form');
                        }else{
                            $('input[name="payment_address[vat_number]"]').addClass('ok-form');
                        }

                    }
                }

            }

        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            var errors = sprintf(ajaxRequestFailedMsg, XMLHttpRequest, textStatus);
            displayGeneralError(errors)
        }
    });
}

function checkZipCode(e, isCarrierLoad)
{
    var checkZip = false;
    var address_type = $(e).attr('name').split('[');
    address_type = address_type[0];
    var container = 'checkoutShippingAddress';
    if (address_type == 'payment_address') {
        container = 'checkoutBillingAddress';
    }

    if ($('#' + container + ' input[name="' + address_type + '[postcode]"]').length) {
        checkZip = true;
    }
    if (checkZip) {
        var checkData = {
            'ajax': true,
            'method': 'checkZipCode',
            'id_country': ($('select[name="' + address_type + '[id_country]"]').length > 0) ? $('select[name="' + address_type + '[id_country]"] option:selected').val() : '',
            'postcode': ($('input[name="' + address_type + '[postcode]"]').length > 0) ? $('input[name="' + address_type + '[postcode]"]').val() : '',
        }
        $.ajax({
            type: 'POST',
            headers: {"cache-control": "no-cache"},
            url: getURLwithTime($('#module_url').val()),
            async: true,
            cache: false,
            dataType: "json",
            data: checkData,
            beforeSend: function() {
                $('#' + container + ' input[name="' + address_type + '[postcode]"]').parent().find('span.errorsmall').remove();
                if (inline_validation == 1)
                {
                    $('#' + container + ' input[name="' + address_type + '[postcode]"]').removeClass('error-form');
                    $('#' + container + ' input[name="' + address_type + '[postcode]"]').removeClass('ok-form');
                }

            },
            complete: function() {

            },
            success: function(jsonData)
            {
                if (jsonData['error'] != undefined) {
                    $('#' + container + ' input[name="' + address_type + '[postcode]"]').parent().append('<span class="errorsmall">' + jsonData['error'] + '</span>');
                    if (inline_validation == 1)
                        $('#' + container + ' input[name="' + address_type + '[postcode]"]').addClass('error-form');
                }
                else
                {
                    if (inline_validation == 1)
                        $('#' + container + ' input[name="' + address_type + '[postcode]"]').addClass('ok-form');
                }
                if (isCarrierLoad) {
                    loadCarriers();
                }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                var errors = sprintf(ajaxRequestFailedMsg, XMLHttpRequest, textStatus);
                $('#' + container + ' .supercheckout-checkout-content').html('<div class="permanent-warning">' + errors + '</div>');
            }
        });
    }
}

function updateInvoiceStatus(element)
{
    $.ajax({
        type: 'POST',
        headers: {"cache-control": "no-cache"},
        url: getURLwithTime($('#module_url').val()),
        async: true,
        cache: false,
        dataType: "json",
        data: 'ajax=true'
                + '&method=setSameInvoice'
                + '&use_for_invoice=' + (($(element).is(':checked')) ? '1' : '0')
                + '&token=' + prestashop.static_token,
        beforeSend: function() {
            $('.input-different-shipping').parent().find('.errorsmall').remove();
        },
        complete: function() {
        },
        success: function(jsonData) {
            //_loadInvoiceAddress();
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            var errors = sprintf(ajaxRequestFailedMsg, XMLHttpRequest, textStatus);
            $('.input-different-shipping').parent().append('<div class="errorsmall">' + errors + '</div>');
        }
    });
}

function _loadInvoiceAddress()
{
    var id_country = 0;
    var id_address_invoice = 0;
    if ($('input[name="payment_address_value"]').length) {
        if ($('input[name="payment_address_value"]:checked').val() == 1) {
            id_country = $('select[name="payment_address[id_country]"] option:selected').val();
        } else if ($('input[name="payment_address_value"]:checked').val() == 0) {
            id_address_invoice = $('select[name="payment_address_id"] option:selected').val();
        }
    } else {
        id_country = $('select[name="payment_address[id_country]"] option:selected').val();
    }
    var id_state = $('select[name="payment_address[id_state]"]').val();
    var postcode = $('input[name="payment_address[postcode]"]').val();
    $.ajax({
        type: 'POST',
        headers: {"cache-control": "no-cache"},
        url: getURLwithTime($('#module_url').val()),
        async: true,
        cache: false,
        dataType: "json",
        data: 'ajax=true'
                + '&method=loadInvoiceAddress'
                + '&id_country=' + id_country
                + '&id_state=' + id_state
                + '&postcode=' + postcode
                + '&id_address_invoice=' + id_address_invoice
                + '&token=' + prestashop.static_token,
        beforeSend: function() {
            hideGeneralError();
        },
        complete: function() {
        },
        success: function(jsonData) {
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            var errors = sprintf(ajaxRequestFailedMsg, XMLHttpRequest, textStatus);
            displayGeneralError(errors);
        }
    });
}

function callCoupon()
{
    $.ajax({
        type: "POST",
        headers: {"cache-control": "no-cache"},
        url: getURLwithTime($('#module_url').val()) + '&ajax=true',
        async: true,
        cache: false,
        data: $('#voucher-form input'),
        dataType: 'json',
        beforeSend: function() {
            $('#cart_update_warning .permanent-warning').remove();
            $('#confirmLoader').show();
        },
        complete: function() {
            $('#confirmLoader').hide();
        },
        success: function(json) {
            if (json['refresh'] != undefined)
                location.reload();
            if (json['success'] != undefined) {
                $.gritter.add({
                    title: notification,
                    text: json['success'],
                    //	image: '',
                    class_name: 'gritter-success',
                    sticky: false,
                    time: '3000'
                });
                $('#discount_name').attr('value', '');
                loadCart();
            } else if (json['error'] != undefined) {
                $('#cart_update_warning').html('<div class="permanent-warning">' + json['error'] + '</div>');
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            var error = sprintf(ajaxRequestFailedMsg, XMLHttpRequest, textStatus);
            $('#cart_update_warning').html('<div class="permanent-warning">' + error + '</div>');
        }
    });
}

function removeDiscount(id_cart_rule)
{
    $.ajax({
        type: "POST",
        headers: {"cache-control": "no-cache"},
        url: getURLwithTime($('#module_url').val()),
        async: true,
        cache: false,
        data: '&ajax=true&deleteDiscount=' + id_cart_rule,
        dataType: 'json',
        beforeSend: function() {
            $('#cart_update_warning .permanent-warning').remove();
            $('#confirmLoader').show();
        },
        complete: function() {
            $('#confirmLoader').hide();
        },
        success: function(json) {
            if (json['success'] != undefined) {
                $.gritter.add({
                    title: notification,
                    text: json['success'],
                    //	image: '',
                    class_name: 'gritter-success',
                    sticky: false,
                    time: '3000'
                });
                $('#discount_name').attr('value', '');
                loadCart();
            } else if (json['error'] != undefined) {
                $('#cart_update_warning').html('<div class="permanent-warning">' + json['error'] + '</div>');
            }
            $('#highlighted_cart_rules').html(json['cart_rule']);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            var error = sprintf(ajaxRequestFailedMsg, XMLHttpRequest, textStatus);
            $('#cart_update_warning').html('<div class="permanent-warning">' + error + '</div>');
        }
    });
}

function upQty(element)
{
    updateQty(element, 'up', 1, true);
}

function downQty(element)
{
    var hidden = parseInt($('#confirmCheckout input[name=' + element + '_hidden]').val());
    if (hidden == 1) {
        var id = element.replace('quantity_', '');
        deleteProductFromCart(id);
    } else {
        updateQty(element, 'down', 1, true);
    }
}

function updateQtyByBtn(element)
{
    $('#cart_update_warning .permanent-warning').remove();
    var exp = new RegExp("^[0-9]+$");
    var hidden = $('#confirmCheckout input[name=' + element + '_hidden]').val();
    var input = $('#confirmCheckout  input[name=' + element + ']').val();
    if (exp.test(input) == true) {
        var QtyToUpDate = parseInt(input) - parseInt(hidden);
        var calculated_qty = parseInt(QtyToUpDate);
        if (calculated_qty == 0) {
            $('#cart_update_warning').html('<div class="permanent-warning">No Change in Quantity</div>');
        } else {
            var action = 'up';
            if (calculated_qty < 0) {
                calculated_qty = parseInt(hidden) - parseInt(input);
                action = 'down';
            }
            updateQty(element, action, calculated_qty, false);
        }
    } else {
        $('#cart_update_warning').html('<div class="permanent-warning">' + scInvalidQty + '</div>');
    }
}

function updateQty(element, action, qty, is_step_action)
{
    $('#cart_update_warning .permanent-warning').remove();
    var exp = new RegExp("^[0-9]+$");
    if (exp.test(qty) == true) {
        var id_customization = 0;
        var id_product = 0;
        var id_product_attribute = 0;
        var id_address_delivery = 0;
        var ids = 0;
        var id = element.replace('quantity_', '');
        ids = id.split('_');
        id_product = parseInt(ids[0]);
        var errors = '';

        if (typeof (ids[1]) !== 'undefined') {
            id_product_attribute = parseInt(ids[1]);
        }
        if (typeof (ids[2]) !== 'undefined') {
            id_address_delivery = parseInt(ids[3]);
        }
        if (typeof (ids[3]) !== 'undefined') {
            id_customization = parseInt(ids[3]);
        }
        $.ajax({
            type: "POST",
            headers: {"cache-control": "no-cache"},
            url: getURLwithTime(cart_update_url),
            data: '&ajax=true'
                    + '&update=1'
                    + '&action=update'
                    + '&id_product=' + id_product
                    + '&ipa=' + id_product_attribute
                    + '&id_address_delivery=' + id_address_delivery
                    + ((id_customization !== 0) ? '&id_customization=' + id_customization : '')
                    + '&qty=' + qty
                    + '&token=' + prestashop.static_token
                    + '&op=' + action,
            async: true,
            cache: false,
            dataType: 'json',
            beforeSend: function() {
                $('#cart_update_warning .permanent-warning').remove();
                $('#confirmLoader').show();
            },
            complete: function() {
                $('#confirmLoader').hide();
            },
            success: function(jsonData) {
                if (jsonData.hasError) {
                    for (var error in jsonData.errors) {
                        if (error !== 'indexOf') {
                            errors += jsonData.errors[error] + "<br>";
                        }
                    }
                    $('#cart_update_warning').html('<div class="permanent-warning">' + errors + '</div>');
                } else {
                    var new_qty = parseInt($('input[name=' + element + ']').val());
                    if (is_step_action == true) {
                        if (action == 'up') {
                            new_qty = new_qty + 1;
                        } else if (action == 'down') {
                            new_qty = new_qty - 1;
                        }
                    }
                    $('input[name=' + element + ']').val(new_qty);
                    $('input[name=' + element + '_hidden]').val(new_qty);
                    loadCart();
                }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                errors = sprintf(ajaxRequestFailedMsg, XMLHttpRequest, textStatus);
                $('#cart_update_warning').html('<div class="permanent-warning">' + errors + '</div>');
            }
        });
    } else {
        $('#cart_update_warning').html('<div class="permanent-warning">' + scInvalidQty + '</div>');
    }
}

function deleteProductFromCart(id)
{
    var id_customization = 0;
    var id_product = 0;
    var id_product_attribute = 0;
    var id_address_delivery = 0;
    var ids = 0;
    ids = id.split('_');
    id_product = parseInt(ids[0]);
    var errors = '';

    if (typeof (ids[1]) !== 'undefined') {
        id_product_attribute = parseInt(ids[1]);
    }
    if (typeof (ids[2]) !== 'undefined') {
        id_address_delivery = parseInt(ids[3]);
    }
    if (typeof (ids[3]) !== 'undefined') {
        id_customization = parseInt(ids[3]);
    }
    $.ajax({
        type: 'POST',
        headers: {"cache-control": "no-cache"},
        url: getURLwithTime(cart_update_url),
        data: '&ajax=1'
            + '&delete=1'
            + '&action=update'
            + '&id_product=' + id_product
            + '&ipa=' + id_product_attribute
            + '&id_address_delivery=' + id_address_delivery
            + ((id_customization !== 0) ? '&id_customization=' + id_customization : '')
            + '&token=' + prestashop.static_token,
        async: true,
        cache: false,
        dataType: 'json',
        beforeSend: function() {
            $('#cart_update_warning .permanent-warning').remove();
        },
        success: function(jsonData)
        {
            if (jsonData.hasError) {
                for (var error in jsonData.errors) {
                    if (error !== 'indexOf') {
                        errors += jsonData.errors[error] + "<br>";
                    }
                }
                $('#cart_update_warning').html('<div class="permanent-warning">' + errors + '</div>');
            } else {
                $('#product_' + id).fadeOut('slow', function() {
                    $(this).remove();
                });
                loadCarriers();
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            errors = sprintf(ajaxRequestFailedMsg, XMLHttpRequest, textStatus);
            $('#cart_update_warning').html('<div class="permanent-warning">' + errors + '</div>');
        }
    });
}

function displayGeneralError(errors)
{
    if ($('#supercheckout-empty-page-content .permanent-warning').length) {
        $('#supercheckout-empty-page-content .permanent-warning').html(errors);
    } else {
        $('#supercheckout-empty-page-content').html('<div class="permanent-warning">' + errors + '</div>');
    }
}

function hideGeneralError()
{
    $('#supercheckout-empty-page-content .permanent-warning').remove();
}

function getCounrtryAndIdDelivery()
{
    var id_country = 0;
    var id_address_delivery = '';
    if ($('input[name="shipping_address_value"]').length) {
        if ($('input[name="shipping_address_value"]:checked').val() == 1) {
            id_country = $('select[name="shipping_address[id_country]"] option:selected').val();
        } else if ($('input[name="shipping_address_value"]:checked').val() == 0) {
            id_address_delivery = $('select[name="shipping_address_id"] option:selected').val();
        }
    } else {
        id_country = $('select[name="shipping_address[id_country]"] option:selected').val();
    }

    var arr = [];
    arr.push(id_country);
    arr.push(id_address_delivery);
    return arr;
}

function checkStateVisibility(selected_country, element)
{
    var state_html = '';
    var has_states = false;
    var show_state = false;
    for (var id_country in countries) {
        if (id_country == selected_country) {
            if (countries[id_country]['contains_states'] == 1) {
                has_states = true;
            }
        }
    }
    if (element.indexOf("shipping") >= 0 && show_shipping_state == 1) {
        show_state = true;
    }
    else if (element.indexOf("payment") >= 0 && show_payment_state == 1) {
        show_state = true;
    }

    if (has_states && show_state) {
        return true;
    } else {
        return false;
    }
}

function loadPayments()
{
    var params = '';
    if ($('input:radio[name="payment_method"]').length) {
        params = '&selected_payment_method_id=' + $('input:radio[name="payment_method"]:checked').val();
    }
    $.ajax({
        type: 'POST',
        headers: {"cache-control": "no-cache"},
        url: getURLwithTime($('#module_url').val()),
        async: true,
        cache: false,
        dataType: "json",
        data: 'ajax=true'
                + params
                + '&method=loadPayment&token=' + prestashop.static_token,
        beforeSend: function() {
            $('#payment_method_update_warning .permanent-warning').remove();
            $('#paymentMethodLoader').show();
        },
        complete: function() {
            $('#paymentMethodLoader').hide();
        },
        success: function(jsonData)
        {
            $('#paymentMethodLoader').hide();
            $('#payment-method').html(jsonData['html']);
            set_column_inside_height();
            loadPaymentAddtionalInfo();
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            var errors = sprintf(ajaxRequestFailedMsg, XMLHttpRequest, textStatus);
            $('#payment_method_update_warning').html('<div class="permanent-warning">' + errors + '</div>');
        }
    });
}

function loadPaymentAddtionalInfo()
{
    if (!$('input:radio[name="payment_method"]').length) {
        return;
    }
    var selected_option = $('input:radio[name="payment_method"]:checked').attr('id');
    if ($('#payment_methods_additional_container').length) {
        $('#payment_methods_additional_container .payment-additional-info').hide();
        $('#payment_methods_additional_container .'+selected_option+'_info_container').show();
        set_column_inside_height();
    }
    if (!$('#'+selected_option).hasClass('binary')) {
        $('#placeorderButton').show();
    }
    $.ajax({
        type: 'POST',
        headers: {"cache-control": "no-cache"},
        url: getURLwithTime($('#module_url').val()),
        async: true,
        cache: false,
        dataType: "json",
        data: 'ajax=true'
                + '&selected_payment_method_id=' + $('input:radio[name="payment_method"]:checked').val()
                + '&method=loadPaymentAdditionalInfo&token=' + prestashop.static_token,
        beforeSend: function() {
            $('#payment_method_update_warning .permanent-warning').remove();
            $('#paymentMethodLoader').show();
        },
        complete: function() {
            $('#paymentMethodLoader').hide();
        },
        success: function(jsonData)
        {
            $('#paymentMethodLoader').hide();
            if (jsonData['html'] != '') {
                $('#velsof_payment_dialog .velsof_content_section').html(jsonData['html']);
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            var errors = sprintf(ajaxRequestFailedMsg, XMLHttpRequest, textStatus);
            $('#payment_method_update_warning').html('<div class="permanent-warning">' + errors + '</div>');
        }
    });
}

function display_progress(value) {
    $('#supercheckout_confirm_order').attr('disabled', true);
    $('#submission_progress_overlay').css('height', $('#supercheckout-fieldset').height());
    $('#supercheckout_order_progress_status_text').html(value + '%');
    $('#submission_progress_overlay').show();
    $('#supercheckout_order_progress_bar').show();
}

function hide_progress() {
    $('#supercheckout_confirm_order').removeAttr('disabled');
    $('#submission_progress_overlay').hide();
    $('#supercheckout_order_progress_bar').hide();
    $('#supercheckout_order_progress_status_text').html('0%');
}

function placeOrder()
{
    $('.errorsmall').remove();
    hideGeneralError();
    
    if ($('#supercheckout-agree').length) {
        var is_toc_checked = true;
        $('#supercheckout-agree input[type="checkbox"]').each(function(){
            if (!$(this).is(':checked')) {
                is_toc_checked = false;
            }
        });
        if (!is_toc_checked) {
            displayGeneralError(toc_error);
            return;
        }
    }

    console.log($('#payment-method input[name="payment_method"]:checked').val());
    console.log($('input:radio[name="payment_method"]:checked').attr('id'));
    console.log($('#payment_methods_binaries').length);
    console.log($('#velsof_payment_dialog .velsof_content_section form'));
    if (!confirm(order_place_confirmation)) {
        return;
    }
    var errors = '';
    $.ajax({
        type: 'POST',
        headers: {"cache-control": "no-cache"},
        url: getURLwithTime($('#module_url').val()) + '&ajax=true',
        async: true,
        cache: false,
        dataType: "json",
        data: $('#velsof_supercheckout_form').serialize(),
        beforeSend: function() {
            display_progress(20);
        },
        complete: function() {

        },
        success: function(jsonData)
        {
            console.log('test');
            // Checking if jsonData is having property as custom_fields_errors
            // If true it means that all other validations are correct and error occured in custom fields 
            if (jsonData.hasOwnProperty('custom_fields_errors')) {
                $(".errorsmall_custom").hide();
                $(".errorsmall_custom").parent().parent().css("border-color","#CCCCCC");
                $.each(jsonData.custom_fields_errors.error, function (key, data) {
                    hide_progress();
                    $("html, body").animate({scrollTop: 0}, "fast");
                    $("#error_"+key).html(data);
                    $("#error_"+key).show();
                    $("#error_"+key).parent().parent().css("border-color","#FF0000");
                });
            }
            
            if (jsonData['error'] != undefined) {
                var has_validation_error = false;
                var i = 0;
                if (jsonData['error']['checkout_option'] != undefined) {
                    has_validation_error = true;
                    for (i in jsonData['error']['checkout_option']) {
                        $('input[name="' + jsonData['error']['checkout_option'][i]['key'] + '"]').parent().append('<span class="errorsmall">' + jsonData['error']['checkout_option'][i]['error'] + '</span>');
                        if (inline_validation == 1)
                            $('input[name="' + jsonData['error']['checkout_option'][i]['key'] + '"]').addClass('error-form').removeClass('ok-form');
                    }
                }

                var i = 0;
                var key = '';
                if (jsonData['error']['customer_personal'] != undefined) {
                    has_validation_error = true;
                    for (i in jsonData['error']['customer_personal']) {
                        key = jsonData['error']['customer_personal'][i]['key'];
                        if (key == 'dob' || key == 'id_gender') {
                            $('.supercheckout_personal_' + key).append('<span class="errorsmall">' + jsonData['error']['customer_personal'][i]['error'] + '</span>');
                        } else if (key == 'password') {
                            $('input[name="customer_personal[' + key + ']"]').parent().append('<span class="errorsmall">' + jsonData['error']['customer_personal'][i]['error'] + '</span>');
                            if (inline_validation == 1)
                                $('input[name="customer_personal[' + key + ']"]').addClass('error-form').removeClass('ok-form');
                        } else {
                            $('input[name="customer_personal[' + key + ']"]').parent().parent().parent().parent().append('<span class="errorsmall">' + jsonData['error']['customer_personal'][i]['error'] + '</span>');
                            if (inline_validation == 1)
                                $('input[name="customer_personal[' + key + ']"]').addClass('error-form').removeClass('ok-form');
                        }
                    }
                }

                var tmp_index;
                if (jsonData['error']['shipping_address'] != undefined) {
                    has_validation_error = true;
                    for (tmp_index in jsonData['error']['shipping_address']) {
                        $('input[name="shipping_address[' + jsonData['error']['shipping_address'][tmp_index]['key'] + ']"]').parent().append('<span class="errorsmall">' + jsonData['error']['shipping_address'][tmp_index]['error'] + '</span>');
                        if (inline_validation == 1)
                            $('input[name="shipping_address[' + jsonData['error']['shipping_address'][tmp_index]['key'] + ']"]').addClass('error-form').removeClass('ok-form');
                        if (jsonData['error']['shipping_address'][tmp_index]['key'] == 'postcode')
                            $('#shipping_post_code').css("display", "block");// helpful when postcode is hidden from our module but is equired for some country
                    }
                }


                var tmp_index;
                if (jsonData['error']['payment_address'] != undefined) {
                    has_validation_error = true;
                    for (tmp_index in jsonData['error']['payment_address']) {
                        $('input[name="payment_address[' + jsonData['error']['payment_address'][tmp_index]['key'] + ']"]').parent().append('<span class="errorsmall">' + jsonData['error']['payment_address'][tmp_index]['error'] + '</span>');
                        if (inline_validation == 1)
                            $('input[name="payment_address[' + jsonData['error']['payment_address'][tmp_index]['key'] + ']"]').addClass('error-form').removeClass('ok-form');
                        if (jsonData['error']['payment_address'][tmp_index]['key'] == 'postcode')
                            $('#payment_post_code').css("display", "block"); // helpful when postcode is hidden from our module but is equired for some country
                    }
                }
                i = 0;
                if (jsonData['error']['general'] != undefined) {
                    errors = '';
                    for (var i in jsonData['error']['general']) {
                        errors += jsonData['error']['general'][i] + '<br>';
                    }
                } else if (has_validation_error) {
                    errors = validationfailedMsg;
                } else {
                    errors = scOtherError;
                }
                displayGeneralError(errors);
                hide_progress();
                $("html, body").animate({scrollTop: 0}, "fast");
            } else {
                if (jsonData['warning'] != undefined) {
                    //handle warning here
                }
                display_progress(30);
                var is_carrier_selected = true;

                //validate Methods
                $('#shipping-method .supercheckout-checkout-content .permanent-warning').remove();
                if ($('#shipping-method .supercheckout_shipping_option').length) {
                    if (!$('#shipping-method .supercheckout_shipping_option:checked').length) {
                        is_carrier_selected = false;
                    }
                }

                var is_payment_selected = true;
                $('#payment-method .supercheckout-checkout-content .permanent-warning').remove();
                if ($('#payment-method input[name="payment_method"]').length) {
                    if (!$('#payment-method input[name="payment_method"]:checked').length) {
                        is_payment_selected = false;
                    }
                }

                if (is_virtual_cart) {
                    is_carrier_selected = true;
                }

                if (!is_carrier_selected) {
                    $('#shipping-method .supercheckout-checkout-content').html('<div class="permanent-warning">' + ShippingRequired + '</div>');
                }
                if (!is_payment_selected) {
                    $('#payment-method .supercheckout-checkout-content').html('<div class="permanent-warning">' + paymentRequired + '</div>');
                }

                if (!is_carrier_selected || !is_payment_selected) {
                    hide_progress();
                    displayGeneralError('Please provide required Information');
                    $("html, body").animate({scrollTop: 0}, "fast");
                } else {
                    display_progress(50);
                    //Validate Order Extras
                    var messagePattern = /[<>{}]/i;
                    var message = '';
                    var extrasError = false;
                    if ($('#supercheckout-comment_order').length) {
                        message = $('#supercheckout-comment_order').val();
                        if (messagePattern.test(message)) {
                            extrasError = true;
                            $('#supercheckout-comment_order').parent().append('<span class="errorsmall">' + commentInvalid + '</span>');
                        }
                    }

                    if ($('#gift').length && $('#gift').is(':checked')) {
                        message = $('#gift_message').val();
                        if (messagePattern.test(message)) {
                            extrasError = true;
                            $('#gift_message').parent().append('<span class="errorsmall">' + commentInvalid + '</span>');
                        }
                    }

                    if (extrasError) {
                        hide_progress();
                    } else {
                        display_progress(80);
                        if (jsonData['is_free_order']) {
                            createFreeOrder();
                        } else {
                            var selected_payment = $('input:radio[name="payment_method"]:checked').attr('id');
                            console.log(selected_payment);
                            if ($('input:radio[name="payment_method"]:checked').hasClass('binary')) {
                                if ($('#payment_methods_binaries').length) {
                                    $('#velsof_payment_dialog .velsof_content_section').html($('#payment_methods_binaries .js-payment-'+selected_payment).html());
                                    $('#placeorderButton').hide();
                                    $('#velsof_payment_dialog').show();
                                } else {
                                    alert('Error with selected Payment Method. Please contact with store.');
                                }
                            } else {
                                $('#velsof_payment_dialog .velsof_content_section form').submit();
                            }
                        }
                    }

                }
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            errors = sprintf(ajaxRequestFailedMsg, XMLHttpRequest, textStatus);
            displayGeneralError(errors);
            hide_progress();
            $("html, body").animate({scrollTop: 0}, "fast");
        }
    });
}

function createFreeOrder()
{
    $.ajax({
        type: 'POST',
        headers: {"cache-control": "no-cache"},
        url: getURLwithTime($('#module_url').val()),
        async: true,
        cache: false,
        dataType: "json",
        data: 'ajax=true'
                + '&method=createFreeOrder&token=' + prestashop.static_token,
        beforeSend: function() {
        },
        success: function(jsonData)
        {
            if (typeof isGuest != 'undefined')
                document.location.href = scp_guest_tracking_url + '?id_order=' + encodeURIComponent(jsonData['order_reference']) + '&email=' + encodeURIComponent(jsonData['email']);
            else
                document.location.href = scp_history_url;
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            var errors = sprintf(ajaxRequestFailedMsg, XMLHttpRequest, textStatus);
            displayGeneralError(errors);
            hide_progress();
        }
    });
}

function checkAction(e)
{
    if (typeof e == 'undefined' && window.event) {
        e = window.event;
    }
    if (e.keyCode == 13) {
        supercheckoutlogin();
    }
}

function supercheckoutlogin()
{
    $.ajax({
        type: "POST",
        url: getURLwithTime($('#module_url').val()) + '&ajax=true',
        data: $('input:text[name="supercheckout_email"], #supercheckout-login-box input'),
        dataType: 'json',
        beforeSend: function() {
            $('#button-login').parent().find('img').show();
            $('#checkoutLogin .supercheckout-checkout-content .permanent-warning').remove();
            $('.errorsmall').remove();
        },
        complete: function() {

        },
        success: function(json) {
            if (json['success'] != undefined) {
                location.href = json['success'];
            } else if (json['error']['general'] != undefined) {
                $('#button-login').parent().find('img').hide();
                $('#checkoutLogin .supercheckout-checkout-content').html('<div class="permanent-warning">' + json['error']['general'] + '</div>');
            } else {
                $('#button-login').parent().find('img').hide();
                if (json['error']['email'] != undefined) {
                    $('#checkoutLogin input:text[name="supercheckout_email"]').parent().append('<span class="errorsmall">' + json['error']['email'] + '</span>');
                    if (inline_validation == 1)
                        $('#checkoutLogin input:text[name="supercheckout_email"]').addClass('error-form').removeClass('ok-form');
                }
                if (json['error']['password'] != undefined) {
                    $('#supercheckout-login-box input:password[name="supercheckout_password"]').parent().append('<span class="errorsmall">' + json['error']['password'] + '</span>');
                    if (inline_validation == 1)
                        $('#supercheckout-login-box input:password[name="supercheckout_password"]').addClass('error-form').removeClass('ok-form');
                }
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown) {
            var errors = sprintf(ajaxRequestFailedMsg, XMLHttpRequest, textStatus);
            $('#checkoutLogin .supercheckout-checkout-content').html('<div class="permanent-warning">' + errors + '</div>');
        }
    });
}

function ColorLuminance(hex, lum) {

    // validate hex string
    hex = String(hex).replace(/[^0-9a-f]/gi, '');
    if (hex.length < 6) {
        hex = hex[0] + hex[0] + hex[1] + hex[1] + hex[2] + hex[2];
    }
    lum = lum || 0;

    // convert to decimal and change luminosity
    var rgb = "#", c, i;
    for (i = 0; i < 3; i++) {
        c = parseInt(hex.substr(i * 2, 2), 16);
        c = Math.round(Math.min(Math.max(0, c + (c * lum)), 255)).toString(16);
        rgb += ("00" + c).substr(c.length);
    }

    return rgb;
}

function subscribeCustomer(email)
{
    $.ajax({
        type: 'POST',
        url: $('#module_url').val() + '&email=' + email,
        async: true,
        cache: false,
        dataType: "json",
        data: 'ajax=true'
                + '&method=addEmailToList',
        beforeSend: function() {
        },
        success: function(jsonData)
        {
        }
    });
}

function checkCustomFieldBlocks() {
    var customFieldsContainers = $(".div_custom_fields");
    customFieldsContainers.each(function(index)
    {
        var divValue = $(this).html();
        if($.trim(divValue) == "")
        {
            $(this).hide();
        }
    });
}
