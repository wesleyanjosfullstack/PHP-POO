<?php
echo '<h1>Projeto Controle Remoto</h1>';

require_once './Class/RemoteController.php';

$c = new RemoteController();
$c->on();
$c->plusVolume();
$c->openMenu();

?>