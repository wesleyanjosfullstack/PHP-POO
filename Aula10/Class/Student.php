<?php

require_once './Class/People.php';

class Student extends People {
    
    private $registration;
    private $course;

    public function cancelRegistrtion() {
        echo '<p>Matricula será cancelada</p>';
    }

    public function getRegistration() {
        return $this->registration;
    }

    public function setRegistration($r) {
        $this->registration = $r;
    } 

    public function getCourse() {
        return $this->course;
    }

    public function setCourse($c) {
        $this->course = $c;
    }
    
}

?>