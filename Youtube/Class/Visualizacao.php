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
        $this->filme->setViews($this->filme->getViews() + 1);
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
    }

    public function avaliar() {
        $this->filme->setAvaliacao(5);
    }

    public function avaliarNota($n) {
        $this->filme->setAvaliacao($n);
    }
    
    public function avaliarPorc($p) {
        $nota = 0;
        if ($p <= 20) $nota = 3;
        else if ($p <= 50) $nota = 5;
        else if ($p <= 90) $nota = 8;
        else $nota = 10;
        $this->filme->setAvaliacao($nota);
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