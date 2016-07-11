<?php
class Meanbee_Shippingrules_Calculator_Register_Comparator
    extends Meanbee_Shippingrules_Calculator_Register_Abstract
{
    /** @var Meanbee_Shippingrules_Calculator_Comparator_Abstract[] $children */
    protected $children = array();

    public function init()
    {
        $this->add('equal', new Meanbee_Shippingrules_Calculator_Comparator_Equal($this->registers));
        $this->add('notequal', new Meanbee_Shippingrules_Calculator_Comparator_NotEqual($this->registers));
        $this->add('lessthan', new Meanbee_Shippingrules_Calculator_Comparator_LessThan($this->registers));
        $this->add('greaterthan', new Meanbee_Shippingrules_Calculator_Comparator_GreaterThan($this->registers));
        $this->add('lessthanorequal', new Meanbee_Shippingrules_Calculator_Comparator_LessThanOrEqual($this->registers));
        $this->add('greaterthanorequal', new Meanbee_Shippingrules_Calculator_Comparator_GreaterThanOrEqual($this->registers));
        $this->add('between', new Meanbee_Shippingrules_Calculator_Comparator_Between($this->registers));
    }

    /**
     * {@inheritdoc}
     * @implementation Meanbee_Shippingrules_Calculator_Register_Abstract
     * @param  mixed   $child Potential child
     * @return boolean
     */
    protected function isValidChild($child)
    {
        return $child instanceof Meanbee_Shippingrules_Calculator_Comparator_Abstract;
    }
}
