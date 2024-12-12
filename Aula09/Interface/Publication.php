<?php

interface Publication {

    public function open();
    public function close();
    public function browse($p);
    public function nextPag();
    public function prevPag();

}

?>