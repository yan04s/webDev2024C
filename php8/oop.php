<?php
class car{//parent class
    public $model="";
    public function setModel($newVal){
        $this->model = $newVal;
    };
    public function getModel(){
        return "The model is ".$this->model."<br>";
    };
};

class compact extends car{//child class
    private $seat=0;
    public function setSeat($newVal){
        $this->seat = $newVal;
    };
    public function getSeat(){
        return "Number of seats is ".$this->seat."<br>";
    };
};

class mpv extends car{//child class
    private $minSeat=0;
    private $maxSeat=0;
    public function setMinSeat($min,$max){
        $this->minSeat = $min;
        $this->maxSeat = $max;
    };
    public function getSeat(){
        return "Number of seats is between ".$this->minSeat." and ".$this->maxSeat."<br>";
    };
};

$car1 = new compact;
$car1->setModel("Toyota");
echo $car1->getModel();
$car1->setSeat(5);
echo $car1->getSeat();

$car2 = new mpv;
$car2->setModel("Honda");
echo $car2->getModel();
$car2->setSeat(5,7);
echo $car2->getSeat();
?>