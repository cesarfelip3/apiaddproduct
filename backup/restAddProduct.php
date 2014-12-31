<?php
/**
* Example of simple product POST using Admin account via Magento REST API. OAuth authorization is used
*/

if ($_POST || isset($_REQUEST['oauth_token'])) {
    $baseUrl = 'http://127.0.0.1/Magento/magapitest/';
    $requestBaseUrl = 'http://127.0.0.1/Magento/magento191/';
    $callbackUrl = $baseUrl . "restAddProduct.php";
    $temporaryCredentialsRequestUrl = $requestBaseUrl . "oauth/initiate?oauth_callback=" . urlencode($callbackUrl);
    $adminAuthorizationUrl = $requestBaseUrl . 'admin/oauth_authorize';
    $accessTokenRequestUrl = $requestBaseUrl . 'oauth/token';
    $apiUrl = $requestBaseUrl . 'api/rest';
    $consumerKey = 'bafca49ca82097de9f94ff294281de19';
    $consumerSecret = 'f3cb90d6f442c7424a5895af15161e08';
    echo '<pre>';
    session_start();
    
    if (!isset($_GET['oauth_token']) && isset($_SESSION['state']) && $_SESSION['state'] == 1) {
        $_SESSION['state'] = 0;
    }

    try {
        $authType = (isset($_SESSION['state']) && $_SESSION['state'] == 2) ? OAUTH_AUTH_TYPE_AUTHORIZATION : OAUTH_AUTH_TYPE_URI;
        $oauthClient = new OAuth($consumerKey, $consumerSecret, OAUTH_SIG_METHOD_HMACSHA1, $authType);
        $oauthClient->enableDebug();

        if (!isset($_GET['oauth_token']) && !$_SESSION['state']) {
            $requestToken = $oauthClient->getRequestToken($temporaryCredentialsRequestUrl);
            $_SESSION['secret'] = $requestToken['oauth_token_secret'];
            $_SESSION['state'] = 1;
            header('Location: ' . $adminAuthorizationUrl . '?oauth_token=' . $requestToken['oauth_token']);
            exit;
        } else if (isset($_SESSION['state']) && $_SESSION['state'] == 1) {
            $oauthClient->setToken($_GET['oauth_token'], $_SESSION['secret']);
            $accessToken = $oauthClient->getAccessToken($accessTokenRequestUrl);
            $_SESSION['state'] = 2;
            $_SESSION['token'] = $accessToken['oauth_token'];
            $_SESSION['secret'] = $accessToken['oauth_token_secret'];
            header('Location: ' . $callbackUrl);
            exit;
        } else {
            $oauthClient->setToken($_SESSION['token'], $_SESSION['secret']);
            $resourceUrl = "$apiUrl/resttests";

            //$headers = array('Content-Type' => 'application/json');

            $oauthClient->fetch($resourceUrl);

            $responseInfo = $oauthClient->getLastResponseInfo();

            //$oauthClient->fetch($resourceUrl, array(), OAUTH_HTTP_METHOD_GET, $headers);
            print_r($responseInfo);
        }
    } catch (OAuthException $e) {
        print_r($e);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Rest Add Production</title>
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
</body>
</html>