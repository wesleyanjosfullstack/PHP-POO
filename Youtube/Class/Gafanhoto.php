<?php

require_once './Class/Pessoa.php';

class Gafanhoto extends Pessoa {

    private $login;
    private $totAssistido;

    public function __construct($nome, $idade, $sexo, $login)
    {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($l) {
        $this->login = $l;
    }

    public function getTotAssistido() {
        return $this->totAssistido;
    }

    public function setTotAssistido($t) {
        $this->totAssistido = $t;
    }

    public function assistirMaisUm() {
        $this->totAssistido++;
    }

}

?>