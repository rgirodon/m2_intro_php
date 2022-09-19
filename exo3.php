<?php
$f = "Rémy";
$g = 'Girodon';
$h = ["Gaston", "Lagaffe"];
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo 3</title>
    </head>
    <body>
        <div>
            Nom complet 1 = <?php echo $f.' '.$g; ?>
        </div>
        <div>
            Nom complet 2 = <?php echo $h[0].' '.$h[1]; ?>
        </div>
    </body>
</html>