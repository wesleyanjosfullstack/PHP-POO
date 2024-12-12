<?php

require_once './Class/People.php';
require_once './Class/Student.php';
require_once './Class/Teacher.php';
require_once './Class/Employee.php';

$p1 = new People();
$p2 = new Student();
$p3 = new Teacher();
$p4 = new Employee();

$p1->setName('Pedro');
$p1->setAge(12);
$p1->setSex('M');
$p2->setName('Maria');
$p2->setAge(30);
$p2->setSex('F');
$p3->setName('Cláudio');
$p3->setAge(28);
$p3->setSex('M');
$p4->setName('Fanciana');
$p4->setAge(25);
$p4->setSex('F');

$p2->setCourse('Matemática');
$p3->setSalary(2500.75);
$p4->setSector('Estoque');

$p3->receiveRaise(550.20);
$p4->changeWork();
$p2->cancelRegistrtion();

print_r($p1);
print_r($p2);
print_r($p3);
print_r($p4);

?>