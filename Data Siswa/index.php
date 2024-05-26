<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DATA SISWA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
</head>
<body>

    <div class="wrapper">
            <div class="inner">
              <div class="front">
                <div class="title">DATA SISWA</div>
                <form class="form" action="" method="post">
                  <input class="input" type="text" name="nama" id="nama" placeholder="Masukan Nama" required>
                  <input class="input" type="text" name="rayon" id="rayon" placeholder="Masukan Rayon" required>
                  <input class="input" type="number" name="nis" id="nis" placeholder="Masukan NIS" required>
                  <button class="btn" type="submit" name="Kirim">Tambah</button>
                  <button class="btn2"><a href="reset.php">Reset</a></button>
                </form>
              </div>
            </div>
        </div>


        <script>
        document.querySelector('.btn2').addEventListener('click', function() {
            window.location.href = 'reset.php';
        });
    </script>

    
    <?php
    session_start();
    //kalo belum ada $_SESSION ['dataStudent] maka buat denga array yang kosong
        if(!isset($_SESSION['dataStudent'])){
            $_SESSION['dataStudent'] = array();
        }

        // var_dump($_SESSION['dataStudent']);


        //validasi data input data user ketika klik button 
        if(isset($_POST['Kirim'])){
            if(!empty($_POST['nama']) && !empty($_POST['rayon']) && !empty($_POST['nis'])){
                $data = [
                    'nama' => $_POST['nama'],
                    'rayon' => $_POST['rayon'],
                    'nis' => $_POST['nis']
                ];
                array_push($_SESSION['dataStudent'], $data);
            }
        }

        // echo "<br>";
        //validasi data yang ingin di hapus
        if(isset($_GET['hapus'])){
            $key = $_GET['hapus'];
            unset($_SESSION['dataStudent'][$key]);
            header("Location:index.php");
        }

        // Mempersiapkan untuk Mengedit Data
        $editMode = false;
        $editKey = null;
        $editData = ['nama' => '', 'rayon' => '', 'nis' => ''];

        if (isset($_GET['edit'])) {
        $editKey = $_GET['edit'];
        if (isset($_SESSION['dataStudent'][$editKey])) {
        $editData = $_SESSION['dataStudent'][$editKey];
        $editMode = true;
        }
    }

        //Tangani Pengiriman Formulir untuk Memperbarui Data
        if (isset($_POST['Update'])) {
            if (!empty($_POST['nama']) && !empty($_POST['rayon']) && !empty($_POST['nis'])) {
                $updatedData = [
                    'nama' => $_POST['nama'],
                    'rayon' => $_POST['rayon'],
                    'nis' => $_POST['nis']
                ];
                $_SESSION['dataStudent'][$_POST['key']] = $updatedData;
                header("Location: index.php");
                exit;
            }
        }

        ?>

<?php
        // kalo $_SESSION['dataStudent'] tidak kosong atau ada isinya maka tampilkan hasil foreachnya
        if (!empty($_SESSION['dataStudent'])) {
            foreach ($_SESSION['dataStudent'] as $key => $value) {
                echo '<div class="student-card">';
                echo "<p><strong>Nama:</strong> " . htmlspecialchars($value['nama']) . "</p>";
                echo "<p><strong>Rayon:</strong> " . htmlspecialchars($value['rayon']) . "</p>";
                echo "<p><strong>NIS:</strong> " . htmlspecialchars($value['nis']) . "</p>";
                echo '<a class="button delete" href="?hapus='. $key .'"><i class="bi bi-trash"></i></a>';
                echo '<a class="button edit" href="?edit='. $key .'"><i class="bi bi-pencil-square"></i></a>';
                echo '</div>';
                echo "<hr>";
            }
        }
        ?>

            <!-- Tampilkan Formulir untuk edit -->
 <?php if ($editMode): ?>
    <div id="editModal" class="modal wrapper">
        <div class="inner2">
            <div class="front">
            <span class="close">&times;</span>
            <div class="title">Edit Data Siswa</div>
            <form class="form2" action="" method="post">
                <input type="hidden" name="key" value="<?php echo $editKey; ?>">
                <input class="input" type="text" name="nama" value="<?php echo $editData['nama']; ?>" required>
                <input class="input" type="text" name="rayon" value="<?php echo $editData['rayon']; ?>" required>
                <input class="input" type="number" name="nis" value="<?php echo $editData['nis']; ?>" required>
                <button class="btn" type="submit" name="Update" value="Update">Update</button>
            </form>
            </div>
        </div>
    </div>

    <script>
        // Get the modal
        var modal = document.getElementById('editModal');

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName('close')[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = 'none';
        }

        // Display the modal
        modal.style.display = 'block';

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }
    </script>
<?php endif; ?>
</body>
</html>