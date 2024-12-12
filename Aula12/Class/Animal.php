<?php

abstract class Animal {

    protected $weight;
    protected $age;
    protected $members;

    abstract function move();
    abstract function feed();
    abstract function makeSound();

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($w) {
        $this->weight = $w;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($a) {
        $this->age = $a;
    }

    public function getMembers() {
        return $this->members;
    }

    public function setMembers($m) {
        $this->members = $m;
    }
    
}

?>