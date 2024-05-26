<?php
    class siswa{
        public $Nama;
        public $Rayon;
        public $Nis;
        public $Gender;
        public $Jurusan;

        public function __construct ($Nama, $Rayon, $Nis, $Gender, $Jurusan){
            $this->Nama = $Nama;
            $this->Rayon = $Rayon;
            $this->Nis = $Nis;
            $this->Gender = $Gender;
            $this->Jurusan = $Jurusan;
            
        }
    }

    if(isset($_POST['Kirim'])){
        $Nama = $_POST['Nama'];
        $Rayon = $_POST['Rayon'];
        $Nis = $_POST['Nis'];
        $Gender = $_POST['Gender'];
        $Jurusan = $_POST['Jurusan'];

        $data = new siswa ($Nama, $Rayon, $Nis, $Gender, $Jurusan);
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
    <h2>Form</h2>
    <form method="post">
    <label for="Nama">Nama :</label>
    <input type="text" name="Nama" id="Nama" required>
    <br>
    <label for="Rayon">Rayon:</label>
    <input type="text" name="Rayon" id="Rayon" required>
    <br>
    <label for="Nis">Nis:</label>
    <input type="number" name="Nis" id="Nis" required>
    <br>
    <label for="Gender">Gender:</label>
    <select id="Gender" name="Gender" required>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
    <br>
    <label for="Jurusan">Jurusan:</label>
    <select id="Jurusan" Name="Jurusan" required>
        <option value="PPLG">PPLG</option>
        <option value="DKV">DKV</option>
        <option value="Hotel">Hotel</option>
        <option value="MPLB">MPLB</option>
        <option value="Kuliner">Kuliner</option>
        <option value="TJKT">TJKT</option>
        <option value="Pemasaran">Pemasaran</option>
    </select>    
    <br>
    <button type="submit" name="Kirim">Kirim</button>
    </form>

    <?php if(isset($data)):?>
    <table border="1">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>NIS</th>
    <th>Rayon</th>
    <th>Jenis Kelamin</th>
    <th>Jurusan</th>
  </tr>
  <tr>
    <td>1</td>
    <td><?php echo $data->Nama;?></td>
    <td><?php echo $data->Nis;?></td>
    <td><?php echo $data->Rayon;?></td>
    <td><?php echo $data->Gender;?></td>
    <td><?php echo $data->Jurusan;?></td>
  </tr>
</table>
    <?php endif;?>
</body>
</html>