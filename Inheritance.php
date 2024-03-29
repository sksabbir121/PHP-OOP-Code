<?php

class Shape {
    public function calculateArea() {
        return 0; 
    }
}

class Cir extends Shape {
    private $radius;

   
    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

class Rect extends Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }
}

$cir = new Cir(5);
$rect = new Rect(4, 6);

$cirArea = $cir->calculateArea();
$rectArea = $rect->calculateArea();

echo "Area of the circle: $cirArea \n";

echo "Area of the rectangle: $rectArea";

?>
