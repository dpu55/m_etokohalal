<?php
// database host
$db_host   = "localhost:3306";

// database name
$db_name   = "test_etokohalal_db";

// database username
$db_user   = "test";

// database password
$db_pass   = "Nggaktau*()890";


$prefix    = "ecs_";

$timezone    = "asia/jakarta";

$cookie_path    = "/";

$cookie_domain    = "";

$session = "1440";

define('EC_CHARSET','utf-8');

if(!defined('ADMIN_PATH'));
{
define('ADMIN_PATH','admin');
}
if(!defined('ADMIN_PATH_M'));
{
define('ADMIN_PATH_M','admin');
}
define('AUTH_KEY', 'this is a key');

define('OLD_AUTH_KEY', '');

define('API_TIME', '2020-02-21 03:21:50');

?>