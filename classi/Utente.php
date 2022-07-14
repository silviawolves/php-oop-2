<?php

class Utente {
    public $nome;
    public $cognome;
    public $email;
    public $indirizzo;
    public $cartaDiCredito = [];
    public bool $iscrizione; // booleano

    function __construct($_nome, $_cognome, $_email)
    {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->email = $_email;
    }

    public function getCartaDiCredito()
    {
        return $this->cartaDiCredito;
    }

    public function setCartaDiCredito($nomeCarta, $numeroCarta, $scadenzaCarta)
    {
        $this->cartaDiCredito = [
            'nomeCarta' => $nomeCarta,
            'numeroCarta' => $numeroCarta,
            'scadenzaCarta' => $scadenzaCarta
        ];

        return $this;
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