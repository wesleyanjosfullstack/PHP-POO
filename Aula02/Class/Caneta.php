<?php

class Caneta {

    // Atributos
    public $modelo;
    public $cor;
    public $ponta;
    public $carga;
    public $tampada;

    // Métodos
    public function rabiscar(){
        if ($this->tampada == true) echo '<p>Erro ! Não posso rabiscando !</p>';
        else echo '<p>Estou rabiscando...</p>';
    }
    
    public function tampar() {
        $this->tampada = true;
    }

    public function destampar() {
        $this->tampada = false;
    }

}