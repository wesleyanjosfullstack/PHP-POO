<?php

require_once './Class/Wolf.php';

class Dog extends Wolf {

    public function makeSound()
    {
        echo '<p>Au Au Au !</p>';
    }

    public function reactText($text) {
        if ($text == 'Toma comida' || $text == 'Olá') echo '<p>Abanar e latir !</p>';
        else echo '<p>Rosnar !</p>';
    }

    public function reactHour($hour) {
        if ($hour < 12) echo '<p>Abanar !</p>';
        else if ($hour >= 18) echo '<p>Ignorar !</p>';
        else echo '<p>Abanar e latir !</p>';
    }

    public function reactUser($user) {
        if ($user) echo '<p>Abanar !</p>';
        else echo '<p>Rosnar e latir !</p>';
    }

    public function reactAgeWeight($age, $weight) {
        if ($age < 5) {
            if ($weight < 10) echo '<p>Abanar !</p>';
            else echo '<p>Latir !</p>';
        } else {
            if ($weight < 10) echo '<p>Rosnar !</p>';
            else echo '<p>Ignorar !</p>';
        }
    }

}

?>