<?php

class Customer {

    protected $id;
    protected $name;
    protected $since;

    /**
     * Total revenue by customer
     * @var double
     */
    protected $revenue;

    public function __construct($id, $name, $since, $revenue) {
        $this->id = $id;
        $this->name = $name;
        $this->since = $since;
        $this->revenue = $revenue;
    }

    public function orderCount() {
        return 0;
    }
}