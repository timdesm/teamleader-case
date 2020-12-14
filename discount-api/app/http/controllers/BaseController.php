<?php

class BaseController {

    public static function test_installation($args) {
        try {
            $api = new CrmApi();
            $debug = $api->debugEndpoint();
            if($debug != null && $debug->success) echo json_encode(array('success' => true, 'message' => 'Installation successful and valid API connection'));
            else echo json_encode(array('success' => false, 'message' => 'Could not connect to CRM API, check API_ENDPOINT in your config.php file'));
        }
        catch (Exception $ex) {
            echo json_encode(array('success' => false, 'message' => 'Internal Error! Installation invalid.'));
        }
    }

}
