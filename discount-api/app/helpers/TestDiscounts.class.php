<?php

class TestDiscounts {

    /**
     * The Order JSON Object
     * @var array
     */
    protected $order;

    /**
     * The Order Customer Object
     * @var Customer
     */
    protected $customer;

    /**
     * An array of all applicable Discounts
     * @var array
     */
    protected $discounts = array();

    public function __construct($order) {
        $this->order;
        $c = json_decode(file_get_contents(format_url(API_ENDPOINT) . '/customers'))[$order['customer-id']];
        $this->customer = new Customer($c->id, $c->name, $c->since, $c->revenue);
    }

    public function testCustomer($customer) {
        if($this->customer != null) {
            // If customer has €1000 or more revenue -> 10% order discount
            $discount = $this->customer_1000_revenue();
            if($discount) array_push($this->discounts, $discount);
        }
    }

    public function testOrder($order) {
        if($this->order != null) {
            // If the order includes a minimum of 5 products of the switches category -> 6th cheapest free
            order_min_5_switches();
        }
    }

    public function getCustomer() {
        return $this->customer;
    }

    private function customer_1000_revenue() {
        if($this->customer->getRevenue() >= 1000) {
            return new Discount(10, 'PERCENT_ORDER', $this->customer, $this->order, false);
        }
        return false;
    }

    private function order_min_5_switches() {

    }
}