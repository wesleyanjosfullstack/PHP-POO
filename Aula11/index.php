<?php

require_once './Class/Visitor.php';
require_once './Class/Student.php';
require_once './Class/ScholarshipHolder.php';

$v1 = new Visitor();
$v1->setName('Juvenal');
$v1->setAge(33);
$v1->setSex('M');
print_r($v1);

$s1 = new Student();
$s1->setName('Pedro');
$s1->setRegistration(1111);
$s1->setSex('M');
$s1->setAge(16);
$s1->setCourse('Informática');
$s1->payMonthly();
print_r($s1);

$b1 = new ScholarshipHolder();
$b1->setRegistration(111);

?>