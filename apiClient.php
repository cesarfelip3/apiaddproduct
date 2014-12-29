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
                    <input type="submit" id="add-product" name="submit" value="Add Product"/>
                </form>
            </div>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript">
            (function ($) {
                jQuery(document).ready(function () {
                    jQuery('#add-product').on('click', function () {
                        jQuery.ajax({
                            url: "apiServer.php",
                            type: "POST",
                            data: {apikey: 'apikey', apipassword: 'password', productId: 122, qty: 2},
                            dataType: "html",
                            success: function (data) {
                                alert(data);
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