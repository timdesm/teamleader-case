<?php
if(DEBUG) {
    ini_set('display_errors', 1);
}

if(FORCE_SSL && $_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}

$router = new Router();
$router->setBasePath(BASE_PATH);

require_once('base.php');
require_once('discount.php');

$match = $router->match();

if ($match === false) {
    ErrorController::not_found(array($match['params']));
}
else {
    if(is_array($match) && is_callable( $match['target'] ) ) {
        define('PAGE_NAME', $match['name']);
        call_user_func_array($match['target'], $match['params']);
    }
    else {
        list($controller, $action) = explode( '#', $match['target'] );
        if (is_callable(array($controller, $action)) ) {
            if($match['name'] != null) define('PAGE_NAME', $match['name']);
            call_user_func_array(array($controller,$action), array($match['params']));
        }
        else {
            header("HTTP/1.1 500 Internal Server Error");
            exit;
        }
    }
}
