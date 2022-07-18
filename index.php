<?php

require_once 'classi/Utente.php';
require_once 'classi/Cliente.php';
require_once 'classi/Prodotto.php';
require_once 'classi/Carrello.php';

//cibo
$prodotto1 = new Prodotto();
$prodotto1->nome = 'Royal Canin';
$prodotto1->prezzo = 25;
$prodotto1->tipo = 'Crocchette';
$prodotto1->composizione = 'Manzo e Riso';
$prodotto1->specieAnimale = 'Cane';
var_dump($prodotto1);

//gioco
$prodotto2 = new Prodotto();
$prodotto2->nome = 'Furry Ball';
$prodotto2->prezzo = 14;
$prodotto2->forma = 'rotondo';
$prodotto2->faRumore = true;
var_dump($prodotto2);

//carrello
$carrello1 = new Carrello();
$carrello1->prodotti = [$prodotto1, $prodotto2];
$carrello1->setTotale([$prodotto1->prezzo, $prodotto2->prezzo]);
$carrello1->getTotale();
var_dump($carrello1);

//utente non iscritto
$utente1 = new Utente('Silvia', 'Canepa', 'silviacanepa@gmail.com');
$utente1->indirizzo = 'Via Roma 11, Torino';
$utente1->carta = new CartaDiCredito('Visa', 564737283940717, '04/22');
$utente1->carta->checkScadenza('04/22');
$utente1->setIscrizione($utente1->iscrizione = false);
var_dump($utente1);

//cliente iscritto
$cliente1 = new Cliente('Adria', 'Arjona', 'adriaarjona@gmail.com');
$cliente1->indirizzo = 'Via Havana 133, Cuba';
$cliente1->carta = new CartaDiCredito('American Express', 54372727163484930, '07/24');
$cliente1->carta->checkScadenza('07/24');
$cliente1->setIscrizione($cliente1->iscrizione = true);
$cliente1->setSconto(true, $carrello1->getTotale());
$cliente1->getSconto();
var_dump($cliente1);

## Provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
## L’e-commerce vende prodotti per gli animali.
## I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
## L’utente potrà sia comprare i prodotti senza registrarsi,
## oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
## Il pagamento avviene con la carta di credito, che non deve essere scaduta.