<?php

require_once './Class/Animal.php';

class Reptile extends Animal {

    private $scaleColor;

    public function move() {
        echo '<p>Comendo vegetais</p>';
    }

    public function feed() {
        echo '<p>Som de Réptil</p>';
    }

    public function makeSound() {
        echo '<p>Rastejando</p>';
    }

    public function getScaleColor() {
        return $this->scaleColor;
    }

    public function setScaleColor($c) {
        $this->scaleColor = $c;
    }

}

?>