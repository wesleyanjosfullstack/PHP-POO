<?php

require_once './Class/Wolf.php';

class Dog extends Wolf {

    public function makeSound()
    {
        echo '<p>Au Au Au !</p>';
    }

}

?>