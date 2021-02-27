<?php


class Dog extends Animal
{
    protected $breed;

    public function __construct($name, $age, $breed)
    {
        parent::__construct($name, $age);
        $this->breed = $breed;
    }

    public function getBreed()
    {
        return $this->breed;
    }

    public function setBreed($breed)
    {
        $this->breed = $breed;
    }

    public function getFood()
    {
        return $this->breed . ' ' . 'like eat  dogs yummy.';
    }

    public function getActions()
    {
        return $this->name . ' ' . parent::getActions();
    }

}