<?php


class Trout extends Fish
{
    protected $kindOfWater;

    public function __construct($size, $isPredator, $kindOfWater)
    {
        parent::__construct($size, $isPredator);
        $this->kindOfWater = $kindOfWater;
    }

    public function getKindOfWater()
    {
        return $this->kindOfWater;
    }

    public function setKindOfWater($kindOfWater)
    {
        $this->kindOfWater = $kindOfWater;
    }

    public function getFavoriteTemperature()
    {
        return 'like cold water ';
    }

    public function getBreath()
    {
        return $this->isPredator . ' ' . 'can breath under water';
    }

    public function getActions()
    {
        return $this->kindOfWater . ' ' . parent::getActions();
    }

}