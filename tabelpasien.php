<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasien</title>
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
    include("conn.php");


    $sql = "SELECT * FROM pasien";
    $hasil = $conn->query($sql);
    ?>

    <h1 style=" text-align: center;">Daftar Pasien</h1>

    <?php

    if ($hasil->num_rows > 0) {
        echo "<table border=\"1\"><tr><th>ID Pasien</th><th>Nama Pasien</th><th>Gender</th><th>Tanggal Lahir</th><th>No HP</th><th>Alamat</th>
    <th>User</th><th>Load Tanggal</th><th>Load Waktu</th><th>Edit</th><th>Hapus</th></tr>";
        while ($row = $hasil->fetch_assoc()) {
            echo "<tr><td>" . $row["id_pasien"] . "</td> <td>" . $row["nama"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["tanggal_lahir"] . "</td><td>" .
                $row["no_hp"] . "</td><td>" . $row["alamat"] . "</td><td>" . $row["user"] . "</td><td>" . $row["loadtanggal"] . "</td><td>" . $row["loadwaktu"] . "</td>";
            echo "<td><a href=editpasien.php?id_pasien=" . $row["id_pasien"] . ">";
            echo "<img src=\"pen.jpg\" title=\"Ubah data\" style=\"width:25px;height:25px;\"></a></td>";
            echo "<td><a href=hapuspasien.php?id_pasien=" . $row["id_pasien"] . ">";
            echo "<img src=\"trash.jpg\" title=\"Hapus Data\" style=\"width:25px;height:25px;\"></a></td></tr>";
        }
        echo "</table>";
    } else {
        echo "Data ";
    }
    $conn->close();
    ?>
    <br>

    <a type="button" class="btn btn-primary" href="http://localhost/sistem/terapi/pasientambah.php" style="font-family: Comic Sans Ms;"> Tambah Data </a>
</body>

</html>