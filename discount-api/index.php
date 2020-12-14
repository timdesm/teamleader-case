<?php
header('X-Powered-By: Tim De Smet (timdesmet.be)');


define('__ROOT__', dirname(__FILE__));
define('__PROTOCOL__', 'https://');
define('__URL__', __PROTOCOL__.$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]);
define('__BASE_URL__', __PROTOCOL__.$_SERVER[HTTP_HOST]);
$uri_array = array_slice(explode('.', $_SERVER[HTTP_HOST]), -2, 2, true);
$uri_string = implode('.', $uri_array);
define('__URI__', $uri_string);


require_once 'config.php';
require_once 'app/helpers.php';
require_once 'app/http/kernel.php';
require_once 'routes/index.php';

exit;
