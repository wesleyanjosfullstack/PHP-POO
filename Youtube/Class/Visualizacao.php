<?php

require_once './Class/Videos.php';
require_once './Class/Gafanhoto.php';

class Visualizacao {

    private $espectador;
    private $filme;

    public function __construct($e, $f)
    {
        $this->espectador = $e;
        $this->filme = $f;
    }

    public function getEspectador() {
        return $this->espectador;
    }

    public function setEspectador($e) {
        $this->espectador = $e;
    }
    
    public function getFilme() {
        return $this->filme;
    }

    public function setFilme($f) {
        $this->filme = $f;
    }

}

?>