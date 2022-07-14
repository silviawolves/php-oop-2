<?php

require_once 'classi/Utente.php';
require_once 'classi/Prodotto.php';

class Cliente extends Utente {
    public $sconto; // sconto da applicare se registrato

    public function getSconto()
    {
        return $this->sconto;
    }

    //method che mi calcola lo sconto in base all'iscrizione true/false ed il prezzo del prodotto
    public function setSconto($iscrizione, $totale)
    {
        if ($iscrizione === true) {
            $this->sconto = 20;
            return $this->sconto = $totale - $totale / 100 * 20;
        }
    }
}