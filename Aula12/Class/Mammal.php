<?php

require_once './Class/Animal.php';

class Mammal extends Animal {

    private $skinColor;

    public function move() {}
    public function feel() {}
    public function makeSound() {}

    public function getSkinColor() {
        return $this->skinColor;
    }

    public function setSkinColor($c) {
        $this->skinColor = $c;
    }

}

?>