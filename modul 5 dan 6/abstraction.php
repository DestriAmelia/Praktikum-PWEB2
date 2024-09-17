<?php
// Abastraction adalah proses menyembunyikan detail implementasi internal dan hanya menampilkan fungsionalitas utama kepada pengguna.

// membuat abstrak kelas shape
abstract class Shape {
abstract public function area();
}

// membuat class rectangle yang extends ke class shape.
class Rectangle extends Shape {
private $width;
private $height;

//constructor
public function __construct($width, $height) {
$this->width = $width;
$this->height = $height;
}

// membuat metode area
public function area() {
return $this->width * $this->height;
}
}

//membuat class circle yang extends ke class shape
class Circle extends Shape {
private $radius;

//constructor
public function __construct($radius) {
$this->radius = $radius;
}

//metode area
public function area() {
return pi() * pow($this->radius, 2);
}
}

//instasiasi abstraction
$rectangle = new Rectangle("5", "10");
echo "Area of Rectangle: " . $rectangle->area() . "<br>"; // Output: Area of Rectangle: 50

$circle = new Circle("7");
echo "Area of Circle: " . $circle->area(); // Output: Area of Circle: 153.9380400259

?>