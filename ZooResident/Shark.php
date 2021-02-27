<?php


class Shark extends Fish
{
    protected $kindOfShark;

    public function __construct($size, $isPredator, $kindOfShark)
    {
        parent::__construct($size, $isPredator);
        $this->kindOfShark = $kindOfShark;
    }

    public function getKindOfShark()
    {
        return $this->kindOfShark;
    }

    public function setKindOfShark($kindOfShark)
    {
        $this->kindOfShark = $kindOfShark;
    }

    public function getFavoriteTemperature()
    {
        return $this->kindOfShark . ' ' . 'like warm water ';
    }

    public function getBreath()
    {
        return $this->isPredator . ' ' . parent::getBreath();
    }

    public function getActions()
    {
        return $this->kindOfShark . ' ' . parent::getActions();
    }
}