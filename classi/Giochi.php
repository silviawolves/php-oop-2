<?php

require_once 'classi/Prodotto.php';

class Giochi extends Prodotto {
    public $forma; // rotondo, filiforme, cilindrico
    public bool $faRumore; // booleano, true o false (sì o no)
}