<?php
abstract class Hewan {
    abstract public function suara();
    abstract public function makanan();
    abstract public function jenishidup();
}

class Harimau extends Hewan {
    public function suara() {
        return "Roar";
    }
    public function makanan() {
        return "Daging";
    }
    public function jenishidup() {
        return "Darat";
    }
}

$harimau = new Harimau ;
echo $harimau->suara();
echo "<br>";
echo $harimau->makanan();
echo "<br>";
echo $harimau->jenishidup();
?>