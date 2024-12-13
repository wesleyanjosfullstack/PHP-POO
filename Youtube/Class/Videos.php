<?php

require_once './Class/AcoesVideos.php';
require_once './Class/Videos.php';
require_once './Class/Gafanhoto.php';

class Videos implements AcoesVideos {

    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function __construct($t)
    {
        $this->titulo = $t;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    
    public function getTitulo() {
        return $this->titulo;
    }
    
    public function setTitulo($t) {
        $this->titulo = $t;
    }
    
    public function getAvaliacao() {
        return $this->avaliacao;
    }
    
    public function setAvaliacao($a) {
        $this->avaliacao = $a;
    }
    
    public function getViews() {
        return $this->views;
    }

    public function setViews($v) {
        $this->views = $v;
    }
    
    public function getCurtidas() {
        return $this->curtidas;
    }

    public function setCurtidas($c) {
        $this->curtidas = $c;
    }
    
    public function getReproduzindo() {
        return $this->reproduzindo;
    }
    
    public function setReproduzindo($r) {
        $this->reproduzindo = $r;
    }
    
    public function play() {
        $this->reproduzindo = true;
    }
    
    public function pause(){
        $this->reproduzindo = false;
    }
    
    public function like() {
        $this->curtidas++;
    }

}

?>