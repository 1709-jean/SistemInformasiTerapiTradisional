<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="1.jpg" href="1.jpg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Pasien</title>
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
    // Membuat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Memeriksi koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal, karena : " . $conn->connect_error);
    }

    $k  =  $_GET["id_pasien"];
    $sql  =  "DELETE  FROM  pasien  WHERE  id_pasien='" . $k . "'";
    if ($conn->query($sql) === TRUE) {
        echo  "Penghapusan  data  berhasil...";
    } else {
        echo "Error:" . $sql  . "<br>" . $conn->error;
    }
    $conn->close();
    //header("Location:mk_paginasi.php"); 
    ?>
    <br>
    <p><b>Silahkan klik tombol dibawah ini jika ingin menampilkan hasil data yang terbaru.</b></p>
    <br>

    <a type="button" class="btn btn-success" href="http://localhost/sistem/terapi/tabelpasien.php" style="font-family: Comic Sans Ms;"> Lihat Data </a>
</body>

</html>