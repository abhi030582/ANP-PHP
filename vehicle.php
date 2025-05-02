<?php
class Vehicle {
    public $brand;
    public function __construct($brand) {
        $this->brand = $brand;
    }
    public function start() {
        return "The vehicle is starting.";
    }
}
class Car extends Vehicle {
    public $model;

    public function __construct($brand, $model) {
        parent::__construct($brand); 
        $this->model = $model;
    }

    public function drive() {
        return "Driving the $this->model car.";
    }
}

class ElectricCar extends Car {
    public $batteryLife;

    public function __construct($brand, $model, $batteryLife) {
        parent::__construct($brand, $model); 
        $this->batteryLife = $batteryLife;
    }
    public function charge() {
        return "Charging the $this->model electric car.";
    }

    public function __toString() {
        echo "Brand: $this->brand <br>";
        echo "Model: $this->model <br>";
        echo "Battery Life: $this->batteryLife hours <br>";
    }
}
$myElectricCar = new ElectricCar("Tesla", "Model S", 12);
echo $myElectricCar;
echo $myElectricCar->charge();
?>
