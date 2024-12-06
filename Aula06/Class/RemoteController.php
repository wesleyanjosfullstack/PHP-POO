<?php

require_once 'Interface/Controller.php';

class RemoteController implements Controller {

    private $volume;
    private $on;
    private $playing;

    public function __construct()
    {
        $this->volume = 50;
        $this->on = false;
        $this->playing = false;
    }

    private function getVolume() {
        return $this->volume;
    }

    private function setVolume($v) {
        $this->volume = $v;
    }
    
    private function getOn() {
        return $this->on;
    }

    private function setOn($on) {
        $this->on = $on;
    }

    private function getPlaying() {
        return $this->playing;
    }

    private function setPlaying($p) {
        $this->playing = $p;
    }

    public function on() {
        $this->setOn(true);
    }

    public function off() {
        $this->setOn(false);
    }

    public function openMenu() {
        echo '<p>--------- MENU ---------</p>';
        echo '<br>Está ligado ?'. ($this->getOn() ? ' Sim' : ' Não');
        echo '<br>Está tocando ? '. ($this->getPlaying() ? 'Sim' : 'Não');
        echo '<br>Volume: ? '. $this->getVolume();

        for ($c = 0; $c <= $this->getVolume(); $c += 10) echo '|';
        echo '<br>';
    }

    public function closeMenu() {
        echo '<br>Fechando Menu...';
    }

    public function plusVolume() {
        if ($this->getOn()) $this->setVolume($this->getVolume() + 5);
        else echo '<p>Erro ! Não posso aumentar o volume</p>';
    }

    public function minusVolume() {
        if ($this->getOn()) $this->setVolume($this->getVolume() - 5);
        else echo '<p>Erro ! Não posso diminuir o volume</p>';
    }

    public function onMute() {
        if ($this->getOn() && $this->getVolume() > 0) $this->setVolume(0);
    }

    public function offMute() {
        if ($this->getOn() && $this->getVolume() == 0) $this->setVolume(50);
    }

    public function play() {
        if ($this->getOn() && !$this->getPlaying()) $this->setPlaying(true);
    }

    public function pause() {
        if ($this->getOn() && $this->getPlaying()) $this->setPlaying(false);
    }

}

?>