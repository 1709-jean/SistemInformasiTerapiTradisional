<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pasien</title>
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
    <br>
    <p style="font-family: Georgia; font-size:30px; color:red;">Petunjuk pengisian :
    <ul style="font-family: Georgia;">1. Untuk pengisian gender hanya berisikan singkatan. Contoh : Perempuan ditulis dengan <b>P</b> dan Laki-laki dapat ditulis dengan <b>L</b></ul>
    <ul style="font-family: Georgia;">2. Untuk Load Date dan Load Time silahkan diisi sesuai dengan tanggal sewaktu penginputan.</ul>
    </p>
    <br>
    <?php
    echo "<form method=\"post\" action=\"simpanpasien.php\" style=\"font-family:Times New Roman;\"><table border=\"3\">";

    echo "<tr><td>ID Pasien</td><td><input type=\"text\" name=\"id_pasien\"></rd></tr>";
    echo "<tr><td>Nama Pasien</td><td><input type=\"text\" name=\"nama\"></rd></tr>";
    echo "<tr><td>Gender</td><td><input type=\"text\" name=\"gender\"></rd></tr>";
    echo "<tr><td>Tanggal Lahir</td><td><input type=\"date\" name=\"tanggal_lahir\"></rd></tr>";
    echo "<tr><td>No HP</td><td><input type=\"text\" name=\"no_hp\"></rd></tr>";
    echo "<tr><td>Alamat</td><td><input type=\"text\" name=\"alamat\"></rd></tr>";
    echo "<tr><td>User</td><td><input type=\"text\" name=\"user\"></rd></tr>";
    echo "<tr><td>Load Tanggal</td><td><input type=\"date\" name=\"loadtanggal\"></rd></tr>";
    echo "<tr><td>Load Waktu</td><td><input type=\"time\" name=\"loadwaktu\"></rd></tr>";

    echo "<tr><td colspan=\"2\" align=\"right\">";
    echo "<a href=tabelpasien.php>Tampilkan Data</a> &nbsp&nbsp";
    echo "<input type=\"submit\" value=\"Simpan\" class=\"btn btn-info\">";
    echo "<input type=\"reset\"class=\"btn btn-danger\"></td></tr></table></form>";
    ?>


</body>

</html>