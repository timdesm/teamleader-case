<?php

class ErrorController {

    public static function not_found($args) {
        header('Content-type: application/json');
        header("HTTP/1.1 404 Page Not Found");
        echo `{success: false, message: 'Page not found'}`;
    }

}