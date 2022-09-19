<?php
$myArray = [12, 45, 89, 74, 64];
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo 7,5</title>
    </head>
    <body>
        <?php
            $max = $myArray[0];

            foreach ($myArray as $current) {

                if ($current > $max) {
                
                    $max = $current;
                }
            }
        ?>
        <div>
            <?php echo 'Max : '.$max; ?>
        </div>
    </body>
</html>