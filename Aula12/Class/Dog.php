<?php

require_once './Class/Mammal.php';

class Dog extends Mammal {

    public function makeSound()
    {
        echo '<p>Au! Au! Au!</p>';
    }
    
}

?>