<?php

require_once './Class/Caneta.php';

$c1 = new Caneta('BIC', 'Azul', 0.5);
$c2 = new Caneta('Fable Castle', 'Verde', 1);

echo print_r($c1) .'<br>';
echo print_r($c2) .'<br>';

echo 'Eu tenho uma caneta '. $c1->getModel() .' de ponta '. $c1->getPoint(). '<br>';
echo 'Eu tenho uma caneta '. $c2->getModel() .' de ponta '. $c2->getPoint(). '<br>';

?>