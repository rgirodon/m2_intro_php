<?php
$n1 = 12;
$n2 = 27;
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo 4</title>
    </head>
    <body>
        <?php
        if ($n1 < $n2) {
            $message = 'n1 plus petit que n2';
        }
        else if ($n1 > $n2) {
            $message = 'n1 plus grand que n2';            
        }
        else {
            $message = 'n1 et n2 sont égaux';
        }
        ?>
        <div>
            <?php echo $message; ?>
        </div>
    </body>
</html>