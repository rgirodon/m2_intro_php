<?php
$myArray1 = [112, 45, 89, 74];

$myArray2 = [11, 44];

function fct_sum($arg) {

    $sum = 0;

    foreach ($arg as $current) {

        $sum = $sum + $current;
    }

    return $sum;
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo 8</title>
    </head>
    <body>
        <div>
            <?php echo 'Sum1 : '.fct_sum($myArray1); ?>
        </div>
        <div>
            <?php echo 'Sum2 : '.fct_sum($myArray2); ?>
        </div>
    </body>
</html>