<?php

require_once './Class/Bank.php';

$p1 = new Bank();
$p2 = new Bank();

$p1->openAccont('CC');
$p1->setUser('Jubileu');
$p1->setNumAccont(1111);
$p2->openAccont('CP');
$p2->setUser('Creuza');
$p2->setNumAccont(2222);

// $p1->deposit(300);
// $p2->deposit(500);

// $p2->withdraw(100);

// $p1->payMonthly();
// $p2->payMonthly();

$p1->withdraw(50);
$p2->withdraw(150);
$p1->closeAccount();
$p2->closeAccount();

echo print_r($p1) .'<br>';
echo print_r($p2) .'<br>';

?>