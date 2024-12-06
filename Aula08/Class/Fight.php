<?php

require_once './Fighter.php';

class Fight {

    private $challenged;
    private $challenging;
    private $rounds;
    private $approved;

    public function brandFight() {

    }

    public function fight() {

    }

    public function getChallenged() {
        return $this->challenged;
    }

    public function setChallenged($challenged) {
        $this->challenged = $challenged;
    }

    public function getChallenging() {
        return $this->challenging;
    }

    public function setChallenging($challenging) {
        $this->challenging = $challenging;
    }

    public function getRounds() {
        return $this->rounds;
    }

    public function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    public function getApproved() {
        return $this->approved;
    }

    public function setApproved($approved) {
        $this->approved = $approved;
    }

}

?>