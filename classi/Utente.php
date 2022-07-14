<?php

class Utente {
    public $nome;
    public $cognome;
    public $email;
    public $indirizzo;
    public $cartaDiCredito = [];
    public $sconto = 0; // sconto base
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

    //setto i valori che mi aspetto per la carta di credito
    public function setCartaDiCredito($nomeCarta, $numeroCarta, $scadenzaCarta)
    {
        $this->cartaDiCredito = [
            'nomeCarta' => $nomeCarta,
            'numeroCarta' => $numeroCarta,
            'scadenzaCarta' => $scadenzaCarta,
        ];

        $dataAttuale = date('d-m-Y');
        $dataConfronto = strtotime($dataAttuale);
        $dataCarta = strtotime($scadenzaCarta);

        if ($dataCarta > $dataConfronto) {
            return $this;
        } else {
            return;
        }
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