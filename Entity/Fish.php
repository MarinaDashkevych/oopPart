<?php

abstract class Fish implements Actions
{
    protected $size;
    protected $isPredator;

    public function __construct($size, $isPredator)
    {
        $this->size = $size;
        $this->isPredator = $isPredator;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getIsPredator()
    {
        return $this->isPredator;
    }

    public function setIsPredator($isPredator)
    {
        $this->isPredator = $isPredator;
    }

    abstract public function getFavoriteTemperature();

    public function getBreath()
    {
        return 'breathe with gills';
    }

    public function getActions()
    {
        return 'swim in the water';
    }

}