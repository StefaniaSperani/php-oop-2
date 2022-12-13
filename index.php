<!-- 
Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

L'e-commerce vende prodotti per animali.

I prodotti sono categorizzati, le categorie sono Cani o Gatti.

I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

Stampiamo delle card contenenti i dettagli dei prodotti, 
come immagine, titolo, prezzo, icona della categoria ed 
il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).


BONUS (Opzionale):
Il cliente potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store, 
oppure può iscriversi e creare un account per ricevere cosi il 20% di sconto.
Il cliente effettua il pagamento dei prodotti nel carrello con la carta di credito, che non deve essere scaduta. 
-->

<?php
include_once __DIR__ . '/Models/Product.php';

$crocchette = new Product('Royal Canin Urinary S/O 1.5kg', 28, ['Riso', 'glutine di grano', 'proteine di pollame disidratate', 'farina di mais', 'grassi animali', 'idrolizzato di proteine animali', 'glutine di mais', 'sali minerali', 'fibre vegetali', 'olio di pesce', 'olio di soia', 'frutto-oligosaccaridi', 'estratto di fiore di tagete']);
var_dump($crocchette);

?>