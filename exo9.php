<?php
$myArray = [112, 45, 24, 89, 74, 11, 16];

function minimum($arg) {

    $min = $arg[0];

    foreach ($arg as $current) {

        if ($current < $min) {
        
            $min = $current;
        }
    }

    return $min;
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo 9</title>
    </head>
    <body>
        <div>
            <?php echo 'Min : '.minimum($myArray); ?>
        </div>
    </body>
</html>