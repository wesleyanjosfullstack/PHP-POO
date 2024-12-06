<?php

class Fighter {

    private $name;
    private $nationality;
    private $age;
    private $height;
    private $weight;
    private $category;
    private $victories;
    private $defeats;
    private $draws;

    public function toPresent() {
        echo '<p>----------------------------</p>';
        echo '<p>Chegou a hora ! O lutador '. $this->getName();
        echo ' veio diretamente de '. $this->getNationality();
        echo ' tem '. $this->getAge() .' anos e pesa '. $this->getWeight() .'Kg.';
        echo '<br>Ele tem '. $this->getVictories() .' vitórias, '. $this->getDefeats() .' derrotas e '. $this->getDraws() . ' empates.</p>';
    }

    public function status() {
        echo '<p>----------------------------</p>';
        echo '<p>'. $this->getName() .' é pesa '. $this->getCategory();
        echo ' e já ganhou '. $this->getVictories() .' vezes, perdeu '. $this->getDefeats() .' vezes e empatou '. $this->getDraws();
    }

    public function winFight() {
        $this->setVictories($this->getVictories() + 1);
    }

    public function loseFight() {
        $this->setDefeats($this->getDefeats() + 1);
    }

    public function drawFight() {
        $this->setDraws($this->getDraws() + 1);
    }

    public function __construct($name, $nationality, $age, $height, $weight, $category, $victories, $defeats, $draws)
    {
        $this->name = $name;
        $this->nationality = $nationality;
        $this->age = $age;
        $this->height = $height;
        $this->weight = $weight;
        $this->category = $category;
        $this->victories = $victories;
        $this->defeats = $defeats;
        $this->draws = $draws;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getNationality() {
        return $this->nationality;
    }

    public function setNationality($nationality) {
        $this->nationality = $nationality;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
        $this->setCategory();
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory() {
        if ($this->weight < 52.2) $this->category = 'Inválido !';
        else if ($this->weight <= 70.3) $this->category = 'Leve !';
        else if ($this->weight <= 83.9) $this->category = 'Médio !';
        else if ($this->weight <= 120.2) $this->category = 'Pesado !';
        else $this->category = 'Inválido !';
    }

    public function getVictories() {
        return $this->victories;
    }

    public function setVictories($victories) {
        $this->victories = $victories;
    }

    public function getDefeats() {
        return $this->defeats;
    }

    public function setDefeats($defeats) {
        $this->defeats = $defeats;
    }
    
    public function getDraws() {
        return $this->draws;
    }

    public function setDraws($draws) {
        $this->draws = $draws;
    }

}

?>