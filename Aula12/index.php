<?php

require_once './Class/Bird.php';
require_once './Class/Fish.php';
require_once './Class/Mammal.php';
require_once './Class/Reptile.php';
require_once './Class/Arara.php';
require_once './Class/Dog.php';
require_once './Class/GoldFish.php';
require_once './Class/Kangaroo.php';
require_once './Class/Snake.php';
require_once './Class/Turtle.php';

$m = new Mammal();
$b = new Bird();
$r = new Reptile();

$k = new Kangaroo();
$d = new Dog();
$t = new Turtle();

$m->makeSound();
$d->makeSound();
$k->makeSound();

?>