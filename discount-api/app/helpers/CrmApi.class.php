<?php

class CrmApi {

    private function getEndpoint($path) {
        if(substr($path, 0, 1) != '/') $path = '/' . $path;
        return format_url(API_ENDPOINT) . format_url($path);
    }

    public function debugEndpoint() {
        file_get_contents($this->getEndpoint('/debug'));

    }

}