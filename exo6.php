<?php
$number = 97;
$message = '';
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo 6</title>
    </head>
    <body>
        <?php
            while($number >= 0) {

                $message = $message.' '.$number;

                $number = $number - 1;
            }    
        ?>
        <div>
            <?php echo $message; ?>
        </div>
    </body>
</html>