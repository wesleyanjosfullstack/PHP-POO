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

$c->reactText('Olá');
$c->reactText('Vai apanhar!');
$c->reactHour(11);
$c->reactHour(21);
$c->reactUser(true);
$c->reactUser(false);
$c->reactAgeWeight(2, 12.5);
$c->reactAgeWeight(17, 4.5);

?>