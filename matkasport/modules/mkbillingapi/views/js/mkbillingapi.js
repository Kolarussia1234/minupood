$(function() {

    $('#cart_navigation > ').on('click', function(evt) {
        $('#veebipoed-overlay').show();
    });

    $('.payment-method').on('click', function(evt) {
        console.log('payment method change');
        evt.preventDefault();
        $('#veebipoed-overlay').show();
        $.ajax(mk_ajax_url, {
            'data': 'action=create_transaction&method='+$(this).data('method'),
            'dataType': 'json'
        }).success(function(data) {
            if (data.type == 'banklinks') {
                window.location.href = data.url;
            } else {
                $('#center_column').append(data.html);
                var interval_id = setInterval(function() {
                    if (typeof window.Maksekeskus == 'object' &&
                        typeof window.Maksekeskus.Checkout == 'object'
                    ) {
                        $('#mkbillingapi-form').replaceWith(function(){
                            return $('<form method="POST" id="mkbillingapi-form"></form>').append($(this).contents());
                        });
                        window.Maksekeskus.Checkout.initialize();
                        window.Maksekeskus.Checkout.open();
                        $('.payment-method').off('click').on('click', function(evt) {
                            evt.preventDefault();
                            evt.stopPropagation();
                            window.Maksekeskus.Checkout.open();
                        });
                        clearInterval(interval_id);
                        $('#veebipoed-overlay').hide();
                    }
                }, 100)

            }
            placeOrder();
        });
    });z
});