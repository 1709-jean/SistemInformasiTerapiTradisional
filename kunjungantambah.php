<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kunjungan 01</title>
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
    echo "<form method=\"post\" action=\"simpankunjungan01.php\" style=\"font-family:Times New Roman;\"><table border=\"3\">";

    echo "<tr><td>Trx No</td><td><input type=\"text\" name=\"trx_no\"></rd></tr>";
    echo "<tr><td>Keluhan</td><td><input type=\"text\" name=\"keluhan\"></rd></tr>";
    echo "<tr><td>Indikasi Penyakit</td><td><input type=\"text\" name=\"indikasi_penyakit\"></rd></tr>";
    echo "<tr><td>Saran</td><td><input type=\"text\" name=\"saran\"></rd></tr>";
    echo "<tr><td>ID Pasien</td><td><input type=\"text\" name=\"id_pasien\"></rd></tr>";
    echo "<tr><td>Trx Date</td><td><input type=\"date\" name=\"trx_date\"></rd></tr>";
    echo "<tr><td>Nilai Tali Asih</td><td><input type=\"text\" name=\"nilai_tali_asih\"></rd></tr>";
    echo "<tr><td>Lama Hari Kunjung</td><td><input type=\"text\" name=\"lama_hari_kunjung\"></rd></tr>";

    echo "<tr><td colspan=\"2\" align=\"right\">";
    echo "<a href=tabelkunjungan.php>Tampilkan Data</a> &nbsp&nbsp";
    echo "<input type=\"submit\" value=\"Simpan\" class=\"btn btn-info\">";
    echo "<input type=\"reset\"class=\"btn btn-danger\"></td></tr></table></form>";
    ?>
</body>

</html>