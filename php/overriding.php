<?php
class Vehilcles{
    public $n;
    function __construct($name)
    {
        $this->name=$n;
        // echo "This is ".$this->name;
    }
    public function wheels(){
        echo "There are wheels";
    }
}

class car extends Vehilcles{
    public function wheels(){
        echo "There are 4 wheels in a car";
    }
}

// $my_car = new car();
// echo $my_car->wheels();
$o= new car("Polo GT");
?>