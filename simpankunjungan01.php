<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simpan Data Kunjungan 01</title>
    <link rel="shortcut icon" type="1.jpg" href="1.jpg" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-secondary">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="http://localhost/sistem/terapi/">
            <img src="1.jpg" alt="logo" style="width:50px;">
        </a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/sistem/terapi/tabelpasien.php" style="font-size: 20px; font-family: Comic Sans Ms; color:darkblue">Pasien</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/sistem/terapi/tabelkunjungan.php" style="font-size: 20px; font-family: Comic Sans Ms; color:darkblue">Kunjungan</a>
            </li>
        </ul>
    </nav>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sisteminformasiterapi";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Koneksi gagal, karena : " . $conn->connect_error);
    }

    $trx_no = $_POST["trx_no"];
    $keluhan = $_POST["keluhan"];
    $indikasi_penyakit = $_POST["indikasi_penyakit"];
    $saran = $_POST["saran"];
    $id_pasien = $_POST["id_pasien"];
    $trx_date = $_POST["trx_date"];
    $nilai_tali_asih = $_POST["nilai_tali_asih"];
    $lama_hari_kunjung = $_POST["lama_hari_kunjung"];

    $sql = "INSERT INTO kunjungan01h VALUES ('" . $trx_no . "', '" . $keluhan . "', '" . $indikasi_penyakit . "', '" . $saran . "', '" . $id_pasien . "', '" . $trx_date . "', '" . $nilai_tali_asih . "', '" . $lama_hari_kunjung . "')";

    if ($conn->query($sql) == true) {
        echo "Tambah Data Berhasil :)";
    } else {
        echo "Data gagal bertambah" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    ?>

    <br>
    <p><b>Admin harus melakukan inputan data di Form kunjungan 02. Ini sebagai anak form setelah mengisi Form Kunjungan 01</b></p>
    <br>

    <a type="button" class="btn btn-primary" href="http://localhost/sistem/terapi/kunjungan02htambah.php" style="font-family: Comic Sans Ms;"> Tambah Data </a>


</body>

</html>