 <?php

    if(isset($_POST["submit"])){
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $lahir = $_POST['lahir'];
    $tanggal = $_POST['tanggal'];
    $tlp = $_POST['tlp'];

    $ktp = $_POST['ktp'];
    $lamaran = $_POST['lamaran'];
    $fakta = $_POST['fakta'];
    $kk = $_POST['kk'];
    $ijazah = $_POST['ijazah'];

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .container {
            background-color: yellowgreen;
            padding: 20px;
            width: 400px;
            margin: auto;
            border: 10px solid seagreen;
            box-shadow: 20px 20px;
        }
        h2 {
            text-align: center;
            color: black;
            font-size: 30px;
        }
        img {
            width: 80px;
        }
    </style>
    <div class="container">
        <h2>Data Pelamar CPNS Tahun 2023</h2>
        <table>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td><?php echo $nik; ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $nama; ?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><?php echo $lahir; ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><?php echo $tanggal; ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $alamat; ?></td>
            </tr>
            <tr>
                <td>No Tlp/Hp</td>
                <td>:</td>
                <td><?php echo $tlp; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?php echo $email; ?></td>
            </tr>
        </table>
        <h2>Data Perlengkapan Dokumen</h2>
        <table>
            <tr>
                <td>KTP</td>
                <td>:</td>
                <td><a href="foto/<?php echo $ktp; ?>" target="_blank"</a><img src="foto/<?php echo $ktp; ?>" alt=""></td>
            </tr>
            <tr>
                <td>Lamaran Pekerjaan</td>
                <td>:</td>
                <td><a href="foto/<?php echo $lamaran; ?>" target="_blank"</a><img src="foto/<?php echo $lamaran; ?>" alt=""></td>
            </tr>
            <tr>
                <td>Fakta Integritas</td>
                <td>:</td>
                <td><a href="foto/<?php echo $fakta; ?>" target="_blank"</a><img src="foto/<?php echo $fakta; ?>" alt=""></td>
            </tr>
            <tr>
                <td>Kartu Keluarga</td>
                <td>:</td>
                <td><a href="foto/<?php echo $kk; ?>" target="_blank"</a><img src="foto/<?php echo $kk; ?>" alt=""></td>
            </tr>
            <tr>
                <td>Ijazah Terakhir</td>
                <td>:</td>
                <td><a href="foto/<?php echo $ijazah; ?>" target="_blank"</a><img src="foto/<?php echo $ijazah; ?>" alt=""></td>
            </tr>
        </table>
    </div>

</body>
</html>