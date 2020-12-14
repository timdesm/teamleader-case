<?php

class ApiController {

    public static function debug($args) {
        header('Content-type: application/json');
        echo json_encode(array('success' => true, 'message' => 'Successful connection'));
    }

    public static function get_products($args) {
        header('Content-type: application/json');
        $data = new Data();
        echo json_encode($data->getProducts());
    }

    public static function get_customers($args) {
        header('Content-type: application/json');
        $data = new Data();
        echo json_encode($data->getCustomers());
    }

}