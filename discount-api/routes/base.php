<?php

/*
|--------------------------------------------------------------------------
| Test If Valid Installation
|--------------------------------------------------------------------------
|
| Endpoint: /test-installation
|
*/
$router->map('GET|POST', '/test-installation', 'BaseController#test_installation');