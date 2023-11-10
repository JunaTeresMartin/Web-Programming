<?php
    class myCar{
        public $color="Red";
        public $make="Jeep";
        public $model="Renegade";
        public function startEngine(){
            echo "Engine started";
            echo "<br>Wow , this is a ".$this->make;
        }
    }
$car = new myCar();
$car->color = "blue";
echo ($car->color);
echo "I drive a : ".$car->color." ".$car->model."<br>";
$car->startEngine();
?>