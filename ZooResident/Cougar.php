<?php


class Cougar extends Animal
{
    protected $color;

    public function __construct($name, $age, $color)
    {
        parent::__construct($name, $age);
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getFood()
    {
        return $this->name . ' ' . 'eating meat.';
    }

    public function breath()
    {
        return $cougar = $this->name . ' ' .$this->getActions() . ' ' . parent::getBreath();
    }

}

