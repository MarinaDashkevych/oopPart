<?php


abstract class Insect implements Actions
{
    protected $insectType;
    protected $latinaName;

    public function __construct($insectType, $latinaName)
    {
        $this->insectType->$insectType;
        $this->latinaName->$latinaName;
    }

    public function getInsectType()
    {
        return $this->insectType;
    }

    public function setInsectType($insectType)
    {
        $this->insectType = $insectType;
    }

    public function getLatinaName()
    {
        return $this->latinaName;
    }

    public function setLatinaName($latinaName)
    {
        $this->latinaName = $latinaName;
    }

    public function actions()
    {
        return 'Insect fly in the sky';
    }

    public function breath()
    {
        return 'Insects have no lungs. Their main respiratory system is the trachea.';
    }
}