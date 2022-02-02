<!-- 
    Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; 
    ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
    Strutturare le classi gestendo l'ereditarietà dove necessario; 
    ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
    Provate a stampare in pagina come visto questa mattina i prodotti scelti dall'utente.
-->

<?php
require_once __DIR__ . '/PS5.php';
require_once __DIR__ . '/XboxSerieX.php';
require_once __DIR__ . '/User.php';

$nintendoSW = new NintendoSW('Nintendo', '500gb', 'gioco in omaggio');

try{
    $PS5 = new PS5('Sony', '1tb', 'Disponibile');
} catch(Exception $e){
    echo 'Errore stiamo gestendo la pagina';
    die();
}

$matteo = new User('Matteo', 'Turchi', 'turchi@gmail.com');
$matteo->addProduct($PS5);
$matteo->addProduct($XboxSerieX);
$matteo_cart = $matteo->getCart();

var_dump($matteo_cart);
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>
<body>
    <h1>Ciao <?php echo $matteo->getFullName() ?>! Questo è il tuo carrello ! Aggiungi dei prodotti che vuoi acquistare.</h1>

    <?php foreach($matteo_cart as $element) { ?>
        <div>
            <h2>Marca: <?php echo $element->marca ?> </h2>
            <h2>Modello: <?php echo $element->modello ?> </h2>
            <h3>Memoria: <?php echo $element->memoria ?> €</h3>
            <h4>Prezzo: <?php echo $element->prezzo ?></h4>
        </div>
    <?php } ?>

</body>
</html>