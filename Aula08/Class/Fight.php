<?php

require_once './Fighter.php';

class Fight {

    private $challenged;
    private $challenging;
    private $rounds;
    private $approved;

    public function brandFight($fight1, $fight2) {
        if ($fight1->getCategory() === $fight2->getCategory() && ($fight1 != $fight2)) {
            $this->approved = true;
            $this->challenged = $fight1;
            $this->challenging = $fight2;
        } else {
            $this->approved = false;
            $this->challenged = null;
            $this->challenging = null;
        }
    }

    public function fight() {
        if ($this->approved) {
            $this->challenged->toPresent();
            $this->challenging->toPresent();
            $winner = rand(0, 2);

            switch ($winner) {
                case 0: 
                    echo '<p>Empate !</p>'; 
                    $this->challenged->drawFight();
                    $this->challenging->drawFight();
                    break;
                case 1: 
                    echo '<p>'. $this->challenged->getName() .' venceu</p>'; break;
                    $this->challenged->winFight();
                    echo '<p>'. $this->challenging->getName() .' perdeu</p>'; break;
                    $this->getChallenging()->loseFight();
                case 2:
                    echo '<p>'. $this->challenging->getName .' venceu</p>';
                    $this->challenging->winFight();
                    echo '<p>'. $this->challenged->getName .' perdeu</p>';
                    $this->challenged->loseFight();
                    break;
            }
        } else echo '<p>Luta não pode acontecer !</p>';
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