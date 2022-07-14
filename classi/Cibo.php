<?php

require_once 'classi/Prodotto.php';

class Cibo extends Prodotto {
    public $tipo; // crocchette, scatolette, umido, secco
    public $composizione; // manzo, pollo, verdure, riso
    public $specieAnimale; // cane, gatto, coniglio
}