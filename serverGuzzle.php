<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    (function ($) {
        jQuery(document).ready(function () {

            var data = {
                apikey: "<?php echo 'apikey' ?>",
                apipassword: "<?php echo 'password' ?>",
                productsku: '<?php echo $productSku ?>',
                qty: '<?php echo $qty ?>'
            };

            var baseUrl = 'http://dev.ussa.org/ecommerce/magento/index.php/';

            var redirectUrl = baseUrl + 'checkout/cart';

            //alert(baseUrl + 'restconnect/index/addProduct');

            jQuery.ajax({
                url: baseUrl + 'restconnect/index/addProduct',
                type: "POST",
                data: data,
                dataType: 'jsonp',
                success: function (data) {
                    console.log(data);
                    jQuery(location).attr('href', baseUrl);
                },
                error: function (error) {
                    console.log("Error:");
                    console.log(error);
                    //  alert("ERROR");
                    jQuery(location).attr('href', redirectUrl);
                }
            });
        });
    })(jQuery);
</script>