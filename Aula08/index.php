<?php

require_once './Class/Fighter.php';
require_once './Class/Fight.php';

$fighter = [];
$fighter[0] = new Fighter('Pretty Boy', 'França', 31, 1.75,  68.9,'te', 11, 2, 1);
$fighter[1] = new Fighter('Putscript', 'Brasil', 29, 1.68,  57.8,'va', 14, 2, 3);

$ufc = new Fight();
$ufc->brandFight($fighter[0], $fighter[1]);
$ufc->fight();
$fighter[0]->status();
$fighter[1]->status();

?>