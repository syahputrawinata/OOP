<?php
class Calculator {
    // Method static untuk menjumlahkan dua angka
    public static function add($a, $b) {
        return $a + $b;
    }

    // Method static untuk mengalikan dua angka
    public static function multiply($a, $b) {
        return $a * $b;
    }
}

// Contoh penggunaan method static
$sum = Calculator::add(5, 3);
echo "Hasil penjumlahan: $sum<br>";

$product = Calculator::multiply(4, 6);
echo "Hasil perkalian: $product";
?>
