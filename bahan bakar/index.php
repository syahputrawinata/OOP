<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Harga dengan Konsep PHP</title>
</head>
<body>
    <form action="" method="post">
        <div style="display: flex;">
            <label for="liter">Masukan Jumlah Liter Pembelian : </label>
            <input type="number" name="liter" id="liter" required>
        </div>
        <div style="display: flex;">
            <label for="jenis">Pilih Jenis Bahan Bakar</label>
            <select name="jenis" required>
                <option value="SSuper">Shell Super</option>
                <option value="SVSuper">Shell V-Power</option>
                <option value="SVPowerDiesel">Shell V-Power Diesel</option>
                <option value="SVPowerNitro">Shell V-Power Nitro</option>
            </select>
        </div>
        <button type="submit" name="beli">Beli</button>
    </form>

    <?php
    //panggil filenya
    ?>
</body>
</html>