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
include __DIR__ . '/database.php';
include __DIR__ . '/Exception/exception.php';


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
    <h2 class="text-center p-3 text-uppercase"> Exception senza errore:
        <?php echo multiplication(5) ?>
    </h2>
    <h2 class="text-center p-3 text-uppercase text-danger"> Exception con errore:
        <?php try {
            echo multiplication('ciao');
        } catch (Exception $e) {
            echo 'Eccezione:' . ' ' . $e->getMessage();
        }
        ?>
    </h2>
</div>


<?php
include __DIR__ . './partials/footer.php';
?>