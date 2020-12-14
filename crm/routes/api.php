<?php

/*
|--------------------------------------------------------------------------
| Debug The API
|--------------------------------------------------------------------------
|
| Endpoint: /api/debug
|
*/
$router->map('GET|POST', '/api/debug', 'ApiController#debug');

/*
|--------------------------------------------------------------------------
| Get All Products
|--------------------------------------------------------------------------
|
| Endpoint: /api/products
|
*/
$router->map('GET', '/api/products', 'ApiController#get_products');

/*
|--------------------------------------------------------------------------
| Get All Customers
|--------------------------------------------------------------------------
|
| Endpoint: /api/customers
|
*/
$router->map('GET', '/api/customers', 'ApiController#get_customers');