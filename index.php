<?php

$shopname = "Foxy's Brilliant Emporium";
$greeting = "Welcome to my Brilliant Emporium";

$isShopOpen = true;

class Product 
{
    public string $name;
    public string $description;
    public int $priceInCents;
}


$product = new Product();
$product->name = "Fox-Apple";
$product->description = "An apple a day keeps the fox away";
$product->priceInCents = 299;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
</head>

<body>

    <?php if ($isShopOpen): ?> 
        <h1><?= $shopname ?></h1>
        <p><?= $greeting ?></p>
        <h2><?= $productName ?></h2> 
        <p><?= $productDescription ?></p>
        <p><?= $productPriceInCents ?> Cent</p>
    <?php else: ?>
        <h1>The shop is undergoing maintenance.</h1>
    <?php endif; ?>

</body>

</html>