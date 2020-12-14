<?php
ini_set('display_errors', 1);

function format_url($url) {
    if(substr($url , -1) == '/') $url = substr($url, 0, -1);;
    return $url;
}

require_once __ROOT__.'/app/helpers/Router.class.php';


