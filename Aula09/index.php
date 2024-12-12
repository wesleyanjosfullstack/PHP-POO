<?php

require_once './Class/Book.php';
require_once './Class/People.php';

$p[0] = new People('Pedro', 22, 'M');
$p[1] = new People('Pedro', 31, 'M');

$b[0] = new Book('PHP Básico', 'José da Silva', 300, $p[0]);
$b[1] = new Book('POO com PHP', 'Maria de Souza', 500, $p[0]);
$b[2] = new Book('PHP Avançado', 'Ana Paula', 500, $p[1]);

print_r($b[0]);

?>