<?php


class Antilopa extends Animal
{
    public $speed;

    public function __construct($name, $age, $speed)
    {
        parent::__construct($name, $age);
        $this->speed = $speed;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function getFood()
    {
        return $this->name . ' ' . ' eat green leaf';
    }

    public function getActions()
    {
        return  $this->name .' ' . parent::getActions() . ' ' . 'with speed' . ' '. $this->speed;
    }
}