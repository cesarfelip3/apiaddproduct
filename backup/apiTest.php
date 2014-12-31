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
                <input type="submit" name="submit" value="Add Product"/>
            </form>
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
    (function($){
        jQuery(document).ready(function(){
        jQuery.ajax({
         url: "/doorconfig/index/update",
         type: "POST",
         data: $formData,
         dataType: "json",
         success: function(data) 
                {
                  $productId = data.currentProductId;
                  $price = data.currentPrice;
                  $baseImgUrl = data.currentProductBaseImgUrl;
                  $productUrl = data.currentProductUrl;
                     $j("#result").text($price);

                     $j("#addtocart").attr('href',  $currentStoreUrl + "checkout/cart/add?product=" + $productId + "&qty=1");
                     $j("#productimg").attr('src', $baseImgUrl);

                     console.log(data);

                   },
            error: function(error)
                  {
                     console.log("Error:");
                     console.log(error);
                     alert("ERROR");
                  }
        });
    };
        });
    })(jQuery);
    </script>
</body>
</html>