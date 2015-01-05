<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    (function ($) {
        jQuery(document).ready(function () {

            var data = {
                apikey: "<?php echo 'apikey' ?>",
                apipassword: "<?php echo 'password' ?>",
                product: '<?php echo json_encode($requestData) ?>'
            };

            var baseUrl = 'http://dev.ussa.org/ecommerce/magento/index.php/';
            //var baseUrl = 'http://127.0.0.1/Magento/ussa/index.php/';

            var redirectUrl = baseUrl + 'checkout/cart';

            //alert(baseUrl + 'restconnect/index/addProduct');

            jQuery.ajax({
                url: baseUrl + 'restconnect/index/createProduct',
                data: data,
                dataType: 'jsonp',
                async: false,
                type: "POST",
                success: function (data) {
                    console.log(data);
                    //jQuery(location).attr('href', redirectUrl);
                    addProduct(data.sku, 1);
                },
                error: function (error) {
                    console.log("Error:");
                    console.log(error);
                    alert("ERROR");
                    //jQuery(location).attr('href', redirectUrl);
                }
            });

            function addProduct(sku, qty) {
                var data = {
                    apikey: "<?php echo 'apikey' ?>",
                    apipassword: "<?php echo 'password' ?>",
                    productsku: sku,
                    qty: qty
                };
                
                var baseUrl = 'http://dev.ussa.org/ecommerce/magento/index.php/';
                //var baseUrl = 'http://127.0.0.1/Magento/ussa/index.php/';

                var redirectUrl = baseUrl + 'checkout/cart';

                jQuery.ajax({
                    url: baseUrl + 'restconnect/index/addProduct',
                    data: data,
                    dataType: 'JSONP',
                    jsonpCallback: 'callback',
                    type: "POST",
                    success: function (data) {
                        console.log(data);
                        jQuery(location).attr('href', redirectUrl);
                    },
                    error: function (error) {
                        console.log("Error:");
                        console.log(error);
                        //  alert("ERROR");
                        jQuery(location).attr('href', redirectUrl);
                    }
                });
            }
        });
    })(jQuery);
</script>