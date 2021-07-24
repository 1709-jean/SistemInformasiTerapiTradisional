<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Edit</title>
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
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sisteminformasiterapi";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Koneksi gagal, karena : " . $conn->connect_error);
    }


    $id_pasien = $_GET["id_pasien"];
    $sql = "SELECT * FROM pasien WHERE id_pasien='" . $id_pasien . "'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nama = $row["nama"];
        $gender = $row["gender"];
        $tanggal_lahir = $row["tanggal_lahir"];
        $no_hp = $row["no_hp"];
        $alamat = $row["alamat"];
        $user = $row["user"];
        $loadtanggal = $row["loadtanggal"];
        $loadwaktu = $row["loadwaktu"];
    }
    "<br>";
    echo "<form method=\"post\" action=\"pasiensimpanedit.php\"><table border=\"2\">";

    echo "<tr><td>ID_Pasien<input type=\"hidden\" name=\"id_pasienlama\" value=\"" . $id_pasien . "\"></td>";
    echo "<td><input type=\"text\" name=\"id_pasien\" value=\"" . $id_pasien . "\"></rd></tr>";

    echo "<tr><td>Nama</td><td>";
    echo "<input type=\"text\" name=\"nama\" value=\"" . $nama . "\"></rd></tr>";

    echo "<tr><td>Gender</td><td>";
    echo "<input type=\"text\" name=\"gender\" value=\"" . $gender . "\"></rd></tr>";

    echo "<tr><td>Tanggal Lahir</td><td>";
    echo "<input type=\"date\" name=\"tanggal_lahir\" value=\"" . $tanggal_lahir . "\"></rd></tr>";

    echo "<tr><td>No Hp</td><td>";
    echo "<input type=\"text\" name=\"no_hp\" value=\"" . $no_hp . "\"></rd></tr>";

    echo "<tr><td>Alamat</td><td>";
    echo "<input type=\"text\" name=\"alamat\" value=\"" . $alamat . "\"></rd></tr>";

    echo "<tr><td>User</td><td>";
    echo "<input type=\"text\" name=\"user\" value=\"" . $user . "\"></rd></tr>";

    echo "<tr><td>Load Tanggal</td><td>";
    echo "<input type=\"date\" name=\"loadtanggal\" value=\"" . $loadtanggal . "\"></rd></tr>";

    echo "<tr><td>Load Waktu</td><td>";
    echo "<input type=\"time\" name=\"loadwaktu\" value=\"" . $loadwaktu . "\"></rd></tr>";

    echo "<tr><td colspan=\"2\" align=\"right\">";
    echo "<a href=tabelpasien.php>Lihat Data</a> &nbsp&nbsp";

    echo "<input type=\"submit\" value=\"Simpan\" class=\"btn btn-info\">";
    echo "<input type=\"reset\" class=\"btn btn-danger\"></td></tr></table></form>";


    $conn->close();
    ?>

</body>

</html>