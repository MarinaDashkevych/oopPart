<?php


class Wolf extends Animal
{
    protected $lonerOrGregarious;

    public function __construct($name, $age, $lonerOrGregarious)
    {
        parent::__construct($name, $age);
        $this->lonerOrGregarious = $lonerOrGregarious;
    }

    public function getLonerOrGregarious()
    {
        return $this->lonerOrGregarious;
    }

    public function setLonerOrGregarious($lonerOrGregarious)
    {
        $this->lonerOrGregarious = $lonerOrGregarious;
    }

    public function getFood()
    {
        return $this->lonerOrGregarious . ' ' . 'like eat rabbits.';
    }

    public function getActions()
    {
        return $this->getLonerOrGregarious() . ' ' . parent::getActions();
    }

}