<?php

abstract class CompanyAb {

    protected $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    abstract public function setExpert($subject);
}

class Employees extends CompanyAb {
    protected $subject;
    public function setExpert($subject){
        $this->subject = $subject;
    }
}
