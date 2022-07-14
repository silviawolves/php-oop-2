<?php

require_once 'classi/Utente.php';
require_once 'classi/Cliente.php';
require_once 'classi/Prodotto.php';

$prodotto1 = new Prodotto();
$prodotto1->nome = 'Royal Canin';
$prodotto1->prezzo = 25;
$prodotto1->tipo = 'Crocchette';
$prodotto1->composizione = 'Manzo e Riso';
$prodotto1->specieAnimale = 'Cane';
var_dump($prodotto1);

$utente1 = new Utente('Silvia', 'Canepa', 'silviacanepa@gmail.com');
$utente1->indirizzo = 'Via Roma 11, Torino';
$utente1->setCartaDiCredito('Visa', 564737283940717, '24/04/2022');
$utente1->setIscrizione($utente1->iscrizione = false);
var_dump($utente1);

$cliente1 = new Cliente('Adria', 'Arjona', 'adriaarjona@gmail.com');
$cliente1->indirizzo = 'Via Havana 133, Cuba';
$cliente1->setCartaDiCredito('American Express', 54372727163484930, '10/07/2024');
$cliente1->setIscrizione($cliente1->iscrizione = true);
$cliente1->setSconto(true, 25);
$cliente1->getSconto();
var_dump($cliente1);





## Provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
## L’e-commerce vende prodotti per gli animali.
## I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
## L’utente potrà sia comprare i prodotti senza registrarsi,
## oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
## Il pagamento avviene con la carta di credito, che non deve essere scaduta.