<?php
class Car {
    public $brand;
    public $color;

    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function displayInfo() {
        return "<div class='car-info'>This car is a <strong>$this->color</strong> <strong>$this->brand</strong>.</div>";
    }
}

$myCar = new Car("Toyota", "Red");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Car Info</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 40px;
        }

        .car-info {
            background-color: white;
            border-left: 5px solid red;
            padding: 20px;
            margin: 20px 0;
            font-size: 18px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        strong {
            color:red;
        }
    </style>
</head>
<body>

    <h1>Car Details</h1>
    <?php echo $myCar->displayInfo(); ?>

</body>
</html>
