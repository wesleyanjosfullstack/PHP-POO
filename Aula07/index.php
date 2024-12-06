<?php

require_once './Class/Fighter.php';

$fighter = [];
$fighter[0] = new Fighter('Pretty Boy', 'França', 31, 1.75, 68.9, 11, 2, 1);
$fighter[1] = new Fighter('Putscript', 'Brasil', 29, 1.68, 57.8, 14, 2, 3);
$fighter[2] = new Fighter('SnapShadow', 'EUA', 35, 1.65, 80.9, 12, 2, 1);
$fighter[3] = new Fighter('Dead Code', 'Austrália', 28, 1.93, 81.6, 13, 0, 2);
$fighter[4] = new Fighter('UFOCobol', 'Brasil', 37, 1.70, 119.3, 5, 4, 3);
$fighter[5] = new Fighter('Nerdaart', 'EUA', 30, 1.81, 105.7, 12, 2, 4);
$fighter[0]->status();
$fighter[1]->status();
$fighter[2]->status();
$fighter[3]->status();
$fighter[4]->status();
$fighter[5]->status();

$fighter[0]->toPresent();
$fighter[0]->status();
$fighter[0]->loseFight();
$fighter[0]->status();

?>