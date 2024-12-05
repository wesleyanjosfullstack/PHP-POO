<?php

class Caneta {

    // Atributos
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    // Métodos
    function rabiscar(){
        if ($this->tampada == true) echo '<p>Erro ! Não posso rabiscando !</p>';
        else echo '<p>Estou rabiscando...</p>';
    }
    
    function tampar() {
        $this->tampada = true;
    }

    function destampar() {
        $this->tampada = false;
    }

}