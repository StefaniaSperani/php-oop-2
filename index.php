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
include __DIR__ . '/Models/Food.php';
include __DIR__ . '/Models/Toy.php';
include __DIR__ . '/Models/Category.php';



$crocchette = new Food('Royal Canin Urinary S/O 1.5kg', 28, './images/gatto.jpg', 'Crocchette per gatto con problemi urinari', 'Pollo', '01/01/2024', new Category('Gatto'));
$crocchette->setSeller('Italia');
//var_dump($crocchette);

$umido = new Food('Royal Canin Urinary S/O 85gr', 1.30, './images/umidogatto.jpg', 'Umido per gatti con problemi urinari', 'Pollo con salsa', '01/01/2024', new Category('Gatto'));
$umido->setSeller('Italia');

$ossogiocattolo = new Toy('Kong Osso giocattolo con inserimento snacks', 10, './images/cane.jpg', 'Gioco per cani con due fori ai lati per permettere l\'inserimento degli snacks per la pulizia dei denti', new Category('Cane'));
$ossogiocattolo->setSeller('Italia');

$cuccia = new Product('Cuccia morbida', 20, './images/lettocane.jpg', 'Letto per cani in morbida finta pelliccia rivestito esternamente con resistente tessuto, decorato con motivo a zampetta, lavabile in lavatrice, adatto a ogni arredamento.', new Category('Cane'));
$cuccia->setSeller('Italia');

$products = [];
array_push($products, $crocchette, $umido, $ossogiocattolo, $cuccia);
?>

<?php
include __DIR__ . './partials/header.php';
?>

<div class="container">
    <h1 class="text-center p-3 text-uppercase">Pets Shop</h1>
    <div class="row">
        <?php foreach ($products as $item) { ?>
        <div class="col-3">
            <div class="card h-100">
                <img src="<?php echo $item->image ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $item->name ?>
                    </h5>
                    <p class="card-text">
                        <?php echo $item->description ?>
                    </p>
                    <p class="card-text">
                        Prezzo:
                        <?php echo $item->price ?> €
                    </p>
                    <p class="card-text">
                        Tipo:
                        <?php echo get_class($item) ?>
                    </p>
                    <p class="card-text">
                        Categoria:
                        <?php echo $item->category->name; ?>
                    </p>
                    <p class="card-text">
                        Venduto e spedito da:
                        <?php echo $item->getSeller(); ?>
                    </p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>


<?php
include __DIR__ . './partials/footer.php';
?>