<?php

require_once 'classi/Utente.php';
require_once 'classi/Prodotto.php';

class Cliente extends Utente {
    public $sconto = 0; // sconto da applicare se registrato

    public function getSconto()
    {
        return $this->sconto;
    }

    public function setSconto($iscrizione, $prezzo)
    {
        if ($iscrizione === true) {
            $this->sconto = 20;
            return $this->sconto = $prezzo - $prezzo / 100 * 20;
        }
    }
}