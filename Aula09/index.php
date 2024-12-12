<?php

require_once './Class/Book.php';
require_once './Class/People.php';

$p[0] = new People('Pedro', 22, 'M');
$p[1] = new People('Pedro', 31, 'M');

$b[0] = new Book('PHP Básico', 'José da Silva', 300, $p[0]);
$b[1] = new Book('POO com PHP', 'Maria de Souza', 500, $p[0]);
$b[2] = new Book('PHP Avançado', 'Ana Paula', 500, $p[1]);

// print_r($b[0]);

$b[0]->open();
// $b[0]->browse(80);
// $b[0]->nextPag();
// $b[0]->nextPag();
// $b[0]->datails();
// $b[0]->prevPag();
// $b[0]->datails();
$b[0]->browse(800);
$b[0]->datails();

$b[1]->open();
$b[1]->datails();
$b[2]->datails();

?>