<?php

abstract class Animal {

    protected $weight;
    protected $age;
    protected $members;

    abstract function move();
    abstract function feed();
    abstract function makeSound();

}

?>