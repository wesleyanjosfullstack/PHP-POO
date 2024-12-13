<?php

require_once './Class/Animal';

class Mammal extends Animal {

    protected $skinColor;

    public function makeSound() {
        echo '<p>Som de mamífero</p>';
    }

}

?>