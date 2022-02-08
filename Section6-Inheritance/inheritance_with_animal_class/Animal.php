<?php

class Animal {
    protected $name;
    protected bool $isHunting;

    public function __construct($name, $isHunting)
    {
        $this->name = $name;
        $this->isHunting = $isHunting;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return bool
     */
    public function isHunting(): bool
    {
        return $this->isHunting;
    }

    function doesHunting(){
        if ($this->isHunting){
            echo "Yes, it hunts. Animal class <br>";
        } else echo "No it does not hunt. Animal class <br>";
    }
}
