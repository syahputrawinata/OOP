<?php
class Kendaraan {
    public $merk;
    public $model;
    public $jenis;
    public $harga;

    // Metode untuk mengatur merk kendaraan
    public function setMerk($merk) {
        $this->merk = $merk;
    }

    // Metode untuk mengatur model kendaraan
    public function setModel($model) {
        $this->model = $model;
    }

    // Metode untuk mengatur jenis kendaraan
    public function setJenis($jenis) {
        $this->jenis = $jenis;
    }

    public function setharga($harga) {
        $this->harga = $harga;
    }

    // Metode untuk mencetak atribut kendaraan
    public function getCetak() {
        echo "Merk: " . $this->merk . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Jenis: " . $this->jenis . "<br>";
        echo "Harga: " . $this->harga . "<br>";
        echo "============================<br>";
    }
}

// Menciptakan objek mobil dan mengatur atribut kendaraan
$mobil = new Kendaraan();
$mobil->setMerk("Toyota");
$mobil->setModel("Camry");
$mobil->setJenis("Sedan");
$mobil->setharga("7 milyar");
$mobil->getCetak(); // Mencetak atribut kendaraan mobil

// Menciptakan objek sepeda dan mengatur atribut kendaraan
$sepeda = new Kendaraan();
$sepeda->setMerk("Giant");
$sepeda->setModel("Escape 3");
$sepeda->setJenis("Sepeda");
$sepeda->getCetak(); // Mencetak atribut kendaraan sepeda

// Menciptakan objek motor dan mengatur atribut kendaraan
$motor = new Kendaraan();
$motor->setMerk("Honda");
$motor->setModel("Beat");
$motor->setJenis("Motor");
$motor->getCetak(); // Mencetak atribut kendaraan motor
?>