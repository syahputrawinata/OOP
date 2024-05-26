<?php
class Laptop {
    public $Nomor;
    public $Nama;

    public function __construct($Nomor, $Nama) {
        $this->Nomor = $Nomor;
        $this->Nama = $Nama;
        echo "Laptop $this->Nomor Milik : <b>$this->Nama.<br>";
    }
}


$mylaptop = new Laptop(1, "Anto");
$mylaptop = new Laptop(2, "Andi");
$mylaptop = new Laptop(3, "Dina");
?>