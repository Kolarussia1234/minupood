/*
 * NOTICE OF LICENSE
 *
 * This file is licenced under the Software License Agreement.
 * With the purchase or the installation of the software in your application
 * you accept the licence agreement.
 *
 * You must not modify, adapt or create derivative works of this source code
 *
 *  @author    Toomas-Siim Teresk
 *  @copyright 2010-2015 Infovõrgud OÜ
 *  @license   LICENSE.txt
 */
"use strict";
var EVERYPAY = {};
EVERYPAY.iframeVisible = 0;
EVERYPAY.managingCards = 0;

EVERYPAY.init = function(){
  EVERYPAY.changeCard();
};

EVERYPAY.open = function(){
   $('.row').each(function(){
      if ($(this).find('.payment_module').length >= 1 && !$(this).find('.payment_module').hasClass('everypay')) $(this).hide(2000);
   });
   $('.everypayRedirect.button').hide();
   var choice = $('input[name="everypayChoice"]:checked');
   if (choice.length == 0 || $(choice).val() == "new")
   {
         EVERYPAY.openIframe();
   }
   else
   {
         EVERYPAY.closeIframe();
   }

//MANAGE CARDS START
   var saveCardChecked = ($('.saveCardOption input[type="checkbox"]:checked').length !== 0 ? 1 : 0);
   var iframe = $('#everypayIframe');
   $.ajax({
      url:iframe.attr("target-url")+"?fc=module&module=everypay&controller=validation&response_type=json",
      dataType:"json",
      data:{card_choice:$('input[name="everypayChoice"]:checked').val(), saveCard:saveCardChecked},
      method:"POST",
      success:function(data){
         if (data.status == 1)
         {
            EVERYPAY.order_reference = data.order_reference;
            EVERYPAY.retryRedirect = EVERYPAY.retryRedirect.replace("ORDER_REFERENCE", data.order_reference);
            EVERYPAY.createQuery(data);
         }
      }
   });
};

EVERYPAY.deleteCard = function(obj){
   if (confirm(everypay_delete_txt)) {
      var link = $(obj).attr('data-remove-card-link');
      $.ajax({
      url:link,
      success:$(obj).parent().remove()
      }).done(function(){
        $('#checkout-payment-step').addClass('-current js-current-step');
        if($('.everypayOption').length < 1){
         $('.everypayChoices').find('.everypayManagecards').addClass('hidden');
        }
      });
   }
};

EVERYPAY.setDefault = function(obj){
   var link = $(obj).attr('data-set-default-link');
   $.ajax({
         url:link
      });
   $(obj).parent().find('.makeDefault').removeClass('manageCardUI').hide();
   $('.everypayOption.default').removeClass('default').find('.makeDefault').addClass('manageCardUI').show();
   $(obj).parent().addClass('default');
};

EVERYPAY.changeCard = function(){
   if ($('input[name="everypayChoice"][value="new"]:checked').length !== 0){
      $('.saveCardOption').show();
   }else{
      $('.saveCardOption').hide();
   }
};

EVERYPAY.manageCardsToggle = function(){
   if (EVERYPAY.managingCards){
      $('.manageCardUI').hide();
      EVERYPAY.managingCards = 0;
   }else{
      $('.manageCardUI').show();
      EVERYPAY.managingCards = 1;
   }
};
//MANAGE CARDS END

EVERYPAY.closeIframe = function(){
   EVERYPAY.iframeVisible = 0;
   $( "#everypayIframe" ).show().removeClass('visible').animate({
                  height: "0px"
               }, 500);
   $('.everypayUI').show();
};

EVERYPAY.openIframe = function(){
   $( "#everypayIframe" ).show().addClass('visible').animate({
                  width: "358px",
                  height: "421px"
               }, 500);
   $('.everypayUI').hide();
   EVERYPAY.iframeVisible = 1;
};

EVERYPAY.reclose = function(){
   if ($('#everypayIframe').attr('order-create-method') != "after")
   {
      window.location=EVERYPAY.retryRedirect;
   }
   else
   {
      $('#everypayRetryButton').hide();
      $('.row').each(function(){
            if ($(this).find('.payment_module').length >= 1 && !$(this).find('.payment_module').hasClass('everypay')) $(this).show(2000);
         });
       EVERYPAY.closeIframe();
       setTimeout("$('.everypayRedirect.button').show();", 2000);
   }
};

EVERYPAY.createQuery = function(data){
      if ($('#everypayForm').length > 0) $('#everypayForm').remove();
      $('#everypayIframe').parent().append('<form method="post" action="'+data.everypay_url+'" id="everypayForm"></form>');
      var i = 0;
      while (i < data.data.length)
      {
        $('#everypayForm').append("<input type='hidden' name='"+data.data[i].key+"' value='"+data.data[i].value+"'>");
        i++;
      }
      $('#everypayForm').attr("target", "EVERYPAYIFRAME");
      $('#everypayForm').submit();
    };


var shrinkIframe = function(iframe, iframe_data) {
   iframe.css(iframe_data);
   jQuery("#dimmed_background_box").remove();
};
var expandIframe = function() {
   var iframe_data = {
      position: iframe.attr("position") || "static",
      top: iframe.position().top,
      left: iframe.position().left,
      width: iframe.width(),
      height: iframe.height(),
      zIndex: iframe.attr("zIndex"),
      marginLeft: iframe.attr("marginLeft"),
      marginRight: iframe.attr("marginRight")
   };

   jQuery('body').append("<div id='dimmed_background_box'></div>");
   jQuery('#dimmed_background_box').css({ height:'100%',width:'100%',position:'fixed',top:0,left:0,zIndex:9998,backgroundColor:'#000000',opacity:0.5 });

   var window_height = jQuery(window).height();
   var window_width = jQuery(window).width();

   if (window_width < 960) {
      iframe.css({ height:window_height,width:window_width,top:0 });
   } else {
      iframe.css({ height:640,width:960,top:(window_height-640)/2 });
   }
   iframe.css({ position:'fixed',zIndex:9999,margin:'auto' });
   return iframe_data;
};

var shrinked_iframe_data;
//var iframe = $('#everypayIframe'); // iframe selector should be used

window.addEventListener('message', function(event) {
   var message = JSON.parse(event.data);
   /*
   1. An "expand" message is sent from the iframe page when 3D secure page is going to be displayed.
       The size of the iframe should be adjusted to hold 3D secure page
   2. A "shrink" message is sent from the iframe page when a user has provided authorisation details on the 3D secure page.
       The size of the iframe should be set to the initial values
   */
   if (message.resize_iframe == "expand") {
      shrinked_iframe_data = expandIframe(iframe);
   } else if (message.resize_iframe == "shrink") {
      shrinkIframe(iframe, shrinked_iframe_data);
   }

   if (message.transaction_result){
         if (message.transaction_result == "completed")
         {
            window.location=$('#everypayIframe').attr("target-url")+"?fc=module&module=everypay&controller=return&order_reference="+EVERYPAY.order_reference+"&transaction_result="+message.transaction_result;
         }
         else
         {
            if (EVERYPAY.iframeVisible)
            {
               $('#everypayRetryButton').show();
            }
            else
            {
               EVERYPAY.openIframe();
               $('#everypayRetryButton').show();
            }
         }
   }
}, false);

function var_dump(obj, alert) {
      var out = '';
      for (var i in obj) {
            out += i + ": " + obj[i] + "\n";
      }
      if (alert) alert(out);
      return out;
}