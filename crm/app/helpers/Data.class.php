<?php

class Data {

    /**
     * Get all products
     * @return array
     */
    public function getProducts() {
        $path = __ROOT__ . '/storage/data/products.json';
        return $this->getLocalData($path);
    }

    /**
     * Get all customers
     * @return array
     */
    public function getCustomers() {
        $path = __ROOT__ . '/storage/data/customers.json';
        return $this->getLocalData($path);
    }

    /**
     * Get JSON data from stored file
     * @param $path
     * @return array
     */
    protected function getLocalData($path) {
        return json_decode(file_get_contents($path));
    }
}