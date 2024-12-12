<?php

require_once './Class/Animal.php';

class Mammal extends Animal {

    private $skinColor;

    public function move() {
        echo '<p>Correndo</p>';
    }
    
    public function feed() {
        echo '<p>Mamando</p>';
    }
    
    public function makeSound() {
        echo '<p>Som de mamífero</p>';
    }

    public function getSkinColor() {
        return $this->skinColor;
    }

    public function setSkinColor($c) {
        $this->skinColor = $c;
    }

}

?>