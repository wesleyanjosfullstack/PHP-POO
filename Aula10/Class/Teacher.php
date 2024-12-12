<?php

class Teacher {

    private $specialty;
    private $salary;

    public function receiveRaise($plus) {
        $this->salary = $plus;
    }

    public function getSpecialty() {
        return $this->specialty;
    }

    public function setSpecialty($s) {
        $this->specialty = $s;
    }
    
    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($s) {
        $this->salary = $s;
    }

}