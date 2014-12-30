<?php include_once 'apiProcess.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Rest API Test</title>
    </head>
    <body>
        <div class="container">
            <div class="main" style="width:500px; margin:0 auto;">
                <p>Demo Rest Api</p>

                <form name="rest_add_product" action="" method="POST">
                    <button type="submit" id="xadd-product" name="submit">Add Product</button>
                </form>
            </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript">
            (function ($) {
                jQuery(document).ready(function () {
                    jQuery('#add-product').on('click', function (e) {
                        e.preventDefault();
                        var baseUrl = 'http://dev.ussa.org/ecommerce/magento/index.php/';

                        var redirectUrl = baseUrl + 'checkout/cart';

                        alert(baseUrl + 'restconnect/index/addProduct');
                        jQuery.ajax({
                            url: baseUrl + 'restconnect/index/addProduct',
                            type: "POST",
                            data: {
                                apikey: 'apikey',
                                apipassword: 'password',
                                productsku: 'product1',
                                qty: 1
                            },
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
                });
            })(jQuery);
        </script>
    </body>
</html>