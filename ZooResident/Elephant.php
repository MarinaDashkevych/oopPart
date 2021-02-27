<?php


class Elephant extends Animal
{
    public $countOfTusks;

    public function __construct($name, $age, $countOfTusks)
    {
        parent::__construct($name, $age);
        $this->counOfTusks = $countOfTusks;
    }

    public function getCountOfTusks()
    {
        return $this->countOfTusks;
    }

    public function setCountOfTusks($countOfTusks)
    {
        $this->countOfTusks = $countOfTusks;
    }


    public function getFood()
    {
        return $this->name . ' ' . ' eat tropical fruit and vegetables.';
    }

    public function getActions()
    {
        return  $this->name .' ' . parent::getActions() .' '. parent::getBreath();
    }

}