<?php

class People {
    
    private $name;
    private $age;
    private $sex;

    public function birth() {
        $this->age++;
    }

    public function __construct($name, $age, $sex)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
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