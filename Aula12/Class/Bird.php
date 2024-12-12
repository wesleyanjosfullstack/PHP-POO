<?php

require_once './Class/Animal.php';

class Bird {

    private $featherColor;

    public function move() {
        echo '<p>Voando !</p>';
    }
    
    public function feed() {
        echo '<p>Comendo frutas !</p>';
    }

    public function makeSound() {
        echo '<p>Som de ave !</p>';
    }

    public function makeNest() {
        echo '<p>Construindo ninho !</p>';
    }

    public function getFeatherColor() {
        return $this->featherColor;
    }

    public function setFeatherColor($c) {
        $this->featherColor = $c;
    }

}

?>