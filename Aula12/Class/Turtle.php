<?php

require_once './Class/Reptile.php';

class Turtle extends Reptile {
    
    public function move() {
        echo '<p>Andando bem devagar !</p>';
    }

}

?>