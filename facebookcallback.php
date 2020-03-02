<?php

    session_start(); 
    define('IN_ECS', true);
    require_once __DIR__ . '/FacebookAPI/vendor/autoload.php'; 
    require (dirname(__FILE__) . '/includes/init.php');
    require_once (ROOT_PATH . 'languages/' . $_CFG['lang'] . '/user.php'); 

    $app_id = '203993644135791';  // '2490218227900019'
    $app_secret = 'aeda8655e1e213ea4ad99e11e5007218';  // 'f2a015355ac783abc2f02d4e712552b2'

    $fb = new Facebook\Facebook([
        'app_id' => $app_id, 
        'app_secret' => $app_secret,
        'default_graph_version' => 'v3.2',
    ]);

    $helper = $fb->getRedirectLoginHelper();

    try {
        $accessToken = $helper->getAccessToken();
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
        // When Graph returns an error
        echo 'Graph returned an error: ' . $e->getMessage();
        header('Location: register.php');
        exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        // When validation fails or other local issues
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        header('Location: register.php');
        exit;
    }

    if (! isset($accessToken)) {
        if ($helper->getError()) {
            header('HTTP/1.0 401 Unauthorized');
            echo "Error: " . $helper->getError() . "\n";
            echo "Error Code: " . $helper->getErrorCode() . "\n";
            echo "Error Reason: " . $helper->getErrorReason() . "\n";
            echo "Error Description: " . $helper->getErrorDescription() . "\n";
            header('Location: register.php');
        } else {
            header('HTTP/1.0 400 Bad Request');
            echo 'Bad request';
            header('Location: register.php');
        }
        exit;
    }

    // The OAuth 2.0 client handler helps us manage access tokens
    $oAuth2Client = $fb->getOAuth2Client();

    // Get the access token metadata from /debug_token
    $tokenMetadata = $oAuth2Client->debugToken($accessToken);

    // Validation (these will throw FacebookSDKException's when they fail)
    $tokenMetadata->validateAppId($app_id); // Replace {} with your app id
    // If you know the user ID this access token belongs to, you can validate it here
    //$tokenMetadata->validateUserId('123');
    $tokenMetadata->validateExpiration();

    if (! $accessToken->isLongLived()) {
        // Exchanges a short-lived access token for a long-lived one
        try {
            $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
        } catch (Facebook\Exceptions\FacebookSDKException $e) {
            echo "<p>Error getting long-lived access token: " . $e->getMessage() . "</p>\n\n";
            header('Location: register.php');
            exit;
        }
    }

    $_SESSION['fb_access_token'] = (string) $accessToken;

    try {
        // Returns a `Facebook\FacebookResponse` object
        $response = $fb->get('/me?fields=id,name,first_name,last_name,email,link,gender,picture', $accessToken);
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
        echo 'Graph returned an error: ' . $e->getMessage();
        header('Location: register.php');
        exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
        echo 'Facebook SDK returned an error: ' . $e->getMessage();
        header('Location: register.php');
        exit;
    }

    $user = $response->getGraphUser();

    $username = explode("@", $user['email']);
    $data['id'] = $user['id'];
    $data['email'] = $user['email'];
    $data['gender'] = "";
    $data['picture'] = $user['picture']['url'];
    $data['username'] = $username[0];
    $data['password'] = strtolower($username[0]).'!@#'.rand(0,5);


    $data['msn'] = '';
    $data['qq'] = '';
    $data['office_phone'] = '';
    $data['home_phone'] = '';

    $url = 'id='.$data['id'].'&email='.$data['email'].'&pic='.$data['picture'];

    header('Location: facebookLog.php?'.$url);

    session_destroy();    

?>