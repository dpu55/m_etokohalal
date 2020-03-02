<?php
	session_start();

	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
    $gClient->setClientId("945436307468-ad3phkniqgs75tvfre16d7306f4nsv6k.apps.googleusercontent.com");
	$gClient->setClientSecret("cQfAvsQC5GwOQJEaIiUIfVWN");
	$gClient->setApplicationName("Web client etokohalal");
	$gClient->setRedirectUri("https://m.etokohalal.com/googlecallback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

	session_destroy();
	
?>