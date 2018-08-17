/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */

//Grid view in category page (mobile)
$(document).ready(function() {
    if ($(window).width() <= 991) {
       $('.view-switcher > a[data-view="grid"]:not(.current)').click();
    }
    $(window).resize(function() {
       if ($(window).width() <= 991) {
          $('.view-switcher > a[data-view="grid"]:not(.current)').click();
       }
    });
});

function toggle_visibility() {
    $('.modal-backdrop, #blockcart-modal').toggle();
}

$('.vp-recommended-products .slick-products-carousel').not('.slick-initialized').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 2,
    speed: 500,
    autoplay: true,
    cssEase: 'linear',
    lazyLoad: 'ondemand',
    responsive: [
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
            }
        }
    ]
 });

$('body:not(#index) .slick-products-carousel').not('.slick-initialized').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 2,
    speed: 500,
    autoplay: true,
    cssEase: 'linear',
    lazyLoad: 'ondemand',
    responsive: [
        {
            breakpoint: 768,
            settings: {
                dots: true,
                slidesToShow: 2,
                arrow: false
            }
        }
    ]
});

$('body#index .slick-products-carousel').not('.slick-initialized').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 2,
    speed: 500,
    rows: 1,
    autoplay: true,
    cssEase: 'linear',
    lazyLoad: 'ondemand',
    responsive: [
        {
            breakpoint: 992,
            settings: {
                rows: 2,
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 768,
            settings: {
                rows: 2,
                slidesToShow: 2,
            }
        }
    ]
});

$('body').on('click', 'h4.facet-title', function(){
    if(!$(this).parent('.sex_block').length){
        $(this).next('div.vpFiltersAcc').slideToggle();
        $(this).find('i.fa').toggle();
    }
});

$(document).ready(function(){
    if(!$("#infinity-url").length)
        $('#vp_infinity_button').css('display','none');

    // Faceted search on category page
    updateFacetedSearchDisplay();
    $(window).resize(function() {
        updateFacetedSearchDisplay();
    });
});

/* Faceted search filters are displayed twice category pages. 
   So when new content is put on the page through ajax then only the first block is refreshed.
   To repair that, we change the id to either correct or dummy one, whether we need desktop or mobile version of filtering. */
function updateFacetedSearchDisplay() {
    var windowWidth = $(window).width();
    
    if (windowWidth >= 992) {
        $('#facets_search_center #vp_search_filters_hidden, #facets_search_center #search_filters').attr('id','vp_search_filters_hidden');
        $('#left-column #vp_search_filters_hidden, #left-column #search_filters').attr('id','search_filters');
    } else {
        $('#facets_search_center #vp_search_filters_hidden, #facets_search_center #search_filters').attr('id','search_filters');
        $('#left-column #vp_search_filters_hidden, #left-column #search_filters').attr('id','vp_search_filters_hidden');
    }
}

$('body').on('click', '#vp_infinity_button', function(e) {
    var el_href = $("#infinity-url").attr("href");

    if (typeof el_href !== 'undefined') {
        var url = [el_href, el_href.indexOf("?") >= 0 ? "&" : "?", "from-xhr"].join("");

        $('#vp_infinity_button').css('display','none');
        $('#products').addClass("-infinity-loading");

        jQuery.get(url, null, null, "json").then(function(r) {
            var list = $("#js-product-list");
            $(list).find(".products").first().append($(r.rendered_products).find(".products").first().html());
            $(list).find(".pagination").first().replaceWith($(r.rendered_products).find(".pagination").first());
            $("#js-product-list-bottom").replaceWith($(r.rendered_products_bottom));

            $('#products').removeClass("-infinity-loading");

            if(typeof $("#infinity-url").attr("href") !== 'undefined')
                $('#vp_infinity_button').css('display','block');
        });
    }
});

//Supercheckout Cart//

//Static variables coming from database. The fields that replace the shipping form
var emailID = $('#emailID').val();
var phoneID = $('#phoneID').val();
var firstnameID = $('#firstnameID').val();
var lastnameID = $('#lastnameID').val();
var customSamePaymentID = $('#customSamePaymentID').val();
var shippingAddressBlock = $('#supercheckout-fieldset #checkoutShippingAddress');
var paymentAddressBlock = $('#supercheckout-fieldset #checkoutBillingAddress');
var custom_phone = $('input[name="custom_fields[field_'+phoneID+']"]');
var custom_email = $('input[name="custom_fields[field_'+emailID+']"]');
var custom_firstname = $('input[name="custom_fields[field_'+firstnameID+']"]');
var custom_lastname = $('input[name="custom_fields[field_'+lastnameID+']"]');
var custom_same_payment = $('input[name="custom_fields[field_'+customSamePaymentID+'][]"]');
var shipping_city = $('input[name="shipping_address[city]"]');
var payment_city = $('input[name="payment_address[city]"]');
var shipping_address = $('input[name="shipping_address[address1]"]');
var payment_address = $('input[name="payment_address[address1]"]');
var shipping_postcode = $('input[name="shipping_address[postcode]"]');
var payment_postcode = $('input[name="payment_address[postcode]"]');
var shipping_phone = $('input[name="shipping_address[phone_mobile]"]');
var payment_phone = $('input[name="payment_address[phone_mobile]"]');
var shipping_firstname = $('input[name="shipping_address[firstname]"]');
var payment_firstname = $('input[name="payment_address[firstname]"]');
var shipping_lastname = $('input[name="shipping_address[lastname]"]');
var payment_lastname = $('input[name="payment_address[lastname]"]');
var shippingSelectsRow = '#shipping-method table tr.selects_for_shipping';

//Registration block choice switch
function switchRegistration(val){
    if(val==0){
        $('#supercheckout-login-box').addClass('active');
        custom_phone.parent().hide();
        custom_firstname.parent().css('display','none');
        custom_lastname.parent().css('display','none');
    }else {
        $('#supercheckout-login-box').removeClass('active');
        custom_phone.parent().show();
        custom_firstname.parent().css('display','inline-block');
        custom_lastname.parent().css('display','inline-block');
    }
}

//Empty error messages
function emptyErrorMessages(){
    $('.errorsmall').html('');
    $('.errorsmall_custom').html('');
}

//Check on cart load
function cartLoadChecks(){
    //Checkwhat login options
    $('input[name=checkout_option]').each(function(){
        if($(this).prop('checked')){
            $(this).parent().addClass('active');
        }
        switchRegistration($(this).val());
    });

    //Load saved values
    $(window).bind('load', function(){
        setTimeout(function(){
            if($('.myaccount')){
                custom_email.val($('#customerEmail').val());
                custom_firstname.val($('#customerFirstName').val());
                custom_lastname.val($('#customerLastName').val());
                payment_firstname.val($('#customerFirstName').val());
                payment_lastname.val($('#customerLastName').val());
                shipping_firstname.val($('#customerFirstName').val());
                shipping_lastname.val($('#customerLastName').val());
            } else {

                //check if shipping was prefilled
                if(shipping_firstname.val() != ''){
                    custom_firstname.val(shipping_firstname.val());
                    payment_firstname.val(shipping_firstname.val());
                }

                if(shipping_lastname.val() != '') {
                    custom_lastname.val(shipping_lastname.val());
                    payment_lastname.val(shipping_lastname.val());

                }

                if($('#email').val() != ''){
                    custom_email.val($('#email').val());
                }

            }


            if(shipping_phone.val() != ''){
                custom_phone.val(shipping_phone.val());
                payment_phone.val(shipping_phone.val());
            }

            $('.supercheckout_shipping_option').each(function(){
                if($(this).prop('checked')){
                    $(shippingSelectsRow).css('display', 'none');
                    $(this).parent().parent().next('.selects_for_shipping').css('display','block');


                    var smartKullerReferenceID = $('#smartkullerID').val() + ',';
                    var selfpickUpReferenceID = $('#selfpickUpReferenceID').val() + ',';
                    shippingAddressBlock.css('display','none');

                    if($(this).val()==smartKullerReferenceID){
                        shippingAddressBlock.css('display','block')
                    } else if ($(this).val()==selfpickUpReferenceID){
                        if($(this).parent().parent().next().not('.highlight').find('option:selected').val()!= 0){
                            payment_city.val($(this).parent().parent().next('.selects_for_shipping').find('option:selected').data('city'));
                            shipping_city.val($(this).parent().parent().next('.selects_for_shipping').find('option:selected').data('city'));
                            payment_address.val($(this).parent().parent().next('.selects_for_shipping').find('option:selected').data('name'));
                            shipping_address.val($(this).parent().parent().next('.selects_for_shipping').find('option:selected').data('name'));
                            payment_postcode.val('00000');
                            shipping_postcode.val('00000');
                        }
                    } else {
                        payment_city.val($(this).parent().parent().next('.selects_for_shipping').find('.terminal_cities option:selected').text());
                        shipping_city.val($(this).parent().parent().next('.selects_for_shipping').find('.terminal_cities option:selected').text());

                        if($(this).parent().parent().next('.selects_for_shipping').find('.veebipoed_carrier option:selected').val() != 0){
                            payment_address.val($(this).parent().parent().next('.selects_for_shipping').find('.veebipoed_carrier option:selected').text());
                            shipping_address.val($(this).parent().parent().next('.selects_for_shipping').find('.veebipoed_carrier option:selected').text());
                        }
                        payment_postcode.val('00000');
                        shipping_postcode.val('00000');
                    }
                }


            })

        }, 1000);

    });

}

//Validation
function validatePasswd(value){
    if(value.length == 0) return false;
    return true;

}
function validateEmail(value){
    var emailExp = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if(value.length == 0) return false;
    if(!emailExp.test(value)) return false;
    return true;

}
function validateName(value){
    if(value.length == 0) return false;
    var alphaExp = /^[a-zA-Z]+$/;
    if(!alphaExp.test(value)) return false;
    return true;
}
function validateOnlyNumber(value){
    if(value.length == 0) return false;
    var numericExpression = /^[0-9]+$/;
    if(!numericExpression.test(value)) return false;
    return true;

}
function validateAddress(value){
    var alphaExp = /^[0-9a-zA-Z]+$/;
    if(value.length == 0) return false;
    if(!alphaExp.test(value)) return false;
    return true;

}
function validateAddressTitle(value){
    var alphaExp = /^[0-9a-zA-Z]+$/;

    if(value.length == 0) return false;
    if(!alphaExp.test(value)) return false;
    return true;

}
function validateCityName(value){
    if(value.length == 0) return false;
    var alphaExp = /^[a-zA-Z]+$/;
    if(!alphaExp.test(value)) return false;
    return true;

}
function validatePhoneNumber(value){
    if(value.length == 0) return false;
    var numericExpression = /^[0-9]+$/;
    if(!numericExpression.test(value)) return false;
    return true;

}
function validateMessage(value){
    if(value.length == 0) return false;

}

//Register Clicks
function registerClicks(){
    //Change in visible blocks

    $(document).on('change', '.error-form', function () {;
        console.log('test');
        $(this).removeClass('error-form');
    });

    //Registration/Login/Guest Block
    $('input[name=checkout_option]').change(function(){
        emptyErrorMessages();

        shippingAddressBlock.css('display','none');
        $('input[name=checkout_option]').parent().removeClass('active');
        $(this).parent().addClass('active');

        switchRegistration($(this).val());
    });


    //Email Field Change
    custom_email.change(function(){
        $(this).removeClass('error-form');
        $(this).next().html('');
        $('#email').val($(this).val())
    });

    //Phone field Change
    custom_phone.change(function(){
        $(this).removeClass('error-form');
        $(this).next().html('');
        shipping_phone.val($(this).val());
        payment_phone.val($(this).val())
    });

    //First name change
    custom_firstname.change(function(){
        $(this).removeClass('error-form');
        $(this).next().html('');
        shipping_firstname.val($(this).val());
        payment_firstname.val($(this).val())
    });

    //Last name change
    custom_lastname.change(function(){
        $(this).removeClass('error');
        $(this).next().html('');
        shipping_lastname.val($(this).val());
        payment_lastname.val($(this).val())
    });

    custom_same_payment.click(function(){
        if($(this).prop('checked')){
            paymentAddressBlock.css('display','none');
        } else {
            paymentAddressBlock.css('display','block')
        }
    });

    //Bind filling of city when terminal in a city is selected
    $(document).on('change', '.terminal_cities', function () {
        var smartKullerReferenceID = $('#smartkullerID').val() + ',';
        if($('.supercheckout_shipping_option:checked').val() != smartKullerReferenceID){
            $(this).removeClass('error-form');
            $(shippingSelectsRow).find('.errorsmall').html('');
            payment_city.val($(this).find('option:selected').text());
            shipping_city.val($(this).find('option:selected').text());
            payment_address.val('');
            shipping_address.val('');
        }
    });


    //Bind filling of city when a shop is selected
    $(document).on('change', '.shops', function () {
        $(this).removeClass('error-form');
        $(shippingSelectsRow).find('.errorsmall').html('');

        if($(this).val()!= 0) {
            payment_city.val($(this).find('option:selected').data('city'));
            shipping_city.val($(this).find('option:selected').data('city'));
            payment_address.val($(this).find('option:selected').data('address'));
            shipping_address.val($(this).find('option:selected').data('address'));
            shipping_postcode.val('00000');
            payment_postcode.val('00000');
        }
    });

    //Bind filling of address1 when a shop is selected
    $(document).on('change', '.veebipoed_carrier', function () {

        var smartKullerReferenceID = $('#smartkullerID').val() + ',';
        if($('.supercheckout_shipping_option:checked').val() != smartKullerReferenceID) {
            $(this).removeClass('error-form');
            $(shippingSelectsRow).find('.errorsmall').html('');
            if ($(this).val() != 0) {
                payment_address.val($(this).find('option:selected').text());
                shipping_address.val($(this).find('option:selected').text());
                shipping_postcode.val('00000');
                payment_postcode.val('00000');
            }
        }
    });

    //Bind terminal changes
    $(document).on('change', '.supercheckout_shipping_option', function () {
        $(this).removeClass('error-form');
        if($(this).prop('checked')) {
            emptyErrorMessages();
            $(shippingSelectsRow).css('display', 'none');
            $(shippingSelectsRow).find('.errorsmall').html('');
            $(this).parent().parent().next('.selects_for_shipping').css('display', 'block');

            var smartKullerReferenceID = $('#smartkullerID').val() + ',';
            var selfpickUpReferenceID = $('#selfpickUpReferenceID').val() + ',';
            if ($(this).val() == smartKullerReferenceID) {
                shippingAddressBlock.css('display','block')
                payment_city.val('');
                shipping_city.val('');
                payment_address.val('');
                shipping_address.val('');
                payment_postcode.val('');
                shipping_postcode.val('');
            } else if ($(this).val()==selfpickUpReferenceID){
                payment_city.val('');
                shipping_city.val('');
                payment_address.val('');
                shipping_address.val('');
                payment_postcode.val('00000');
                shipping_postcode.val('00000');
                if($(this).parent().parent().next().not('.highlight').find('option:selected').val()!= 0){
                    payment_city.val($(this).find('option:selected').data('city'));
                    shipping_city.val($(this).find('option:selected').data('city'));
                    payment_address.val($(this).find('option:selected').data('name'));
                    shipping_address.val($(this).find('option:selected').data('name'));
                }
                shippingAddressBlock.css('display','none')
            } else {
                payment_city.val($(this).parent().parent().next().not('.highlight').find('.terminal_cities option:selected').text());
                shipping_city.val($(this).parent().parent().next().not('.highlight').find('.terminal_cities option:selected').text());
                console.log($(this).parent().parent().next().not('.highlight').find('.veebipoed_carrier option:selected'));
                if($(this).parent().parent().next().not('.highlight').find('.veebipoed_carrier option:selected').val() != 0){
                    payment_address.val($(this).parent().parent().next().not('.highlight').find('.veebipoed_carrier option:selected').text());
                    shipping_address.val($(this).parent().parent().next().not('.highlight').find('.veebipoed_carrier option:selected').text());
                }else {
                    payment_address.val('');
                    shipping_address.val('');
                }
                shippingAddressBlock.css('display','none')
            }
        }
    });

    //Bind payment
    $(document).on('click','.mkbillingapi_payment img',function(){
        $(this).parent().find('input[name="mk_payment_method"]').prop('checked',true);

        var mk_payment_method = $("[name='mk_payment_method']:checked").val();
        $(this).closest('.payment_methods_additional_container').prev('.highlight').parent().find('input[name="payment_method"].mkbillingapi').click();
        $.ajax(mk_ajax_url, {
            'data': 'action=payment_method&method='+mk_payment_method,
            'dataType': 'json'
        }).success(function(data) {
            setTimeout(function(){
                if(!errorChecking()){
                    placeOrder();
                    errorMessages();
                }
            },500);
        });
    });
    $(document).on('click','.vpbanklinks',function(){

        $(this).closest('.payment_methods_additional_container').prev('.highlight').parent().find('input[name="payment_method"].vpmodules').click();
        if(!errorChecking()){
            placeOrder();
            errorMessages();
        }
    });

    $(document).on('change','.quantitybox',function(){
        if($(this).is(":focus")){
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

        }
    });
    $(document).on('click','#use_new_card',function(e){
        e.preventDefault();
        e.stopPropagation();
        $(this).prop('checked',true);
        $(this).attr('checked','checked');
        $(this).addClass('checked');


        EVERYPAY.changeCard();
        $(this).closest('.payment_methods_additional_container').prev('.highlight').find('input[name="payment_method"]').click();
        setTimeout(function(){
            if(!errorChecking()){
                placeOrder();
                errorMessages();
            }
        },500);
    });

}

function bindHiddenFieldChanges(){
    //Binding background data changes.

    shipping_address.change(function(){
        payment_city.val($(this).val())
    });

    shipping_postcode.change(function(){
        payment_postcode.val($(this).val())
    });

    shipping_city.change(function(){
        payment_city.val($(this).val())
    });

}

function designChanges(){

    custom_firstname.parent().addClass('custom-firstName');
    custom_lastname.parent().addClass('custom-lastName');

    shipping_phone.parent().hide();
    shipping_firstname.parent().hide();
    shipping_lastname.parent().hide();
    $('.supercheckout_offers_option').parent().addClass('newsLetterAndOffers').appendTo('#supercheckout-comments');

    if('.div_custom_fields.logged_in'){
        $('.supercheckout-blocks.checkbox').appendTo('.div_custom_fields.logged_in');
    }
}

function loadPreSavedData(){
    if($('#customer_addresses_saved')) {
        shipping_lastname.val($('#hidden-customer-lastname').val());
        payment_lastname.val($('#hidden-customer-lastname').val())
        shipping_firstname.val($('#hidden-customer-firstname').val());
        payment_firstname.val($('#hidden-customer-firstname').val())
        shipping_phone.val($('#hidden-customer-phone').val());
        payment_phone.val($('#hidden-customer-phone').val());
        custom_phone.val($('#hidden-customer-phone').val());
        custom_email.val($('#email').val());
        custom_firstname.val($('#hidden-customer-firstname').val());
        custom_lastname.val($('#hidden-customer-lastname').val());

    }

}


function errorMessages(){

    setTimeout(function(){

        var smartKullerReferenceID = $('#smartkullerID').val() + ',';
        var selfpickUpReferenceID = $('#selfpickUpReferenceID').val() + ',';
        shippingAddressBlock.css('display','block');
        custom_email.next().html($('#email').parent().find('.errorsmall').text());


        custom_phone.next().html(shipping_phone.parent().find('.errorsmall').text());


        custom_firstname.next().html(shipping_firstname.parent().find('.errorsmall').text());


        custom_lastname.next().html(shipping_lastname.parent().find('.errorsmall').text());

        $('.supercheckout_shipping_option').each(function(){
            if($(this).prop('checked')){
                if($(this).val()== smartKullerReferenceID && $(this).parent().next('.selects_for_shipping').find('option:selected').val() == 0){
                    $(this).parent().parent().next('.selects_for_shipping').append('<span class="errorsmall">'+shipping_address.parent().find('.errorsmall').text() +'</span>');

                } else if($(this).val() != selfpickUpReferenceID && $(this).parent().next('.selects_for_shipping').find('.veebipoed_carrier option:selected').val() == 0){
                    $(this).parent().parent().next('.selects_for_shipping').append('<span class="errorsmall">'+shipping_address.parent().find('.errorsmall').text() +'</span>');
                }
            }
        });
    },1000);

}

function errorChecking(){

    var errors = false;

    if(!validateEmail(custom_email.val())) {
        errors = true;
        custom_email.addClass('error-form');
    }
    if(!validatePhoneNumber(custom_phone.val())) {
        errors = true;
        custom_phone.addClass('error-form');
        shipping_phone.val('');
        payment_phone.val('');
    }
    if(!validateName(custom_firstname.val())) {
        errors = true;
        custom_firstname.addClass('error-form');
        shipping_firstname.val('');
        payment_firstname.val('');
    }
    if(!validateName(custom_lastname.val())) {
        errors = true;
        custom_lastname.addClass('error-form');
        shipping_lastname.val('');
        payment_lastname.val('');
    }
    $('.supercheckout_shipping_option').each(function(){
        if($(this).prop('checked')){

            var smartKullerReferenceID = $('#smartkullerID').val() + ',';
            var selfpickUpReferenceID = $('#selfpickUpReferenceID').val() + ',';
            //Smartkulleri valik
            if($(this).val() == smartKullerReferenceID && $(this).parent().parent().next('.selects_for_shipping').find('input[name="terminals"] option:selected').val() == 0) {
                errors = true;
                $(this).parent().parent().next('.selects_for_shipping').find('input[name="terminals"]').addClass('error-form');
            }
            //ISe tulen j2rele
            else if($(this).val() == selfpickUpReferenceID && $('#selfpickup option:selected').val() == 0){
                errors = true;
                $('#selfpickup').addClass('error-form');
                shipping_address.val('');
                payment_address.val('');
                shipping_city.val('');
                payment_city.val('');
            }
            //Mitte Tulen ise jarele mooduli vlaiku ID
            if($(this).val() != selfpickUpReferenceID && $(this).parent().parent().next('.selects_for_shipping').find('.veebipoed_carrier option:selected').val() == 0){
                errors = true;
                $(this).parent().parent().next('.selects_for_shipping').find('.veebipoed_carrier').addClass('error-form');
                shipping_address.val('');
                payment_address.val('');
            }
        }

        if(shipping_address.val()== '') shipping_address.addClass('error-form');
        if(shipping_city.val()== '') shipping_city.addClass('error-form');
        if(shipping_postcode.val()== '') shipping_postcode.addClass('error-form');
    });
    return errors;
}


//Run function only if we are on supercheckout page
if($('velsof_supercheckout_form')){
    cartLoadChecks();
    registerClicks();
    bindHiddenFieldChanges();
    designChanges();
    loadPreSavedData();
    errorMessages();
}


//Combination Javascript//
//static variables

var colorId = null;
var colorIds = [];
var jsonCombinationsMapped = {};
var groupCombinationMapped = {};
var attrAvailability = {};
var filteringByMapToAttr = false;
var groupId = null;
var groupLength = $('.product-variants-item').length;
var filterGroupMap = {};
var jsonCombinations = {};
var groupCombinations = {};
var notSelectableCategories = [];

function setColorGroup(colorIds){
    for(var i = 0; i < colorIds.length; i++){
        if($('#group_' + colorIds[i]).length > 0){
            colorId = colorIds[i];
            break;
        }
    }
}

//Set variables that we are using from the template
function saveJsonCombinations(temp) {
    jsonCombinations = temp;
}
function saveGroupCombinations(temp) {
    groupCombinations = temp;
}
function setGroupId(id){
    groupId = id;
}
function setColorIds(ids){
    colorIds = ids;
}

function setNotSelectableCategories(ids){
    notSelectableCategories = ids;
}
//Get only the needed info from our combinatins info
function sortJsonCombinations(){
    for (var key in jsonCombinations) {
        jsonCombinationsMapped[key] = {};
        jsonCombinationsMapped[key].quantity = jsonCombinations[key].quantity;
        jsonCombinationsMapped[key].attributes = [];
        for(var i=0; i < jsonCombinations[key].attributes.length; i++){
            if(findGroup(jsonCombinations[key].attributes[i]) != groupId){
                jsonCombinationsMapped[key].attributes[jsonCombinationsMapped[key].attributes.length] = jsonCombinations[key].attributes[i];
            }
        }
    }
}

//map groups and attributes into a separate array
function mapGroups(){
    for (var key in groupCombinations) {
        groupCombinationMapped[key] =  Object.keys(groupCombinations[key].attributes).map(obj=> {
            if(key!= groupId){
                if(!attrAvailability[obj]){
                    attrAvailability[obj] = {};
                    attrAvailability[obj].available = false;
                    attrAvailability[obj].found = false;
                }
            }
            return obj;
        });

    }
}

//map color for filtersing to the filter that is going to change the selectiong
function mapFilterToColor(){
    for (var key in jsonCombinations){
        var filter, color;
        for(var i = 0; i < jsonCombinations[key].attributes.length; i++) {
            if(findGroup(jsonCombinations[key].attributes[i]) == groupId){
                filter = jsonCombinations[key].attributes[i];
            } else if(findGroup(jsonCombinations[key].attributes[i]) ==colorId){
                color = jsonCombinations[key].attributes[i];
            }

        }
        if(!filterGroupMap[color]){
            filterGroupMap[color] = filter;
        }
    }

    filteringByMapToAttr = true;
}

//find to which group an attribute belongs
function findGroup(attribute_id){
    for (var key in groupCombinationMapped){
        if(groupCombinationMapped[key].indexOf(attribute_id.toString()) > -1){
            return key;
        }
    }
}

//map product availability
function mapProducts(){
    removeClass();
    for (var key in groupCombinationMapped) {
        if(key != groupId){
            var groupSettings;
            if(groupLength < 4) {

                groupSettings = getGroupAvailability(key);
            } else groupSettings = getGroupAvailabilityForMany(key);
            setClasses(key,groupSettings);
        }
    }
    addSelected();
}

//get group avaialability for many :: to remove later
function getGroupAvailabilityForMany(group){
    var groupList = groupCombinationMapped[group];
    var groupStock = {};
    for(var i = 0; i < groupList.length; i++){
        var exists = false;

        for(var key in jsonCombinationsMapped){
            var combination = jsonCombinationsMapped[key].attributes;
            var quantity = jsonCombinationsMapped[key].quantity;
            for(var key in combination){
                exists |= (combination[key] == groupList[i]);
            }
            if(!groupStock[groupList[i]]){
                groupStock[groupList[i]] = {};
                if(exists){
                    groupStock[groupList[i]] = { 'foundStatus': exists , 'quantity':quantity};
                } else {
                    groupStock[groupList[i]] = { 'foundStatus': exists , 'quantity':0};

                }
            }
            if(exists){
                groupStock[groupList[i]] = { 'foundStatus': (groupStock[groupList[i]].foundStatus || exists) , 'quantity': groupStock[groupList[i]].quantity + quantity};
            }
        }
    }
    return groupStock;
}

//get group availabaility (2  filter comparison)
function getGroupAvailability(group){
    var selected = [];
    $('.input-change:checked').each(function(item){
        if($(this).data('product-attribute')!= groupId && $(this).data('product-attribute')!= group) selected[selected.length] = $(this).attr('value');
    });

    var groupStock = {};
    var groupList = groupCombinationMapped[group];
    for(var i = 0; i < groupList.length; i++){
        var found = false;
        var stock = 0;
        for(var key in jsonCombinationsMapped){
            var combination = jsonCombinationsMapped[key].attributes;
            var quantity = jsonCombinationsMapped[key].quantity;
            var exists = false;
            for(var key in combination){
                exists |= (combination[key] == groupList[i]);
            }
            if(exists){
                //WE FOUND A COMBINATION THAT HAS OUR SIZE, LETS CHECK FOR OTHER STUFF NOW, LETS PRESUME IT IS OUT NEEDED COMBINATION
                var availability = true;
                for (var a = 0; a < selected.length; a++){
                    var exists = false;
                    for(var key in combination){
                        exists |= (combination[key] ==selected[a]);
                    }
                    if(groupLength < 4) {
                        availability &= exists;
                    } else availability |= exists;
                }
                if (availability){
                    found = true;
                    stock = quantity;
                }
                groupStock[groupList[i]] = { 'foundStatus': found, 'quantity':stock};
            } else {
                groupStock[groupList[i]] = { 'foundStatus': found, 'quantity':stock};
            }
        }
    }

    return groupStock;
}

function addSelected(){
    var selected = $('.input-change:checked');

    selected.each(function(){
        $('#group_'+ $(this).data('product-attribute') + '_label .selected-now').html($(this).data('title'))
    })

}

//set classes to layout
function setClasses(key,group){
    var stuff = $('#group_' + key);

    for(var key in group){
        var element = stuff.find('.input-change.attribute_id_' + key).parent();
        if(group[key].foundStatus){
            if(!element.hasClass('available')) {
                element.removeClass('notfound').removeClass('outofstock');
                if (group[key].quantity > 0) {
                    element.addClass('available');
                } else {
                    element.addClass('outofstock');
                }
            }
        }
    }
}

//remove classes from layout
function removeClass(){
    $('.input-change').parent().removeClass('available').removeClass('notfound').removeClass('outofstock').addClass('notfound');
}

//change color for filtering due to attribute change
function changeFilterSelection(attr){
    if(filterGroupMap[attr]!= $('#group_'+groupId).find('.input-change:checked').attr('value')){
        $('#group_'+groupId).find('.input-change').prop('checked', false);
        $('.attribute_id_' + filterGroupMap[attr]).prop('checked', true);
        $('.attribute_id_' + filterGroupMap[attr]).attr('checked', 'checked');
    }
}

//check if selection is valid
function checkSelection(){
    var selected = [];
    var valid = false;
    $('.input-change:checked').each(function(){
        if($(this).data('product-attribute') != groupId){
            selected[selected.length] = $(this).val();
        }
    });
    for (var key in jsonCombinationsMapped){
        var validCombination = true;
        var attributes = jsonCombinationsMapped[key].attributes;
        for (var attribute in selected){
            validCombination &= attributes.includes(parseInt(selected[attribute]));

        }
        valid |= validCombination;
    }
    return valid;
}

//find first suitable product:: todo add an order (not selectable values do not influecne the product we select)
function findFirstSuitableProduct(value){
    var selectedCurrently = []
    $('.input-change:checked').each(function(){
        if(!notSelectableCategories.includes(findGroup($(this).val()).toString())){
            selectedCurrently[selectedCurrently.length] = $(this).val()
        }
    });
    var combinationCount = 0;
    var staticCount = 0;
    var product = null;
    for (var key in jsonCombinationsMapped){
        combinationCount = 0;
        if(jsonCombinationsMapped[key].attributes.includes(parseInt(value)) ){
            combinationCount = 1;
            for(var i=0; i < selectedCurrently.length; i++){
                if(jsonCombinationsMapped[key].attributes.includes(parseInt(selectedCurrently[i])) ){
                    combinationCount = combinationCount + 1;
                }
                if(staticCount < combinationCount){
                    staticCount=combinationCount;
                    product = jsonCombinationsMapped[key];
                }
            }
            break;
        }
    }

    for(i=0; i < product.attributes.length; i++){
        if(findGroup(product.attributes[i]) == parseInt(colorId)){
            $('.attribute_id_' + filterGroupMap[product.attributes[i]]).prop('checked',true);
        }
        $('.attribute_id_' + product.attributes[i]).prop('checked',true);
    }
}

function setColorId(){
    for(var i=0; i < colorIds.length; i++){
        if($('#group_' + colorIds[i])[0]){
            colorId = colorIds[i];
            break;
        }
    }
}

//init combinations logic
function initCombinations(){
    mapGroups();
    sortJsonCombinations();
    setColorId();
    if(colorId !== null) {
        mapFilterToColor();
    }

    mapProducts();

    $('.input-change').click(function(e){
        if($('#group_'+groupId)){
            if($(this).data('product-attribute') == colorId){
                changeFilterSelection($(this).attr('value'));
            }
        }
        if(!checkSelection()){
            findFirstSuitableProduct($(this).val());
        }
        $('.input-change.group_' + $(this).data('product-attribute')).prop('checked',false);
        $(this).prop('checked',true);
    });
}
