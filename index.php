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
include __DIR__ . '/Models/Product.php';
include __DIR__ . '/Models/Category.php';

$crocchette = new Product('Royal Canin Urinary S/O 1.5kg', 28, './images/gatto.jpg', 'pollo', new Category('gatto'));
//var_dump($crocchette);
$ossogiocattolo = new Product('Kong', 10, './images/cane.jpg', 'gioco per cani', new Category('cane'));
//var_dump($ossogiocattolo);
?>

<?php
include __DIR__ . './partials/header.php';
?>

<div class="container">
    <h1 class="text-center p-3 text-uppercase">Pets Shop</h1>
    <div class="row">
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="./images/gatto.jpg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $crocchette->name ?>
                    </h5>
                    <p class="card-text">
                        <?php echo $crocchette->description ?>
                    </p>
                    <p class="card-text">
                        <?php echo $crocchette->price ?> €
                    </p>
                    <!-- <p class="card-text">
                        <?php //echo Category::$category; ?>
                    </p> -->
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>

        <!-- <?php //} ?> -->
    </div>
</div>


<?php
include __DIR__ . './partials/footer.php';
?>