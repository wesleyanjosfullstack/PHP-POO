<?php

require_once './Class/Mammal.php';

class Wolf extends Mammal {

    public function makeSound()
    {
        echo '<p>Auuuuu !</p>';
    }
}

?>