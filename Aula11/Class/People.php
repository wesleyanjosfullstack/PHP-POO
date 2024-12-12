<?php

abstract class People {
     
    private $name;
    private $age;
    private $sex;

    public final function birth() {
        $this->age++;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($n) {
        $this->name = $n;
    }
    
    public function getAge() {
        return $this->age;
    }

    public function setAge($a) {
        $this->age = $a;
    }

    public function getSex() {
        return $this->sex;
    }

    public function setSex($s) {
        $this->sex = $s;
    }
    
}

?>