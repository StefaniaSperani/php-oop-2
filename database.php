<?php

$crocchette = new Food('Royal Canin Urinary S/O 1.5kg', 28, './images/gatto.jpg', 'Crocchette per gatto con problemi urinari', 'Pollo', '01/01/2024', new Category('Gatto'));
$crocchette->setSeller('Italia');
//var_dump($crocchette);

$umido = new Food('Royal Canin Urinary S/O 85gr', 1.30, './images/umidogatto.jpg', 'Umido per gatti con problemi urinari', 'Pollo con salsa', '01/01/2024', new Category('Gatto'));
$umido->setSeller('Italia');

$ossogiocattolo = new Toy('Kong Osso giocattolo con inserimento snacks', 10, './images/cane.jpg', 'Gioco per cani con due fori ai lati per permettere l\'inserimento degli snacks per la pulizia dei denti', new Category('Cane'));
$ossogiocattolo->setSeller('Italia');

$cuccia = new Product('Cuccia morbida', 20, './images/lettocane.jpg', 'Letto per cani in morbida finta pelliccia rivestito esternamente con resistente tessuto, decorato con motivo a zampetta, lavabile in lavatrice, adatto a ogni arredamento.', new Category('Cane'));
$cuccia->setSeller('Italia');

?>