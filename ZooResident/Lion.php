<?php


class Lion extends Animal
{
    protected $kingOfSavanna;

    public function __construct($name, $age, $kingOfSavanna)
    {
        parent::__construct($name, $age);
        $this->kingOfSavanna = $kingOfSavanna;
    }

    public function getKingOfSavanna()
    {
        return $this->kingOfSavanna;
    }

    public function setKingOfSavanna($kingOfSavanna)
    {
        $this->kingOfSavanna = $kingOfSavanna;
    }

    public function getFood()
    {
        return $this->name . '  ' . 'like eat antilopa.';
    }

    public function getActions()
    {
        return $this->kingOfSavanna . ' ' . 'like eat meet ';
    }

    public function breath()
    {
        return $this->getActions() . ' ' . parent::getBreath();
    }

}