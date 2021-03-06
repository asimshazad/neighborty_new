$("#place-orde").on('click', function (e) {
    e.preventDefault();
    $('.token').show();
    var form = document.getElementById('payment_form');

    if ($('#transaction_through').val() == 'paypal') {
        form.submit();
    } else if ($('#transaction_through').val() == 'worldpay') { // For worldpay method

        Worldpay.useOwnForm({
            'clientKey': 'T_C_5638fd05-7cc7-4677-8561-e127f5d28f73',
            'form': form,
            'reusable': true,
            'callback': function (status, response) {
                document.getElementById('paymentErrors').innerHTML = '';

                if (response.error) {
                    Worldpay.handleError(form, document.getElementById('paymentErrors'), response.error);
                } else {
                    var token = response.token;
                    Worldpay.formBuilder(form, 'input', 'hidden', 'token', token);
                    form.submit();
                }
            }
        });
    } else if ($('#transaction_through').val() == 'card') { //For stripe payment method
        var $form = $('#payment_form');

        // Disable the submit button to prevent repeated clicks
        $form.find('button#place-orde').prop('disabled', true);

        Stripe.card.createToken($form, stripeResponseHandler);

        // Prevent the form from submitting with the default action
        return false;
    }

});
$(document).ready(function () {
    $('.token').hide();
});



$(function () {
    $('#transaction_through').change(function () {
        if ($('#transaction_through').val() == 'paypal') {
            $('#row_dim').hide();
        } else {
            $('#row_dim').show();
        }
    });
});


Stripe.setPublishableKey('pk_test_mhZZ5WRRZuJvCBvG678ujp9F');

function stripeResponseHandler(status, response) {
    var $form = $('#payment_form');

    if (response.error) {
        // Show the errors on the form
        //console.log(response.error.message);
        $('.token').hide();
        $('.paymentErrors').html('<div class="alert alert-danger">' + response.error.message + '</div>');
        $form.find('button').prop('disabled', false);
    } else {
        // response contains id and card, which contains additional card details
        var token = response.id;
        // Insert the token into the form so it gets submitted to the server
        $form.append($('<input type="hidden" name="stripeToken" />').val(token));
        // and submit
        $form.get(0).submit();
    }
}
;