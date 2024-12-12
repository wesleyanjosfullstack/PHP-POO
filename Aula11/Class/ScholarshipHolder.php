<?php

require_once './Class/Student.php';

class ScholarshipHolder extends Student {

    private $scholarship;

    public function renewScholarship() {
        echo '<p>Bolsa renovada !</p>';
    }

    public function getScholarship() {
        return $this->scholarship;
    }

    public function setScholarship($s) {
        $this->scholarship = $s;
    }

}

?>