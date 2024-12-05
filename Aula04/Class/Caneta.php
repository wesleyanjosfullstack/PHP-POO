<?php

class Caneta {

    private $model;
    private $point;
    private $tampada;
    private $color;

    public function Caneta($m, $c, $p) //__construct 
    {
        $this->model = $m;
        $this->color = $c;
        $this->point = $p;
        // $this->tampar();
        $this->setTampada(true);
    }

    public function tampar() {
        $this->tampada = true;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($m) {
        $this->model = $m;
    }

    public function getPoint() {
        return $this->point;
    }

    public function setPoint($p) {
        $this->point = $p;
    }

    public function getTampada() {
        return $this->tampada;
    }

    public function setTampada($t) {
        $this->tampada = $t;
    }

}

?>