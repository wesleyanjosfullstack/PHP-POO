<?php

require_once './Class/Mammal.php';

class Kangaroo extends Mammal {
    
    public function move() {
        echo '<p>Saltando !</p>';
    }

}

?>