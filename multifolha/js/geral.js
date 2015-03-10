(function($) {

   $().ready(function() {   

   /*-- formulario de compra ----------------------------------------------------------------------*/
   $('#comprar .webform-client-form-21 #edit-submitted-status').prop('disabled',true);
   $('.node-type-webform .webform-client-form-21 #edit-submitted-status').prop('disabled',true);

   /* redireciona para o site de pagamento (Pagseguro/Paypal) */
    $('.page-node-22 h1#page-title').hide();
    $('.page-node-22 #principal .container').append('');
    $('.page-node-22 .form-comprar').submit();

   

    });

})(jQuery);