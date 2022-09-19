<?php
class Car {
    public $brand;
    public $model;
    public $color;

    function display() {

        echo $this->brand.' '.$this->model.' '.$this->color;
    }
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo 10</title>
    </head>
    <body>
        <div>
            <?php
                $myCar = new Car();
                $myCar->brand = 'Ford';
                $myCar->model = 'Fiesta';
                $myCar->color = 'White';

                $myCar->display();
            ?>
        </div>
    </body>
</html>