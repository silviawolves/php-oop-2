<?php

trait Validazioni {

    public function validaNumeroCarta($numero)
    {
        if (!is_int($numero)) {
            throw new Exception('Il valore inserito non è un numero');
        }
    }
}