<?php //include_once 'apiProcess.php'; ?>
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
                        <h2>Product 1</h2>
                        <a href="#" class="thumbnail">
                            <img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjU5LjU0Njg3NSIgeT0iOTAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTBwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4xNzF4MTgwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                        </a>
                        <button data-productsku="product1" class="btn btn-lg btn-primary btn-block" type="submit">Add Product</button>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3">
                    <div class="product">
                        <h2>Product 2</h2>
                        <a href="#" class="thumbnail">
                            <img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjU5LjU0Njg3NSIgeT0iOTAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTBwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4xNzF4MTgwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                        </a>
                        <button data-productsku="product2" class="btn btn-lg btn-primary btn-block" type="submit">Add Product</button>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3">
                    <div class="product">
                        <h2>Product 3</h2>
                        <a href="#" class="thumbnail">
                            <img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjU5LjU0Njg3NSIgeT0iOTAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTBwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4xNzF4MTgwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                        </a>
                        <button data-productsku="product3" class="btn btn-lg btn-primary btn-block" type="submit">Add Product</button>
                    </div>
                </div>

                <div class="col-xs-6 col-md-3">
                    <div class="product">
                        <h2>Product 4</h2>
                        <a href="#" class="thumbnail">
                            <img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjU5LjU0Njg3NSIgeT0iOTAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTBwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4xNzF4MTgwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                        </a>
                        <button data-productsku="product4" class="btn btn-lg btn-primary btn-block" type="submit">Add Product</button>
                    </div>
                </div>
            </div>
        </div>
        
        <br/>
        <hr/>
        
<!--        <div class="container">
            <div class="main" style="width:500px; margin:0 auto;">
                <p>Demo Rest Api</p>

                <form name="rest_add_product" action="" method="POST">
                    <button type="submit" id="xadd-product" name="submit">Add Product</button>
                </form>
            </div>
        </div>-->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            (function ($) {
                jQuery(document).ready(function () {
                    //jQuery('#add-product').on('click', function (e) {
                    jQuery('.product button').on('click', function (e) {
                        var $this = $(this);

                        e.preventDefault();
                        var baseUrl = 'http://dev.ussa.org/ecommerce/magento/index.php/';

                        var redirectUrl = baseUrl + 'checkout/cart';

                        //alert(baseUrl + 'restconnect/index/addProduct');

                        jQuery.ajax({
                            url: baseUrl + 'restconnect/index/addProduct',
                            type: "POST",
                            data: {
                                apikey: 'apikey',
                                apipassword: 'password',
                                productsku: $this.data('productsku'),
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