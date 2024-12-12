<?php

require_once './Class/Animal.php';

class Fish {

    private $scaleColor;
    
    public function move() {
        echo '<p>Nadando !</p>';
    }

    public function feed() {
        echo '<p>Comendo substâncias !</p>';
    }

    public function makeSound() {
        echo '<p>Comendo vegetais !</p>';
    }

    public function bubble() {
        echo '<p>Soltou uma bolha !</p>';
    }

    public function getScaleColor() {
        return $this->scaleColor;
    }

    public function setScaleColor($c) {
        $this->scaleColor = $c;
    }

}

?>