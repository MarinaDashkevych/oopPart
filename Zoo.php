<?php
require_once 'connect.php';
echo '<pre>';

$cougar = new Cougar('Puma', '3', "black");//var_dump($cougar);
echo $cougar->breath();
echo $cougar->getFood();
echo '<pre>';

$lion = new Lion('Big Lion', '5', 'King');
echo $lion->breath();
echo $lion->getFood();
echo '<pre>';

$wolf = new Wolf('Grey', '7', 'Loner');
echo $wolf->getActions();
echo $wolf->getFood();
echo '<pre>';

$antilopa = new Antilopa('Furiosa', '3 year', ' max 55');
echo $antilopa->getFood();
echo $antilopa->getActions();
echo '<pre>';

$cat = new Cat('Barcelona', '11', 'home');
echo $cat->getFood();
echo $cat->getActions();
echo '<pre>';

$dog = new Dog('Tim', '5', 'bull terrier');
echo $dog->getActions();
echo $dog->getFood();
echo '<pre>';

$elefant = new Elephant('Funtik', '6 ', 'one - big and one - broken');
echo $elefant->getActions();
echo $elefant->getFood();
echo '<pre>';


$trout = new Trout('1 metr', 'hunter', 'fresh river');
echo $trout->getFavoriteTemperature();
echo $trout->getActions();
echo '<pre>';

$shark = new Shark('6 meters', 'whale shark is not a predator', 'whale shark');
echo $shark->getActions();
echo $shark->getFavoriteTemperature();
echo $shark->getBreath();

