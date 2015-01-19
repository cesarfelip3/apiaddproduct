<?php include_once 'info.php'; ?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    (function ($) {
        jQuery(document).ready(function () {

            var data = {
                apikey: "<?php echo $apikey ?>",
                apipassword: "<?php echo $apipassword ?>",
                product: '<?php echo json_encode($requestData) ?>',
                method: 'addUpdateSubscriptionProduct'
            };

            var baseUrl = 'http://dev.ussa.org/ecommerce/magento/index.php/';
            //var baseUrl = 'http://127.0.0.1/Magento/ussa/index.php/';
            
            var restUrl = baseUrl + 'restconnect/index/ussa';

            jQuery.ajax({
                url: restUrl,
                data: data,
                dataType: 'jsonp',
                async: false,
                type: "POST",
                success: function (data) {
                    console.log(data);
                    if (data.status == true) {
                        //alert(data.product_sku);
                        alert('Prodcut added/updated');
                        //jQuery(location).attr('href', redirectUrl);
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
        });
    })(jQuery);
</script>