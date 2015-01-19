<?php //include_once 'apiProcess.php';               ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Rest API Test</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    </head>
    <body>

        <div class="container">

            <div class="page-header">
                <h1>REST API TEST</h1>
                <p class="lead"></p>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-3">
                    <div class="product">
                        <h2>Recurring Product</h2>
                        <a href="#" class="thumbnail">
                            <img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjU5LjU0Njg3NSIgeT0iOTAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTBwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4xNzF4MTgwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                        </a>
                        <form name="rest_add_product" action="lib/ussa_api/products/product1.php" method="POST">
                            <p>
                                <button type="submit" id="xadd-product" name="submit">Create Product</button>
                            </p>
                        </form>

                    </div>
                </div>
                <div class="col-xs-6 col-md-3">
                    <div class="product">
                        <h2>Add Product to Cart</h2>
                        <a href="#" class="thumbnail">
                            <img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjU5LjU0Njg3NSIgeT0iOTAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTBwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4xNzF4MTgwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                        </a>
                        <form name="rest_add_product" action="lib/ussa_api/products/addProduct1.php" method="POST">
                            <p>
                                <button type="submit" id="add-product" name="submit">Add Product to cart</button>
                            </p>
                        </form>

                    </div>
                </div>

                <div class="col-xs-6 col-md-3">
                    <div class="product">
                        <h2>Remove Product from Cart</h2>
                        <a href="#" class="thumbnail">
                            <img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjU5LjU0Njg3NSIgeT0iOTAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTBwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4xNzF4MTgwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                        </a>
                        <form name="rest_add_product" action="" method="POST">
                            <p>
                                <input type="text" value="recurring11" name="remove_qty"/>
                                <button type="submit" id="remove-product" name="submit">Remove Product</button>
                            </p>
                        </form>

                    </div>
                </div>

                <div class="col-xs-6 col-md-3">
                    <div class="product">
                        <h2>Simple Product</h2>
                        <a href="#" class="thumbnail">
                            <img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjU5LjU0Njg3NSIgeT0iOTAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTBwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4xNzF4MTgwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                        </a>
                        <form name="rest_add_product2" action="lib/ussa_api/products/product2.php" method="POST">
                            <p>
                                <button type="submit" id="xadd-product" name="submit">Create Product</button>
                            </p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            (function ($) {
                $(document).ready(function () {
                    $('#add-product').on('click', function (e) {
                        e.preventDefault();
                        var data = {
                            apikey: "<?php echo '' ?>",
                            apipassword: "<?php echo '' ?>",
                            sku: "<?php echo 'recurring11' ?>",
                            method: 'addProductToCart'
                        };
                        var baseUrl = 'http://dev.ussa.org/ecommerce/magento/index.php/';
                        var baseUrl = 'http://127.0.0.1/Magento/ussa/index.php/';
                        
                        var restUrl = baseUrl + 'restconnect/index/ussa';

                        jQuery.ajax({
                            url: restUrl,
                            data: data,
                            dataType: 'JSONP',
                            jsonpCallback: 'callback',
                            type: "POST",
                            success: function (data) {
                                console.log(data);
                                jQuery(location).attr('href', baseUrl + 'checkout/cart');
                            },
                            error: function (error) {
                                console.log("Error:");
                                console.log(error);
                                alert("ERROR");
                            }
                        });
                    });

                    $('#remove-product').on('click', function (e) {
                        e.preventDefault();
                        var data = {
                            apikey: "<?php echo '' ?>",
                            apipassword: "<?php echo '' ?>",
                            sku: $('input[name=remove_qty]').val(),
                            method: 'deleteProductFromCart'
                        };

                        var baseUrl = 'http://dev.ussa.org/ecommerce/magento/index.php/';
                        var baseUrl = 'http://127.0.0.1/Magento/ussa/index.php/';
                        var restUrl = baseUrl + 'restconnect/index/ussa';

                        jQuery.ajax({
                            url: restUrl,
                            data: data,
                            dataType: 'JSONP',
                            jsonpCallback: 'callback',
                            type: "POST",
                            success: function (data) {
                                console.log(data);
                                jQuery(location).attr('href', baseUrl + 'checkout/cart');
                            },
                            error: function (error) {
                                console.log("Error:");
                                console.log(error);
                                alert("ERROR");
                            }
                        });
                    });
                });
            })(jQuery);
        </script>
    </body>
</html>