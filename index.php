<?php
require_once './Models/product.php';
require_once './Models/cibo.php';
require_once './Models/giochi.php';
require_once './Models/cucce.php';
require_once 'db.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h1>Prodotti per Animali, non cosi fantastici</h1>
        <div class="card-container">
            <?php 
                foreach($products as $singleProduct){
            ?>
            <div class="card">
                <div class="top-card">
                    <span><?= $singleProduct->name?></span>
                    <span><i class="fa-solid <?php echo($singleProduct->category == 'Cane' ? 'fa-dog' : 'fa-cat') ?>"></i></span>
                </div>
                <div class="img-container">
                    <img src="<?php echo $singleProduct->imageUrl?>" alt="img">
                </div>
                <p><?= $singleProduct->description?></p>
                <div class="price">
                    Prezzo: <?= $singleProduct->price?> &euro;
                </div>
                <span><?php echo $singleProduct->getLastDescription($singleProduct)?></span>
            </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>