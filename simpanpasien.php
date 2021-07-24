<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simpan Data</title>
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

    $id_pasien = $_POST["id_pasien"];
    $nama = $_POST["nama"];
    $gender = $_POST["gender"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $no_hp = $_POST["no_hp"];
    $alamat = $_POST["alamat"];
    $user = $_POST["user"];
    $loadtanggal = $_POST["loadtanggal"];
    $loadwaktu = $_POST["loadwaktu"];

    $sql = "INSERT INTO pasien VALUES ('" . $id_pasien . "', '" . $nama . "', '" . $gender . "', '" . $tanggal_lahir . "', '" . $no_hp . "', '" . $alamat . "', '" . $user . "', '" . $loadtanggal . "', '" . $loadwaktu . "')";

    if ($conn->query($sql) == true) {
        echo "Tambah Data Berhasil :)";
    } else {
        echo "Data gagal bertambah" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    ?>

    <br>
    <p>Klik tombol dibawah ini, jika anda ingin melihat data anda sudah masuk ke dalam tabel atau belum ! </p>
    <br>

    <a type="button" class="btn btn-success" href="http://localhost/sistem/terapi/tabelpasien.php" style="font-family: Comic Sans Ms;"> Lihat Data </a>


</body>

</html>