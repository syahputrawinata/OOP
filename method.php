<?php
class Car {
    public $brand;
    public $model;
    public $color;
    public $isRunning = false;

    // Constructor untuk inisialisasi mobil dengan merek, model, dan warna tertentu
    public function __construct($brand, $model, $color) {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        echo "<br> ======================================= <br>";
    }

    // Method untuk menghidupkan mesin mobil
    public function start() {
        $this->isRunning = true;
        echo "$this->brand $this->model dengan warna $this->color telah dinyalakan.<br>";
    }

    // Method untuk mematikan mesin mobil
    public function stop() {
        $this->isRunning = false;
        echo "$this->brand $this->model dengan warna $this->color telah dimatikan.<br>";
    }

    // Method untuk menampilkan status mobil
    public function displayStatus() {
        $status = $this->isRunning ? "sedang menyala" : "mati";
        echo "$this->brand $this->model dengan warna $this->color $status.<br>";
    }
}

// Membuat objek mobil
$myCar = new Car("Toyota", "Corolla", "Hitam");

// Memanggil method start untuk menghidupkan mobil
$myCar->start();

// Memanggil method displayStatus untuk menampilkan status mobil
$myCar->displayStatus();

// Memanggil method stop untuk mematikan mobil
$myCar->stop();

// Memanggil method displayStatus untuk menampilkan status mobil
$myCar->displayStatus();


$myCar = new Car("Lamborghini", "Centenario", "Hitam");
$myCar->start();
$myCar->displayStatus();
?>
