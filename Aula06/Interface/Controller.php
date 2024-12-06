<?php

interface Controller {
    
    public function on();
    public function off();
    public function openMenu();
    public function closeMenu();
    public function plusVolume();
    public function minusVolume();
    public function onMute();
    public function offMute();
    public function play();
    public function pause();

}

?>