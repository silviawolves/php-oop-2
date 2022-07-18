<?php

require_once 'traits/Validazioni.php';

class CartaDiCredito {
    public $nomeCarta;
    public $numeroCarta;
    public $scadenzaCarta;
    use Validazioni;

    function __construct($_nomeCarta, $_numeroCarta, $_scadenzaCarta)
    {
        $this->nomeCarta = $_nomeCarta;
        $this->numeroCarta = $_numeroCarta;
        $this->scadenzaCarta = $_scadenzaCarta;

        $this->validaNumeroCarta($_numeroCarta);
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
    }

    //controllo scadenza
    public function checkScadenza($scadenzaCarta)
    {
        $this->scadenzaCarta = $scadenzaCarta;
        $dataAttuale = new DateTime('now');
        $dataCarta = DateTime::createFromFormat("m/y", $this->scadenzaCarta);

        if ($dataCarta < $dataAttuale) {
            echo 'La carta è scaduta, inserirne una valida';
        }
    }
}