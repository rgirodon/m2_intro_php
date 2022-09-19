<?php
$age = 21;
$childLimit = 10;
$teenagerLimit = 18;

$childrenMovie = 'La Belle et la Bête';
$teenagerMovie = 'Harry Potter';
$adultMovie = 'Scream';
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo 5</title>
    </head>
    <body>
        <?php
        if ($age <= $childLimit) {
            $message = 'We recommend : '.$childrenMovie;
        }
        else if ($age <= $teenagerLimit) {
            $message = 'We recommend : '.$teenagerMovie;            
        }
        else {
            $message = 'We recommend : '.$adultMovie;
        }
        ?>
        <div>
            <?php echo $message; ?>
        </div>
    </body>
</html>