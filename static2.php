<?php
class Lingkaran {

// Static method untuk menghitung luas lingkaran
public static function hitungLuas($jariJari) {
  $pi = 3.14;  // nilai pi konstan
  return $pi * pow($jariJari, 2);
}
}

// Penggunaan static method
$jariJari = 20;
$luas = Lingkaran::hitungLuas($jariJari);

echo "Luas lingkaran jika jari-jarinya $jariJari adalah $luas";
?>