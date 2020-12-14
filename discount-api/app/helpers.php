<?php

function format_url($url) {
    if(substr($url , -1) == '/') $url = substr($url, 0, -1);;
    return $url;
}

// Helpers
require_once __ROOT__.'/app/helpers/CrmApi.class.php';
require_once __ROOT__.'/app/helpers/Router.class.php';
require_once __ROOT__.'/app/helpers/TestDiscounts.class.php';

// Models
require_once __ROOT__.'/app/models/Customer.php';

