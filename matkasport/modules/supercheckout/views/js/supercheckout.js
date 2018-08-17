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
 * @copyright 2015 Knowband
 */

var primaryColor = '#496CAD',
dangerColor = '#bd362f',
successColor = '#609450',
warningColor = '#ab7a4b',
inverseColor = '#45484d';

var themerPrimaryColor = primaryColor;
var previousPoint = null, previousLabel = null;


$(document).ready(function() {
	getMailChimpList();
    $('#velsof_tab_login').on('click',function(){
       $("#google_acc").hide();
        $("#facebook_acc").hide();
        $("#loginizer_link").show();
    });
    $('#slide1_controls').on('click', function(){      
        $('.velsof-adv-panel').removeAttr('style');
        $('#slide1_controls').hide();
        $('#slide2_controls').show();
    });
    $('#slide2_controls').on('click', function(){
        $('.velsof-adv-panel').attr('style','right:-18px;');
        $('#slide1_controls').show();
        $('#slide2_controls').hide();
    });
    
    $('.alternate').each(function() {
        $('tr:odd',  this).addClass('odd').removeClass('even');
        $('tr:even', this).addClass('even').removeClass('odd');
    });

    $('input.input-checkbox-option').click(function(){
        if($(this).is(':checked')){
            $(this).attr('value', 1);
        }else{
            $(this).attr('value', 0);
        }
    });
    
    $('.display_address_field').click(function(event){
        var id = $(this).attr('id').split('_');
        id.pop();
        id = id.join('_');
		if(!$(this).is(':checked')){
			if($('#'+id+'_require').is(':checked')){
				$('#'+id+'_require').parent().removeClass('checked');
                $('#'+id+'_require').removeAttr('checked');
                $('#'+id+'_require').attr('value', 0);
			}
			
		}
		//$(this).parent().removeClass('checked');
//        if($('#'+id+'_require').is(':checked')){
//            if($(this).is(':checked')){
//                alert(uncheckAddressFieldMsg)
//                $(this).parent().addClass('checked');
//                event.preventDefault();
//            }else{
//                $(this).parent().addClass('checked');
//            }            
//        }
    });
    
    $('.require_address_field').click(function(event){
        if($(this).is(':checked')){
            var id = $(this).attr('id').split('_');
            id.pop();
            id = id.join('_');
            if(!$('#'+id+'_display').is(':checked')){
                $('#'+id+'_display').parent().addClass('checked');
                $('#'+id+'_display').attr('checked', 'checked');
                $('#'+id+'_display').attr('value', 1);
            }
        }
        //event.preventDefault();

        //alert(id);
    });
    
    $('.sortable > tr').tsort({attr:'sort-data'});
	
    $( ".sortable" ).sortable({
        revert: true,
        cursor: "move",
        items: "> .sort-item",
        containment: "document",
        distance: 5 ,
        opacity: 0.8,
        stop: function( event, ui ) {
            $(this).find("tr").each(function(i, el){
                //$(this).find("input.sort").val($(el).index());
                $(this).find("input.sort").attr('value',$(el).index()+1);
                $('.alternate').each(function() {
                    $('tr:odd',  this).addClass('odd').removeClass('even');
                    $('tr:even', this).addClass('even').removeClass('odd');
                });
            });
        }
    });
    
    $('.bootbox-design-edit-html').click(function(){
        var id = $(this).attr('id')+'_value';
        var splitId = id.split('_');
        if($("#"+id).length){
            var stored_value = $("#"+id).val();
        }else{
            var hidden_field = '<input type="hidden" id="'+id+'" name="velocity_supercheckout[design][html]['+splitId[splitId.length - 1]+']" value="">';
            $('#tab_design').append(hidden_field);
            var stored_value="";
        }

        bootbox.confirm('<h4>'+$("#modals_bootbox_prompt_header_html").val()+'</h4><textarea id="text_area_html_'+splitId[splitId.length - 1]+'" class="supercheckout_textarea_html" >'+ stored_value +'</textarea>',
        function(result) {
            if(result){
                html_string=$('#text_area_html_'+splitId[splitId.length - 1]).val().replace(/(\r\n|\n|\r)/gm, "<br/>");
                $("#"+id).val(html_string);
            }
        });
    });
    
    /*$('.bootbox-design-extra-html').click(function(){alert('helo');
        var temp = $(this).attr('id');
        var splitId = temp.split('-');
        var id = "modals_bootbox_prompt_"+splitId[splitId.length - 1];
        if($("#"+id).length){
            var stored_value = $("#"+id).val();
        }else{
            var hidden_field = '<input type="hidden" id="'+id+'" name="velocity_supercheckout[design][html]['+splitId[splitId.length - 1]+'][value]" value="">';
            $('#tab_design').append(hidden_field);
            var stored_value="";
        }

        bootbox.confirm('<h4>'+$("#modals_bootbox_prompt_header_html").val()+'</h4><textarea id="text_area_html" class="supercheckout_textarea_html" >'+ stored_value +'</textarea>',
        function(result) {
            if(result){
                html_string=$('#text_area_html').val().replace(/(\r\n|\n|\r)/gm, "<br/>");
                $("#"+id).val(html_string);
            }
        });
    });*/
    
    //2-Column Layout
    $('input[name="velocity_supercheckout[column_width][2_column][1]"]').css('width', $('input[name="velocity_supercheckout[column_width][2_column][1]"]').val()+'%');
    $('input[name="velocity_supercheckout[column_width][2_column][2]"]').css('width', $('input[name="velocity_supercheckout[column_width][2_column][2]"]').val()-1+'%');
    
    //3-Column Layout
    $('input[name="velocity_supercheckout[column_width][3_column][1]"]').css('width', $('input[name="velocity_supercheckout[column_width][3_column][1]"]').val()+'%');
    $('input[name="velocity_supercheckout[column_width][3_column][2]"]').css('width', $('input[name="velocity_supercheckout[column_width][3_column][2]"]').val()+'%');
    $('input[name="velocity_supercheckout[column_width][3_column][3]"]').css('width', $('input[name="velocity_supercheckout[column_width][3_column][3]"]').val()-1+'%');
	
	$("#payment-accordian").accordion({ 
      animated: 'bounceslide',
      autoHeight: false, 
      collapsible: true, 
      event: 'click', 
      active: false,
      animate: 100
    });
	$("#delivery-accordian").accordion({ 
      animated: 'bounceslide',
      autoHeight: false, 
      collapsible: true, 
      event: 'click', 
      active: false,
      animate: 100
    });
    
    
});

function dialogExtraHtml(e){
    var temp = $(e).attr('id');
    var splitId = temp.split('-');
    var id = "modals_bootbox_prompt_"+splitId[splitId.length - 1];
    if($("#"+id).length){
        var stored_value = $("#"+id).val();
    }else{
        var hidden_field = '<input type="hidden" id="'+id+'" name="velocity_supercheckout[design][html]['+splitId[splitId.length - 1]+'][value]" value="">';
        $('#tab_design').append(hidden_field);
        var stored_value="";
    }

    bootbox.confirm('<h4>'+$("#modals_bootbox_prompt_header_html").val()+'</h4><textarea id="text_area_html" class="supercheckout_textarea_html" >'+ stored_value +'</textarea>',
    function(result) {
        if(result){
            html_string=$('#text_area_html').val().replace(/(\r\n|\n|\r)/gm, "<br/>");
            $("#"+id).val(html_string);
        }
    });    
}

function remove_html(e){    
    var data = $(e).attr('data');
    $('#portlet_'+ data).remove();
    $('#modals_bootbox_prompt_'+ data).remove();
    $('#3_col_h_'+data).remove();
    $('#3_row_h_'+data).remove();
    $('#3_col_ins_h_'+data).remove();
    $('#2_col_h_'+data).remove();
    $('#2_row_h_'+data).remove();
    $('#2_col_ins_h_'+data).remove();
    $('#1_col_h_'+data).remove();
    $('#1_row_h_'+data).remove();
    $('#1_col_ins_h_'+data).remove();
}

function isNormalInteger(str) {
    return /^\+?(0|[1-9]\d*)$/.test(str);
}

function validate_data(){
    $('span.error').html('');
    
    $('#fb_app_id_error').html('');
    $('#fb_app_secret_error').html('');
    $('#gl_client_id_error').html('');
    $('#gl_app_secret_error').html('');
    $('#mailchimp_api_key_error').html('');
    
    $("#velsof_tab_mailchimp").css('color', '#7c7c7c');
    $("#velsof_tab_login").css('color', '#7c7c7c');
    $("#velsof_tab_payment_method").css('color', '#7c7c7c');
    $("#velsof_tab_delivery_method").css('color', '#7c7c7c');
    $("#velsof_tab_cart").css('color', '#7c7c7c');
    
    var messgeObj = $('#content').find('.bootstrap').find('.alert');
    $(messgeObj).parent().remove();
    var login_error = false;
    var mailchimp_error = false;
    var payment_method_error = false;
    var delivery_method_error = false;
    var cart_error = false;
    
    if($("#supercheckout_fb_login").is(":checked")){        
        if($("#velocity_supercheckout_fb_app_id").val().trim() == ''){
            login_error = true;
            $('#fb_app_id_error').html(fb_app_id_error);
        }
        if($("#velocity_supercheckout_fb_app_secret").val().trim() == ''){
            login_error = true;
            $('#fb_app_secret_error').html(fb_app_secret_error);
        }
        
    }
    
    if($("#supercheckout_google_login").is(":checked")){
        
        if($("#velocity_supercheckout_ggl_client_id").val().trim() == ''){
            login_error = true;
            $('#gl_client_id_error').html(ggl_client_id_error);
        }
        if($("#velocity_supercheckout_ggl_app_secret").val().trim() == ''){
            login_error = true;
            $('#gl_app_secret_error').html(ggl_app_secret_error);
        }
        
    }
    
    if($("#supercheckout_mailchimp_enable").is(":checked")){
        
        if ($('#mailchimp_selectlist').length == 0) {
            mailchimp_error = true;
            $('#mailchimp_api_key_error').html(mailchimp_api_key_error);
        }
    }
    
    if ($("input[name='velocity_supercheckout[payment_method][display_style]']:checked").val() == 1 || $("input[name='velocity_supercheckout[payment_method][display_style]']:checked").val() == 2) {
        $("input[id^=velocity_supercheckout_payment_method_logo_width_]").each(function(){
           field_id = $(this).attr('id');
           field_id_arr = field_id.split('_');
           if ($(this).val().trim() == '') {
               payment_method_error = true;
               $("#payment_method_logo_width_error_" + field_id_arr[field_id_arr.length - 1]).html(empty_width_error);
           } else if (!isNormalInteger($(this).val().trim()) && $(this).val().trim() != 'auto') {
               payment_method_error = true;
               $("#payment_method_logo_width_error_" + field_id_arr[field_id_arr.length - 1]).html(valid_width_error);
           } else {
               $("#payment_method_logo_width_error_" + field_id_arr[field_id_arr.length - 1]).html('');
           }
        });
        
        $("input[id^=velocity_supercheckout_payment_method_logo_height_]").each(function(){
           field_id = $(this).attr('id');
           field_id_arr = field_id.split('_');
           if ($(this).val().trim() == '') {
               payment_method_error = true;
               $("#payment_method_logo_height_error_" + field_id_arr[field_id_arr.length - 1]).html(empty_height_error);
           } else if (!isNormalInteger($(this).val().trim()) && $(this).val().trim() != 'auto') {
               payment_method_error = true;
               $("#payment_method_logo_height_error_" + field_id_arr[field_id_arr.length - 1]).html(valid_height_error);
           } else {
               $("#payment_method_logo_height_error_" + field_id_arr[field_id_arr.length - 1]).html('');
           }
        });
        
    } else {
        $("input[id^=velocity_supercheckout_payment_method_logo_width_]").each(function(){
            field_id = $(this).attr('id');
            field_id_arr = field_id.split('_');
            $("#payment_method_logo_width_error_" + field_id_arr[field_id_arr.length - 1]).html('');
        });
        
        $("input[id^=velocity_supercheckout_payment_method_logo_height_]").each(function(){
            field_id = $(this).attr('id');
            field_id_arr = field_id.split('_');
            $("#payment_method_logo_height_error_" + field_id_arr[field_id_arr.length - 1]).html('');
        });
    }
    
    if ($("input[name='velocity_supercheckout[shipping_method][display_style]']:checked").val() == 1 || $("input[name='velocity_supercheckout[shipping_method][display_style]']:checked").val() == 2) {
        $("input[id^=velocity_supercheckout_delivery_method_logo_width_]").each(function(){
           field_id = $(this).attr('id');
           field_id_arr = field_id.split('_');
           if ($(this).val().trim() == '') {
               delivery_method_error = true;
               $("#delivery_method_logo_width_error_" + field_id_arr[field_id_arr.length - 1]).html(empty_width_error);
           } else if (!isNormalInteger($(this).val().trim()) && $(this).val().trim() != 'auto') {
               delivery_method_error = true;
               $("#delivery_method_logo_width_error_" + field_id_arr[field_id_arr.length - 1]).html(valid_width_error);
           } else {
               $("#delivery_method_logo_width_error_" + field_id_arr[field_id_arr.length - 1]).html('');
           }
        });
        
        $("input[id^=velocity_supercheckout_delivery_method_logo_height_]").each(function(){
           field_id = $(this).attr('id');
           field_id_arr = field_id.split('_');
           if ($(this).val().trim() == '') {
               delivery_method_error = true;
               $("#delivery_method_logo_height_error_" + field_id_arr[field_id_arr.length - 1]).html(empty_height_error);
           } else if (!isNormalInteger($(this).val().trim()) && $(this).val().trim() != 'auto') {
               delivery_method_error = true;
               $("#delivery_method_logo_height_error_" + field_id_arr[field_id_arr.length - 1]).html(valid_height_error);
           } else {
               $("#delivery_method_logo_height_error_" + field_id_arr[field_id_arr.length - 1]).html('');
           }
        });
        
    } else {
        $("input[id^=velocity_supercheckout_delivery_method_logo_width_]").each(function(){
            field_id = $(this).attr('id');
            field_id_arr = field_id.split('_');
            $("#delivery_method_logo_width_error_" + field_id_arr[field_id_arr.length - 1]).html('');
        });
        
        $("input[id^=velocity_supercheckout_delivery_method_logo_height_]").each(function(){
            field_id = $(this).attr('id');
            field_id_arr = field_id.split('_');
            $("#delivery_method_logo_height_error_" + field_id_arr[field_id_arr.length - 1]).html('');
        });
    }
    
    if ($("input[name='velocity_supercheckout[cart_image_size][width]']").val().trim() == '') {
        cart_error = true;
        $("#cart_product_image_size_width_error").html(empty_width_error);
    } else if (!isNormalInteger($("input[name='velocity_supercheckout[cart_image_size][width]']").val().trim())) {
        cart_error = true;
        $("#cart_product_image_size_width_error").html(valid_width_error_product_image);
    } else {
        $("#cart_product_image_size_width_error").html('');
    }
    
    if ($("input[name='velocity_supercheckout[cart_image_size][height]']").val().trim() == '') {
        cart_error = true;
        $("#cart_product_image_size_height_error").html(empty_height_error);
    } else if (!isNormalInteger($("input[name='velocity_supercheckout[cart_image_size][height]']").val().trim())) {
        cart_error = true;
        $("#cart_product_image_size_height_error").html(valid_height_error_product_image);
    } else {
        $("#cart_product_image_size_height_error").html('');
    }
    
    if (login_error == true || mailchimp_error == true || payment_method_error == true || delivery_method_error == true || cart_error == true) {
        $('#velsof_supercheckout_container').find('li').removeClass('active');
        if (cart_error) {
            $("#velsof_tab_cart").css('color', 'red');
            $("#velsof_tab_cart").trigger('click');
        }
        if (delivery_method_error) {
            $("#velsof_tab_delivery_method").css('color', 'red');
            $("#velsof_tab_delivery_method").trigger('click');
        }
        if (payment_method_error) {
            $("#velsof_tab_payment_method").css('color', 'red');
            $("#velsof_tab_payment_method").trigger('click');
        }
        if (mailchimp_error) {
            $("#velsof_tab_mailchimp").css('color', 'red');
            $("#velsof_tab_mailchimp").trigger('click');
        }
        if (login_error) {
            $("#velsof_tab_login").css('color', 'red');
            $("#velsof_tab_login").trigger('click');
        }
        
        var errorHtml = '<div class="bootstrap supercheckout-message"><div class="alert alert-danger">';
        errorHtml += '<button type="button" class="close" data-dismiss="alert">×</button>';
        errorHtml += request_error;
        errorHtml += '</div></div>';
        $('#velsof_supercheckout_container').before(errorHtml);
        setTimeout(function(){$('#velsof_supercheckout_container .supercheckout-message').remove();}, 5000);
        
        return false;
    }
    else {
        $('#supercheckout_configuration_form').submit();
    }
}

//function validate_data(){
//    $('span.error').html('');
//    var messgeObj = $('#content').find('.bootstrap').find('.alert');
//    $(messgeObj).parent().remove();
//    var success = '';
//    var errorMsg = '';
//    $.ajax( {
//        type: "POST",
//        url: scp_ajax_action,
//        data: $('#supercheckout_configuration_form').serialize()+'&ajax=true&method=validation',
//        async: false,
//        dataType: 'json',
//        beforeSend: function() {
//            $('#supercheckout_configuration_form').fadeTo('slow', 0.4);
//        },
//        success: function( json ) {
//            if(json['success'] != undefined && json['success'] != null){
//                 $('#supercheckout_configuration_form').submit();
//            }else if(json['error'] != undefined){
//                $('#supercheckout_configuration_form').fadeTo('slow', 1);
//                errorMsg = json['error']['request_error'];
//                
//                if(json['error']['fb_login_app_id'] != undefined){
//                   $('#fb_app_id_error').html(json['error']['fb_login_app_id']); 
//                }
//                if(json['error']['fb_login_app_secret'] != undefined){
//                   $('#fb_app_secret_error').html(json['error']['fb_login_app_secret']); 
//                }
//                
//                if(json['error']['gl_login_app_id'] != undefined){
//                   $('#gl_app_id_error').html(json['error']['gl_login_app_id']); 
//                }
//                if(json['error']['gl_login_client_id'] != undefined){
//                   $('#gl_client_id_error').html(json['error']['gl_login_client_id']); 
//                }
//                if(json['error']['gl_login_app_secret'] != undefined){
//                   $('#gl_app_secret_error').html(json['error']['gl_login_app_secret']); 
//                }
//                
//                $('#velsof_supercheckout_container').find('li').removeClass('active');
//                $("#velsof_tab_login").trigger('click');
//                
//                var errorHtml = '<div class="bootstrap supercheckout-message"><div class="alert alert-danger">';
//                errorHtml += '<button type="button" class="close" data-dismiss="alert">×</button>';
//                errorHtml += errorMsg;
//                errorHtml += '</div></div>';
//                $('#velsof_supercheckout_container').before(errorHtml);
//                setTimeout(function(){$('#velsof_supercheckout_container .supercheckout-message').remove();}, 5000);
//            }
//        }
//    } );       
//    
//    return success;
//}

function setChangedLanguage(url, e){
    location.href= url+'&velsof_translate_lang='+$(e).val();
}

function generate_language(url, type){
    lang_code = $('select[name="velocity_transalator[selected_language]"] option:selected').val().split('_');
    lang_code = lang_code[1];
    requestUrl = url+'&ajax=true&tranlationType='+type;
    $.ajax( {
        type: "POST",
        url: requestUrl,
        data: $('#tab_lang_translator input, #tab_lang_translator select'),
        dataType: 'json',
        beforeSend: function() {
			//$('#velsof_supercheckout_container').parent().find('bootstrap > .alert').parent().remove();
			$("div").remove(".alert");
            $('#velsof-lang-trans-body').hide();
            $('#velsof-lang-trans-progress').show();

        },
        success: function( json ) {
            var classType = 'success';
	    var inlineCss = 'background-color: green;border-color: green;';
            var msg = '';
            var printMsg = false;
            if(type == 'download' && json['success'] != undefined){
                location.href = url+'&downloadTranslation='+json['success']+'&translationTmp=1';
            }else if(type == 'download' && json['error'] != undefined){
                msg = json['error'];
                classType = 'danger';
		inlineCss = 'color: #b94a48';
                printMsg = true;
            }
            
            if(type == 'save' || type == 'saveDownload'){
                if(type == 'saveDownload' && json['success'] != undefined){
                    location.href = url+'&downloadTranslation='+lang_code;
                }else{
                    printMsg = true;
                    if(json['error'] == undefined && json['error'] == null){
                         msg = json['success'];
                    }else if(json['error'] != undefined){                
                         classType = 'danger';
			 inlineCss = 'color: #b94a48';
                         msg += ' '+json['error'];
                    }                    
                }                
            }
            
            if(type == 'saveDownload'){
                
            }
            
            if(printMsg){
                var html = '<div class="bootstrap supercheckout-message"><div class="alert alert-'+classType+'" style="'+inlineCss+'">';
                html += '<button type="button" class="close" data-dismiss="alert">×</button>';
                html += msg;
                html += '</div></div>';
                $('#velsof_supercheckout_container').before(html);
                setTimeout(function(){$('#velsof_supercheckout_container .supercheckout-message').remove();}, 5000);
            }
			$('#velsof-lang-trans-progress').hide();
            $('#velsof-lang-trans-body').show();
        }
    } );   
}


function getMailChimpList()
{
	var key = $("#supercheckout_mailchimp_key").val();
	var listid = $("#supercheckout_mailchimp_list").val();
	$.ajax({
		type: "POST",
		url: scp_ajax_action,
		data: 'ajax=true&method=getMailChimpList&key='+key,
		dataType: 'json',
		beforeSend: function() {
			$("#supercheckout_list").html('');
			$("#mailchimp_loading").show();
		},		
		success: function(json) {
			var html = '';
			
			if (json == 'false')
				html = "<font color='red'>No list exists for this API key!</font>";
			else
			{
				html += '<select name="velocity_supercheckout[mailchimp][list]"';
				if (ps_ver == 15)
					html += 'class="selectpicker vss_sc_ver15"';
				html += 'id="mailchimp_selectlist">';

				for (i in json)
				{
					if (listid == json[i]['id'])
						html += '<option value="' + json[i]['id'] + '" selected>' + json[i]['name'] + '</option>'; 
					else
						html += '<option value="' + json[i]['id'] + '">' + json[i]['name'] + '</option>'; 
				}
				html += '</select>';
			}
			$("#mailchimp_loading").hide();
			$("#supercheckout_list").html(html);
			$('select.vss_sc_ver15#mailchimp_selectlist').selectpicker();
		}
	});
}

function configurationAccordian(id)
{
    if (id == 'facebook')
    {
        $("#facebook_acc").show();
        $("#google_acc").hide();
        $("#loginizer_link").hide();
	$(window).scrollTop($('#facebook_acc').offset().top);
    }
    else if (id == 'google')
    {
        $("#google_acc").show();
        $("#facebook_acc").hide();
        $("#loginizer_link").hide();
	$(window).scrollTop($('#google_acc').offset().top);
    }
$("#"+id+"_accordian").accordion({ 
      animated: 'bounceslide',
      autoHeight: false, 
      collapsible: true, 
      event: 'click', 
      active: false,
      animate: 100
    });
}
function bg_changer(col)
    {
        color = "#"+col;

 document.getElementById("button_preview").style.backgroundColor= color;
    }

   function border_changer(col)
    {
        color = "#"+col;

 document.getElementById("button_preview").style.borderTopColor= color;
 document.getElementById("button_preview").style.borderRightColor= color;
 document.getElementById("button_preview").style.borderLeftColor= color;
    }
    function border_bottom_changer(col)
    {
        color = "#"+col;

 document.getElementById("button_preview").style.borderBottomColor= color;
    }
       function text_changer(col)
    {
        color = "#"+col;
 document.getElementById("button_preview").style.color= color;
    }

function readPaymentURL(id, imageid){
         $("#"+imageid+"_msg").hide();
		var imgPath = $("#"+imageid+"_file")[0].value;
		var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
		
		if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
		if (typeof (FileReader) != "undefined") {
 
            var image_holder = $("#"+imageid);
	    
            image_holder.empty();
 
            var reader = new FileReader();
            reader.onload = function (e) {
		    
                $('#'+imageid).attr('src', e.target.result);
            }
            image_holder.show();
            reader.readAsDataURL($("#"+imageid+"_file")[0].files[0]);
			$("#payment_image_title_"+id).val("paymethod"+id+extn);
        }
		}
		else
		{	$("#"+imageid+"_msg").css("color", "red");
			$("#"+imageid+"_msg").show();
		}
		
        }
		
function removeFile(id)
{
	if (confirm(remove_cnfrm_msg) == true)
	{
	$.ajax({
		type: "POST",
		url: scp_ajax_action,
		data: 'ajax=true&method=removeFile&id=paymethod'+id,
		dataType: 'json',
		beforeSend: function() {
		},		
		success: function(json) {
			$("#payment_image_title_"+id).val("");
			$('#payment-img-'+id).attr('src', module_path+'views/img/admin/no-image.jpg');
		}
		
	});
	}
}

function readDeliveryURL(id, imageid){
	
         $("#"+imageid+"_msg").hide();
		var imgPath = $("#"+imageid+"_file")[0].value;
		
		var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
		
		if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
		if (typeof (FileReader) != "undefined") {
 
            var image_holder = $("#"+imageid);
	    
            image_holder.empty();
 
            var reader = new FileReader();
            reader.onload = function (e) {
		    
                $('#'+imageid).attr('src', e.target.result);
            }
            image_holder.show();
            reader.readAsDataURL($("#"+imageid+"_file")[0].files[0]);
			$("#delivery_image_title_"+id).val("deliverymethod"+id+extn);
        }
		}
		else
		{	$("#"+imageid+"_msg").css("color", "red");
			$("#"+imageid+"_msg").show();
		}
		
        }
		
		
function removeDeliveryFile(id)
{
	if (confirm(remove_cnfrm_msg) == true)
	{
	$.ajax({
		type: "POST",
		url: scp_ajax_action,
		data: 'ajax=true&method=removeFile&id=deliverymethod' + id,
		dataType: 'json',
		beforeSend: function() {
		},
		success: function(json) {
			$("#delivery_image_title_" + id).val("");
			$('#delivery-img-' + id).attr('src', module_path + 'views/img/admin/no-image.jpg');
		}

	});
	}
}

function addNewCustomFieldPopup()
{
    $('#modal_add_new_custom_field_form :input[type="text"]').val('');
    $('#modal_add_new_custom_field_form textarea').val('');
    $("#modal_add_new_custom_field_form select option:selected").prop("selected", false);
    $("#modal_add_new_custom_field_form select option:first").prop("selected", "selected");
    $('#modal_add_new_custom_field_form').modal({'show': true, 'backdrop': 'static'});
}

function closeModalPopup(modal)
{
    $('#' + modal + '_load').hide();
    $('#' + modal).modal('hide');
    $('#' + modal + '_progress').hide();
}

function changeLanguageBox(objE, elementToChange)
{
    var idLanguage = objE.value;
    $(".supercheckout_" + elementToChange).addClass("hidden_custom");
    $("#" + elementToChange + "_language_" + idLanguage).removeClass("hidden_custom");
}

function checkFieldType(objE)
{
    var boxValue = objE.value;
    // If options are required
    if(boxValue == "selectbox" || boxValue == "radio" || boxValue == "checkbox")
    {
        // Display textarea to accept option values and labels
        $("#field_options").removeClass("hidden_custom");
        $('select[name="custom_fields[validation_type]"]').prop('disabled', 'disabled');
    }
    else
    {
        $("#field_options").addClass("hidden_custom");
        $('select[name="custom_fields[validation_type]"]').prop('disabled', false);
    }
}

// Edit form
function checkFieldTypeEdit(objE)
{
    var boxValue = objE.value;
    // If options are required
    if(boxValue == "selectbox" || boxValue == "radio" || boxValue == "checkbox")
    {
        // Display textarea to accept option values and labels
        $("#edit_field_options").removeClass("hidden_custom");
        $('select[name="edit_custom_fields[validation_type]"]').prop('disabled', 'disabled');
    }
    else
    {
        $("#edit_field_options").addClass("hidden_custom");
        $('select[name="edit_custom_fields[validation_type]"]').prop('disabled', false);
    }
}

function displayEditCustomFieldPopup(idCustomField)
{
//    $('#modal_edit_custom_field_form').html("");
    // Send ajax request to save the data
    $.ajax( {
        type: "POST",
        url: scp_ajax_action,
        data: $('#supercheckout_configuration_form').serialize()+'&ajax=true&custom_fields_action=displayEditCustomFieldForm&id=' + idCustomField,
        async: false,
        dataType: 'json',
        success: function(json) {
            $('#modal_edit_custom_field_form').html(json.response);
            $('#modal_edit_custom_field_form').modal({'show': true, 'backdrop': 'static'});
        }
    });
}

function submitEditForm()
{
    var errorOccured = validateEditForm();
    if(errorOccured != 0)
    {
        return false;
    }
    else
    {
        // Showing the ajax loader
        $("#loader_edit_form").removeClass("hidden_custom");
        //Send ajax request to save the data
        $.ajax( {
            type: "POST",
            url: scp_ajax_action,
            data: $('#supercheckout_configuration_form').serialize()+'&ajax=true&custom_fields_action=editCustomFieldForm',
            async: false,
            dataType: 'json',
            beforeSend: function() {
                closeModalPopup("modal_edit_custom_field_form");
            },
            success: function(json) {
                // Adding a row in table
                var requiredText = '', activeText = '';
                if(json.response.required == '1')
                {
                    requiredText = 'Yes';
                }
                else
                {
                    requiredText = 'No';
                }
                if(json.response.active == '1')
                {
                    activeText = 'Yes';
                }
                else
                {
                    activeText = 'No';
                }
                
                var findRowCount = $("#tr_pure_table_"+json.response.id_velsof_supercheckout_custom_fields).children("td:first").text();
                var tableRow = '<tr class="row_changed" id="tr_pure_table_'+json.response.id_velsof_supercheckout_custom_fields+'">';
                tableRow += '<td>' + findRowCount + '</td>';
                tableRow += '<td class="width_25"><div class="div_250px_ellipsis">' + json.response.field_label + '</div></td>';
                tableRow += '<td>' + json.response.type + '</td>';
                tableRow += '<td class="transform_capitalize">' + json.response.position.split('_').join(' ') + '</td>';
                tableRow += '<td>' + requiredText + '</td>';
                tableRow += '<td>' + activeText + '</td>';
                tableRow += '<td class="center" style="padding: 12px;">';
                tableRow += '<a style="margin-top: -26px;" href="javascript://" onclick="displayEditCustomFieldPopup(' + json.response.id_velsof_supercheckout_custom_fields + ')" type="11" class="velsof-glyphicons2 glyphicons pencil"><i data-toggle="tooltip" data-placement="top" data-original-title="Edit this custom field"></i></a>';
                tableRow += '<a style="margin-top: -26px;" href="javascript://" onclick="deleteCustomFieldRow(' + json.response.id_velsof_supercheckout_custom_fields + ')" type="11" class="velsof-glyphicons2 glyphicons bin" onclick=""><i data-toggle="tooltip" data-placement="top" data-original-title="Delete this custom field."></i></a>';
                tableRow += '</td>';
                tableRow += '</tr>';
                
                // Removing the success green color from all the previous edited/added rows
                $("#tbody_custom_fields_data").children().removeClass("row_changed");
                $("#tr_pure_table_"+json.response.id_velsof_supercheckout_custom_fields).replaceWith(tableRow);
                $("#div_custom_fields_success").removeClass("hidden_custom");
                $("#loader_edit_form").addClass("hidden_custom");
                setTimeout(function(){
                    $("#tbody_custom_fields_data").children().removeClass("row_changed", 1000);
                }, 5000);
            }
        });
        // Resetting all the data of element having id as `modal_edit_custom_field_form`
//        $('#modal_edit_custom_field_form').html("");
    }
}

/**
 * This functin submits the form if all the values are valid
 * @returns {undefined}
 */
function submitForm()
{
    var errorOccured = validateForm();
    
    if(errorOccured != 0)
    {
        return false;
    }
    else
    {
        // Showing the ajax loader
        $("#loader_add_form").removeClass("hidden_custom");
        // Send ajax request to save the data
        $.ajax( {
            type: "POST",
            url: scp_ajax_action,
            data: $('#supercheckout_configuration_form').serialize()+'&ajax=true&custom_fields_action=addCustomFieldForm',
            async: false,
            dataType: 'json',
            beforeSend: function() {
                closeModalPopup("modal_add_new_custom_field_form");
            },
            success: function(json) {
                // Adding a row in table
                var requiredText = '', activeText = '';
                if(json.response.required == '1')
                {
                    requiredText = 'Yes';
                }
                else
                {
                    requiredText = 'No';
                }
                if(json.response.active == '1')
                {
                    activeText = 'Yes';
                }
                else
                {
                    activeText = 'No';
                }
                
                var rowCount = $('#table_custom_fields_data > tbody > tr').length;
                
                var tableRow = '<tr class="pure-table-striped row_changed" id="tr_pure_table_'+json.response.id_velsof_supercheckout_custom_fields+'">';
                tableRow += '<td>' + rowCount + '</td>';
                tableRow += '<td class="width_25"><div class="div_250px_ellipsis">' + json.response.field_label + '</div></td>';
                tableRow += '<td>' + json.response.type + '</td>';
                tableRow += '<td class="transform_capitalize">' + json.response.position.split('_').join(' ') + '</td>';
                tableRow += '<td>' + requiredText + '</td>';
                tableRow += '<td>' + activeText + '</td>';
                tableRow += '<td class="center" style="padding: 12px;">';
                tableRow += '<a style="margin-top: -26px;" href="javascript://" onclick="displayEditCustomFieldPopup(' + json.response.id_velsof_supercheckout_custom_fields + ')" type="11" class="velsof-glyphicons2 glyphicons pencil"><i data-toggle="tooltip" data-placement="top" data-original-title="Edit this custom field"></i></a>';
                tableRow += '<a style="margin-top: -26px;" href="javascript://" onclick="deleteCustomFieldRow(' + json.response.id_velsof_supercheckout_custom_fields + ')" type="11" class="velsof-glyphicons2 glyphicons bin" onclick=""><i data-toggle="tooltip" data-placement="top" data-original-title="Delete this custom field."></i></a>';
                tableRow += '</td>';
                tableRow += '</tr>';
                
                // Removing the success green color from all the previous edited/added rows
                $("#tbody_custom_fields_data").children().removeClass("row_changed");
                $("#tr_custom_fields_add_new").before(tableRow);
                $("#div_custom_fields_success").removeClass("hidden_custom");
                $("#loader_add_form").addClass("hidden_custom");
                setTimeout(function(){
                    $("#tbody_custom_fields_data").children().removeClass("row_changed", 1000);
                }, 5000);
            }
        });
    }
}

/**
 * This function is used to validate the values
 * @returns {undefined}
 */
function validateForm()
{
    var error = 0, errorFieldOptions = 0;
    var errorMessageFieldOptions;
    var elemType = $("#supercheckout_custom_field_type");
    var optionBoxes = $(".supercheckout_field_options");
    
    var elemLabelBoxes = $(".supercheckout_field_label");
    var boxCheckerLabels = 0;
    elemLabelBoxes.each(function(index)
    {
        if($(this).val() != "")
        {
            boxCheckerLabels = 1;
        }
    });
    
    // If nothing provided
    if(boxCheckerLabels == 0)
    {
        error = 1;
        errorMessageFieldOptions = canNotLeaveAllBoxesEmpty;
        $("#error_message_field_label").html(errorMessageFieldOptions);
        $("#error_message_field_label").removeClass("hidden_custom");
    }
    else
    {
        $("#error_message_field_label").addClass("hidden_custom");
    }
    
    // Checking if selectbox or radio or checkbox is selected
    if(elemType.val() == 'selectbox' || elemType.val() == "radio" || elemType.val() == "checkbox")
    {
        // Loopiong through each value
        var boxChecker = 0;
        optionBoxes.each(function(index) {
            if($(this).val() != "")
            {
                boxChecker = 1;
                // Splitting on \n
                var lines = $(this).val().split('\n');
                for(var i = 0; i < lines.length; i++){
                    var alphanumeric = lines[i].split('|');
                    if(lines[i] == '')
                    {
                        continue;
                    }
                    // If there are more than one | present in a line
                    if(alphanumeric.length != 2)
                    {
                        error = 1;
                        errorFieldOptions = 1;
                    }
                    else
                    {
                        for(var j = 0; j < alphanumeric.length; j++)
                        {
                            if(j == 0)
                            {
                                // Not allowing the space in value side
                                var expression = /^[a-zA-Z0-9]+$/;
                            }
                            else
                            {
                                var expression = /^[a-zA-Z0-9 -_/]+$/;
                            }
                            if(!expression.test(alphanumeric[j]))
                            {
                                error = 1;
                                errorFieldOptions = 1;
                            }
                        }
                    }
                }
            }
        });

        // If nothing provided
        if(boxChecker == 0)
        {
            error = 1;
            errorMessageFieldOptions = canNotLeaveAllBoxesEmpty;
            $("#error_message_field_options").html(errorMessageFieldOptions);
            $("#error_message_field_options").removeClass("hidden_custom");
        }
        else
        {
            if(errorFieldOptions == 1)
            {
                errorMessageFieldOptions = pleaseProvideInValidFormat;
                $("#error_message_field_options").html(errorMessageFieldOptions);
                $("#error_message_field_options").removeClass("hidden_custom");
            }
            else
            {
                $("#error_message_field_options").addClass("hidden_custom");
            }
        }
    }
    
    return error;
}

/**
 * This function is used to validate the values
 * @returns {undefined}
 */
function validateEditForm()
{
    var error = 0, errorFieldOptions = 0;
    var errorMessageFieldOptions;
    var elemType = $("#supercheckout_edit_custom_field_type");
    var optionBoxes = $(".supercheckout_edit_field_options");
    
    var elemLabelBoxes = $(".supercheckout_edit_field_label");
    var boxCheckerLabels = 0;
    elemLabelBoxes.each(function(index)
    {
        if($(this).val() != "")
        {
            boxCheckerLabels = 1;
        }
    });
    
    // If nothing provided
    if(boxCheckerLabels == 0)
    {
        error = 1;
        errorMessageFieldOptions = canNotLeaveAllBoxesEmpty;
        $("#error_message_edit_field_label").html(errorMessageFieldOptions);
        $("#error_message_edit_field_label").removeClass("hidden_custom");
    }
    else
    {
        $("#error_message_edit_field_label").addClass("hidden_custom");
    }
    
    // Checking if selectbox or radio or checkbox is selected
    if(elemType.val() == 'selectbox' || elemType.val() == "radio" || elemType.val() == "checkbox")
    {
        // Loopiong through each value
        var boxChecker = 0;
        optionBoxes.each(function(index) {
            if($(this).val() != "")
            {
                boxChecker = 1;
                // Splitting on \n
                var lines = $(this).val().split('\n');
                for(var i = 0; i < lines.length; i++){
                    var alphanumeric = lines[i].split('|');
                    if(lines[i] == '')
                    {
                        continue;
                    }
                    // If there are more than one | present in a line
                    if(alphanumeric.length != 2)
                    {
                        error = 1;
                        errorFieldOptions = 1;
                    }
                    else
                    {
                        for(var j = 0; j < alphanumeric.length; j++)
                        {
                            if(j == 0)
                            {
                                var expression = /^[a-zA-Z0-9]+$/;
                            }
                            else
                            {
                                var expression = /^[a-zA-Z0-9 -_/]+$/;
                            }
                            if(!expression.test(alphanumeric[j]))
                            {
                                error = 1;
                                errorFieldOptions = 1;
                            }
                        }
                    }
                }
            }
        });

        // If nothing provided
        if(boxChecker == 0)
        {
            error = 1;
            errorMessageFieldOptions = canNotLeaveAllBoxesEmpty;
            $("#error_message_edit_field_options").html(errorMessageFieldOptions);
            $("#error_message_edit_field_options").removeClass("hidden_custom");
        }
        else
        {
            if(errorFieldOptions == 1)
            {
                errorMessageFieldOptions = pleaseProvideInValidFormat;
                $("#error_message_edit_field_options").html(errorMessageFieldOptions);
                $("#error_message_edit_field_options").removeClass("hidden_custom");
            }
            else
            {
                $("#error_message_edit_field_options").addClass("hidden_custom");
            }
        }
    }
    
    return error;
}

function deleteCustomFieldRow(idCustomField)
{
    var canDelete = confirm(areYouSureToDelete);
    if(canDelete == true)
    {
        // Send ajax request to save the data
        $.ajax( {
            type: "POST",
            url: scp_ajax_action,
            data: '&ajax=true&custom_fields_action=deleteCustomFieldRow&id_velsof_supercheckout_custom_fields='+idCustomField,
            async: false,
            dataType: 'json',
            success: function(json) {
                $("#tr_pure_table_"+idCustomField).addClass("hidden_custom");
                $("#div_custom_fields_success").removeClass("hidden_custom");
            }
        });
    }
}