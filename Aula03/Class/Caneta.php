<?php

class Caneta {

    // Atributos
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    // Métodos
    public function rabiscar(){
        if ($this->tampada == true) echo '<p>Erro ! Não posso rabiscando !</p>';
        else echo '<p>Estou rabiscando...</p>';
    }
    
    private function tampar() {
        $this->tampada = true;
    }

    private function destampar() {
        $this->tampada = false;
    }

}

?>