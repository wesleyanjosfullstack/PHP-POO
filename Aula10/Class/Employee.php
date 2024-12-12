<?php

require_once './Class/People';

class Employee extends People {

    private $sector;
    private $working;
    
    public function changeWork() {
        $this->working = !$this->working;
    }

    public function getSector() {
        return $this->sector;
    }

    public function setSector($s) {
        $this->sector = $s;
    }

    public function getWorking() {
        return $this->working;
    }

    public function setWorking($w){
        $this->working = $w;
    }

}

?>