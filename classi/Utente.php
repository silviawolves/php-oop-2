<?php

require_once 'classi/CartaDiCredito.php';

class Utente {
    public $nome;
    public $cognome;
    public $email;
    public $indirizzo;
    public $sconto = 0; // sconto base
    public bool $iscrizione; // booleano
    public CartaDiCredito $carta;

    function __construct($_nome, $_cognome, $_email)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->email = $_email;
    }

    public function getIscrizione()
    {
        return $this->iscrizione;
    }

    public function setIscrizione($_iscrizione)
    {
        if ($_iscrizione === true) {
            $this->iscrizione = $_iscrizione;
            return $this;
        }
    }
}