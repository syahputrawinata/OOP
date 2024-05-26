<?php

class Shell {
    protected $price;
    protected $ppn;

    public function __construct($price, $ppn) {
        $this->price = $price;
        $this->ppn = $ppn;
    }

    public function calculateTotalPrice($quantity) {
        return $quantity * $this->price * (1 + $this->ppn / 100);
    }
}

class Buy {
    public function purchase($liter, $type) {
        $shell = null;

        switch ($type) {
            case 'Shell Super':
                $shell = new Shell(15.420, 10);
                break;
            case 'Shell V-Power':
                $shell = new Shell(16.130, 10);
                break;
            case 'Shell V-Power Diesel':
                $shell = new Shell(18.310, 10);
                break;
            case 'Shell V-Power Nitro':
                $shell = new Shell(16.510, 10);
                break;
            default:
                throw new Exception("Invalid fuel type.");
        }

        $total = $shell->calculateTotalPrice($liter);

        echo "<br>----------------------------------------------------------<br>";
        echo "Anda membeli bahan bakar minyak tipe " . "<b>" . $type . "</b>";
        echo "<br>";
        echo "Dengan Jumlah " . "<b>" . $liter. "</b>";
        echo "<br>";
        echo "Total yang harus anda bayar Rp. " . "<b>" . $total . "</b>";
        echo "<br>----------------------------------------------------------<br>";
    }
}

if(isset($_POST['Kirim'])){
    $liter = $_POST['liter'];
    $type = $_POST['type'];

    $buy = new Buy();
    $buy->purchase($liter, $type);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="liter">Masukan Jumlah Liter : </label>
        <input type="number" name="liter" id="liter" required>
        <br>
        <label for="type">Pilih Tipe Bahan Bakar : </label>
        <select id="type" name="type" required>
            <option value="Shell Super">Shell Super</option>
            <option value="Shell V-Power">Shell V-Power</option>
            <option value="Shell V-Power Diesel">Shell V-Power Diesel</option>
            <option value="Shell V-Power Nitro">Shell V-Power Nitro</option>
        </select>
        <br>
        <button type="submit" name="Kirim">Kirim</button>
    </form>
</body>
</html>
