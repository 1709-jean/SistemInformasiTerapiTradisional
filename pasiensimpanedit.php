<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pasien</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" type="1.jpg" href="1.jpg" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>


    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sisteminformasiterapi";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Koneksi gagal, karena : " . $conn->connect_error);
    }

    $id_pasienlama = $_POST["id_pasienlama"];
    $id_pasien = $_POST["id_pasien"];
    $nama = $_POST["nama"];
    $gender = $_POST["gender"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $no_hp = $_POST["no_hp"];
    $alamat = $_POST["alamat"];
    $user = $_POST["user"];
    $loadtanggal = $_POST["loadtanggal"];
    $loadwaktu = $_POST["loadwaktu"];

    $sql = "UPDATE pasien SET id_pasien='" . $id_pasien . "', nama='" . $nama . "', gender='" . $gender . "', tanggal_lahir='" . $tanggal_lahir . "', no_hp='" . $no_hp .
        "', alamat='" . $alamat . "', user='" . $user . "', loadtanggal='" . $loadtanggal . "', loadwaktu='" . $loadwaktu .
        "' WHERE id_pasien='" . $id_pasienlama . "'";
    if ($conn->query($sql) === TRUE) {
        echo "Data pasien berhasil...";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

    ?>
    <br>

    <a type="button" class="btn btn-success" href="http://localhost/sistem/terapi/tabelpasien.php" style="font-family: Comic Sans Ms;"> Lihat Data </a>

</body>

</html>