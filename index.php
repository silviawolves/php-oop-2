<?php

require_once 'classi/Utente.php';
require_once 'classi/Cliente.php';

$utente1 = new Utente('Silvia', 'Canepa', 'silviacanepa@gmail.com');
$utente1->indirizzo = 'Via Roma 11, Torino';
$utente1->setCartaDiCredito('Visa', 564737283940717, '24/04/2023');

var_dump($utente1);







## Provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
## L’e-commerce vende prodotti per gli animali.
## I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
## L’utente potrà sia comprare i prodotti senza registrarsi,
## oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
## Il pagamento avviene con la carta di credito, che non deve essere scaduta.