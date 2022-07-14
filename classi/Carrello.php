<?php

class Carrello {
    public $prodotti = [];
    public $totale;

    public function getProdotti()
    {
        return $this->prodotti;
    }

    public function setProdotti($_prodotti)
    {
        $this->prodotti[] = $_prodotti;
        return $this;
    }

    public function getTotale()
    {
        return $this->totale;
    }

    public function setTotale($_prezzi = [])
    {
        $this->totale = array_sum($_prezzi);
        return $this;
    }
}