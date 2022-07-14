<?php

require_once 'classi/Utente.php';

class Cliente extends Utente {
    public $iscritto; // booleano perché registrato
    public $sconto; // sconto da applicare perché registrato
}