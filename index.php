<?php

class Person {
    public $firstName;
    public $lastName;

    function sayHello($name){
        echo "Hello $name, my name is $this->firstName $this->lastName <br>";
    }

    function sayGoodBye($name){
        echo "Good bye $name, from $this->firstName $this->lastName <br>";
    }
}

// Membuat object
$eko = new Person();
$eko->firstName = "Eko";
$eko->lastName = "Eko";

$joko = new Person();
$joko->firstName = "Joko";
$joko->lastName = "Nugroho";

$budi = new Person();
$budi->firstName = "Budi";
$budi->lastName = "Nugraha";

// Memanggil method
$eko->sayHello("Joko");
$joko->sayGoodBye("Eko");
$budi->sayHello("Joko");


class Car {
    public $name;
    public $brand;

    function startEngine(){
        echo "$this->name ($this->brand) Engine Started <br>";
    }

    function stopEngine(){
        echo "$this->name ($this->brand) Engine Stopped <br>";
    }
}

// Membuat object
$avanza = new Car();
$avanza->name = "Avanza";
$avanza->brand = "Toyota";

$almaz = new Car();
$almaz->name = "Almaz";
$almaz->brand = "Wuling";

$mobilio = new Car();
$mobilio->name = "Mobilio";
$mobilio->brand = "Honda";

// Memanggil method
$avanza->startEngine();
$almaz->startEngine();
$mobilio->stopEngine();

?>