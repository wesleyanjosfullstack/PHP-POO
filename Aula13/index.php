<?php

require_once './Class/Mammal.php';
require_once './Class/Wolf.php';
require_once './Class/Dog.php';

$c = new Dog();
$w = new Wolf();
$m = new Mammal();
$c->makeSound();
$w->makeSound();
$m->makeSound();

?>