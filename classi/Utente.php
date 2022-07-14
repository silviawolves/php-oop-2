<?php

class Utente {
    public $nome;
    public $cognome;
    public $email;
    public $indirizzo;
    public $cartaDiCredito = [];

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

    public function setCartaDiCredito($_cartaDiCredito, $numeroCarta, $scadenzaCarta)
    {
        $this->cartaDiCredito = $_cartaDiCredito;
        $this->cartaDiCredito = [
            'nomeCarta' => $_cartaDiCredito,
            'numeroCarta' => $numeroCarta,
            'scadenzaCarta' => $scadenzaCarta
        ];

        return $this;
    }
}