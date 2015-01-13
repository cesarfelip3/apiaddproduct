<?php include_once 'info.php'; ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    (function ($) {
        jQuery(document).ready(function () {

            var data = {
                apikey: "<?php echo $apikey ?>",
                apipassword: "<?php echo $apipassword ?>",
                product: '<?php echo json_encode($requestData) ?>'
            };

            var baseUrl = 'http://dev.ussa.org/ecommerce/magento/index.php/';
            //var baseUrl = 'http://127.0.0.1/Magento/ussa/index.php/';

            var redirectUrl = baseUrl + 'checkout/cart';

            //alert(baseUrl + 'restconnect/index/addProduct');

            jQuery.ajax({
                url: baseUrl + 'restconnect/index/addUpdateSubscriptionProduct',
                data: data,
                dataType: 'jsonp',
                async: false,
                type: "POST",
                success: function (data) {
                    console.log(data);
                    if (data.status == 'success') {
                        //alert(data.product_sku);
                        alert('Prodcut added/updated');
                        //jQuery(location).attr('href', redirectUrl);
                        //addProduct(data.product_sku, 1);
                    }
                    else {
                        alert(data.message);
                    }
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
                    apikey: "<?php echo $apikey ?>",
                    apipassword: "<?php echo $apipassword ?>",
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