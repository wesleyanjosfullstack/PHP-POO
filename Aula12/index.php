<?php

require_once './Class/Bird.php';
require_once './Class/Fish.php';
require_once './Class/Mammal.php';
require_once './Class/Reptile.php';

$m = new Mammal();
$b = new Bird();
$r = new Reptile();

$m->setWeight(33.5); 
$m->move();
$b->move();
$r->move();

?>