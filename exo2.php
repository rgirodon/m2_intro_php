<?php
$d = 58;
$e = 42;
$temp = $e;
$e = $d;
$d = $temp;
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo 2</title>
    </head>
    <body>
        <div>
            d = <?php echo $d; ?>
        </div>
        <div>
            e = <?php echo $e; ?>
        </div>
    </body>
</html>