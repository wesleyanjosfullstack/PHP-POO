<?php

require_once './Class/People.php';
require_once './Interface/Publication.php';

class Book implements Publication {

    private $title;
    private $author;
    private $totPag;
    private $pag;
    private $open;
    private $people;

    public function datails() {

    }

    public function __construct($title, $author, $totPag, $people)
    {
        $this->title = $title;
        $this->author = $author;
        $this->totPag = $totPag;
        $this->people = $people;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($t) {
        $this->title = $t;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($a) {
        $this->author = $a;
    }

    public function getTotPag() {
        return $this->totPag;
    }

    public function setTotPag($tp) {
        $this->totPag = $tp;
    }

    public function getPag() {
        return $this->pag;
    }

    public function setPag($p) {
        $this->pag = $p;
    }

    public function getOpen() {
        return $this->open;
    }

    public function setOpen($o) {
        $this->open = $o;
    }

    public function getPeople() {
        return $this->people;
    }

    public function setPeople($p) {
        $this->people = $p;
    }

    public function open() {
        $this->open = true;
    }

    public function close() {
        $this->open = false;
    }

    public function browse($p) {
        if ($p > $this->totPag) $this->totPag = 0;
        else $this->pag = $p;
    }

    public function nextPag() {
        $this->pag++;
    }

    public function prevPag() {
        $this->pag--;
    }

}

?>