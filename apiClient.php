<!DOCTYPE html>
<html>
    <head>
        <title>Rest API Test</title>
    </head>
    <body>
        <?php
        if ($_POST) {
            $baseUrl = 'http://127.0.0.1/Magento/ussa/index.php/';
            $restUrl = $baseUrl . 'restconnect/index/addProduct';
            $data = array(
                'apikey' => 'apikey',
                'apipassword' => 'password',
                'productsku' => 'product1',
                'qty' => 1
            );
            
            $data_string = json_encode($data);

            $ch = curl_init($restUrl);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string))
            );

            $result = curl_exec($ch);
            curl_close($ch);
            print_r(($result));
            header('Location: '.$baseUrl);
        }
        ?>
        <div class="container">
            <div class="main" style="width:500px; margin:0 auto;">
                <p>Demo Rest Api</p>

                <form name="rest_add_product" action="" method="POST">
                    <input type="submit" id="add-product" name="submit" value="Add Product"/>
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
                            dataType: 'json',
                            success: function (data) {
                                console.log(data);
                                jQuery(location).attr('href', baseUrl);
                            },
                            error: function (error) {
                                console.log("Error:");
                                console.log(error);
                                alert("ERROR");
                                //jQuery(location).attr('href', baseUrl);
                            }
                        });
                    });
                });
            })(jQuery);
        </script>
    </body>
</html>