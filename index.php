<?php
/**
 * Created by PhpStorm.
 * User: Fabi
 * Date: 17.09.2019
 * Time: 12:14
 */
?>
<html>
<head>
    <title>Megahamster | Ihr Hamsterversorger</title>
    <style type="text/css">
        #list-products {
            color:white;
            background: grey;
        }
    </style>
</head>
<body>
    <header id="welcome">

    </header>
    <section id="list-products">
        <?php
            include('classes/room.php');

            $array_products = [new room('The room','EUR 49,-'),new room('The Flat','EUR 89,-'),new room('The Pit','EUR 100,-')];
            foreach ($array_products as $product) {
                echo $product -> toHTML();
            }
        ?>
    </section>
    <footer id="contact">
        <p><small>0680 111 123 56</small></p>
    </footer>
</body>
</html>
