<?php
// Definisikan kelas Animal sebagai kelas abstrak
abstract class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    // Metode abstrak yang harus diimplementasikan oleh subkelas
    abstract public function makeSound();

    // Metode untuk mendapatkan nama
    public function getName() {
        return $this->name;
    }
}

// Definisikan kelas Dog yang mewarisi dari Animal
class Dog extends Animal {
    public function makeSound() {
        return "woof!";
    }
}

// Definisikan kelas Cat yang mewarisi dari Animal
class Cat extends Animal {
    public function makeSound() {
        return "meow!";
    }
}

// Definisikan kelas Printer
class Printer {
    public function print(Animal $animal) {
        echo $animal->getName() . " says " . $animal->makeSound() . "<br>";
    }
}

// Buat instansi dari Dog dan Cat
$dog = new Dog("Buddy");
$cat = new Cat("Kitty");

// Buat instansi dari Printer dan cetak suara
$printer = new Printer();
$printer->print($dog); // output: Buddy says woof!
$printer->print($cat); // output: Kitty says meow!
?>

   
