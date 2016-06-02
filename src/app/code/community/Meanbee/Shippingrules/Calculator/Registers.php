<?php
class Meanbee_Shippingrules_Calculator_Registers {
    protected $aggregator;
    protected $comparator;
    protected $condition;
    protected $term;
    protected $type;

    public function __construct() {
        $this->aggregator = new Meanbee_Shippingrules_Calculator_Register_Aggregator($this);
        $this->comparator = new Meanbee_Shippingrules_Calculator_Register_Comparator($this);
        $this->condition  = new Meanbee_Shippingrules_Calculator_Register_Condition($this);
        $this->term       = new Meanbee_Shippingrules_Calculator_Register_Term($this);
        $this->type       = new Meanbee_Shippingrules_Calculator_Register_Type($this);

        $this->aggregator->init();
        $this->comparator->init();
        $this->condition->init();
        $this->term->init();
        $this->type->init();
    }

    public function getAggregatorRegister()
    {
        return $this->aggregator;
    }

    public function getComparatorRegister()
    {
        return $this->comparator;
    }

    public function getConditionRegister()
    {
        return $this->condition;
    }

    public function getTermRegister()
    {
        return $this->term;
    }

    public function getTypeRegister()
    {
        return $this->type;
    }
}