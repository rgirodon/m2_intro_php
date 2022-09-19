<?php
class Menu {
    public $starter;
    public $main;
    public $cheese;
    public $dessert;

    function display() {

        echo $this->starter
                .' *** '.$this->main
                .' *** '.$this->cheese
                .' *** '.$this->dessert;
    }
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo 11</title>
    </head>
    <body>
        <div>
            <?php
                $myMenu1 = new Menu();
                $myMenu1->starter = 'Salade verte';
                $myMenu1->main = 'Steack - Frites';
                $myMenu1->cheese = 'Brie';
                $myMenu1->dessert = 'Mousse au chocolat';

                $myMenu1->display();
            ?>
        </div>
        <div>
            <?php
                $myMenu2 = new Menu();
                $myMenu2->starter = 'Tomates Mozza';
                $myMenu2->main = 'Spaghetti Bolo';
                $myMenu2->cheese = 'Gorgonzola';
                $myMenu2->dessert = 'Tiramisu';

                $myMenu2->display();
            ?>
        </div>
    </body>
</html>