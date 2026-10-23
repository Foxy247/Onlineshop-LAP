<?php

$shopname = "Foxy's Brilliant Emporium";
$greeting = "Welcome to my Brilliant Emporium";
$isShopOpen = false;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
</head>

<body>

    <?php

        if ($isShopOpen) {
            echo "<h1>" . $shopname . "</h1>";
            "<p>" . $greeting . "</p>";
        } else {
            echo "The shop is currently undergoing maintenance.";
        };

    ?>
    



</body>

</html>