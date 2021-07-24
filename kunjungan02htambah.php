<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="1.jpg" href="1.jpg" />
    <title>Tambah Data Kunjungan 02</title>
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
    <br>
    <p style="font-family: Georgia; font-size:30px; color:red;">Petunjuk pengisian :
    <ul style="font-family: Georgia;">1. Untuk durasi terapi ditulis dalam <b>satuan waktu menit.</b></ul>
    </p>
    <br>
    <?php
    echo "<form method=\"post\" action=\"simpankunjungan02.php\" style=\"font-family:Times New Roman;\"><table border=\"3\">";

    echo "<tr><td>ID</td><td><input type=\"text\" name=\"id\"></rd></tr>";
    echo "<tr><td>Trx No</td><td><input type=\"text\" name=\"trx_no\"></rd></tr>";
    echo "<tr><td>Jenis Terapi</td><td><input type=\"text\" name=\"jenis_terapi\"></rd></tr>";
    echo "<tr><td>Durasi Terapi</td><td><input type=\"text\" name=\"durasi_terapi\"></rd></tr>";


    echo "<tr><td colspan=\"2\" align=\"right\">";
    echo "<a href=tabelkunjungan.php>Tampilkan Data</a> &nbsp&nbsp";
    echo "<input type=\"submit\" value=\"Simpan\" class=\"btn btn-info\">";
    echo "<input type=\"reset\"class=\"btn btn-danger\"></td></tr></table></form>";
    ?>
</body>

</html>