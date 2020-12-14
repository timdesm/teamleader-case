<?php

class Customer {

    /**
     * The customers unique identifier
     * @var int
     */
    protected $id;

    /**
     * The customers name
     * @var string
     */
    protected $name;

    /**
     * Data since the customer is active
     * @var string
     */
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

    public function getRevenue() {
        return $this->revenue;
    }

    public function orderCount() {
        return 0;
    }
}