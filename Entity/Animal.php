<?php


abstract class Animal implements Actions
{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    abstract public function getFood();

    public function getActions()
    {
        return 'run on the field ';
    }

    public function getBreath()
    {
        return $this->name .' '. ' breath oxygen and using nose.';
    }

}
