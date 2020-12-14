<?php

class Discount {

    private $types = ['PERFECT_PRODUCT', 'PERCENT_ORDER', 'PERCENT_CHEAPEST', 'FIXED_AMOUNT', 'X_PRODUCT_OF_CATEGORY_FREE'];

    protected $amount;

    protected $type;

    protected $target;

    protected $order;

    protected $cumulative;

    public function __construct($amount, $type, $target, $order, $cumulative) {
        $this->amount = $amount;
        $this->type = $type;
        $this->target = $target;
        $this->order = $order;
        $this->cumulative = $cumulative;
    }

    public function getCalculated() {
        switch($this->type) {
            case('PERFECT_PRODUCT'):
                break;
            case('PERCENT_ORDER'):
                break;
            case('PERCENT_CHEAPEST'):
                break;
            case('FIXED_AMOUNT'):
                return $this->amount;
                break;
            case('X_PRODUCT_OF_CATEGORY_FREE'):
                break;
        }
        return 0;
    }

}