<?php
class Car{

    const WHEELS = 4;
    const DOORS = 5;
    const DRIVER = 16;
    public $MaxSpeed;
    public $Fuel;
    public $Type ;
    private function __construct($Fuel, $MaxSpeed, $Type)
    {
        $this->Fuel = $Fuel;
        $this->MaxSpeed = $MaxSpeed;
        $this->Type = $Type;
    }
    private function FuelConsume($Distance){

        $Fuel =$this->Fuel;
        return $Fuel*$Distance/100;
    }
    static function getMaxConst(){

        return max(self::WHEELS, self::DOORS, self::DRIVER);

    }

}
$car1 = new Car;
$car2 = new Car;

$car1 -> Fuel = 12;
$car1 -> MaxSpeed = 200;
$car1 -> Type = 'minivan';


$car2 -> Fuel = 15;
$car2 -> MaxSpeed = 180;
$car2 -> Type = 'jeep';

$car3 = new Car(10, 300, 'Race');
$car4 = new Car(11, 250, 'Sport');

echo "Fuel Consume is".car2->FuelConsume(1000);
	echo Scar3::getMaxConst;