<?php
    
    session_start();  
    define('IN_ECS', true);
    require_once __DIR__ . '/FacebookAPI/vendor/autoload.php';
    
    $app_id = '203993644135791';  // '2490218227900019'
    $app_secret = 'aeda8655e1e213ea4ad99e11e5007218';  // 'f2a015355ac783abc2f02d4e712552b2'

    $fb = new Facebook\Facebook([
        'app_id' => $app_id, 
        'app_secret' => $app_secret,
        'default_graph_version' => 'v3.2',
    ]);
    
    $helper = $fb->getRedirectLoginHelper();
    
    $permissions = ['email']; // Optional permissions
    $facebookURL = $helper->getLoginUrl('https://m.etokohalal.com/facebookcallback.php', $permissions);
    // $facebookURL = $helper->getLoginUrl('http://localhost/etokohalal/facebookcallback.php', $permissions);

?>