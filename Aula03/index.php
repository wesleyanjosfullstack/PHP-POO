<?php

require_once './Class/Caneta.php';

$c1 = new Caneta();
$c1->modelo = 'BIC Cristal';
$c1->cor = 'Azul';
// $c1->ponta = 0.5; 
// $c1->carga = 99;
// $c1->tampada = true;
print_r($c1);

$c1->rabiscar();
$c1->tampar();
echo '<br>';

print_r($c1);

?>