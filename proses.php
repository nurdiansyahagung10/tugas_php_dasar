<?php
include 'koneksi.php';

if(isset($_POST['deluxe'])) {
    $nik            = $_POST["nik"];
    $nama           = $_POST["nama"];
    $tlpn           = $_POST["tlpn"];
    $alamat         = $_POST["alamat"];
    $kamar          = $_POST["kamar"];
    $harga          = $_POST["harga"];

    $sql = mysqli_query ($koneksi, "insert into pesanan (nik,
     nama_pemesan, tlp, alamat, kamar, harga) values ('$nik',
     '$nama','$tlpn','$alamat','$kamar','$harga')");

     header("Location: beranda.php");

}

elseif(isset($_POST['standar'])) {
    $nik            = $_POST["nik"];
    $nama           = $_POST["nama"];
    $tlpn           = $_POST["tlpn"];
    $alamat         = $_POST["alamat"];
    $kamar          = $_POST["kamar"];
    $harga          = $_POST["harga"];

    $sql = mysqli_query ($koneksi, "insert into pesanan (nik,
     nama_pemesan, tlp, alamat, kamar, harga) values ('$nik',
     '$nama','$tlpn','$alamat','$kamar','$harga')");

     header("Location: beranda.php");

}

elseif(isset($_POST['executive'])) {
    $nik            = $_POST["nik"];
    $nama           = $_POST["nama"];
    $tlpn           = $_POST["tlpn"];
    $alamat         = $_POST["alamat"];
    $kamar          = $_POST["kamar"];
    $harga          = $_POST["harga"];

    $sql = mysqli_query ($koneksi, "insert into pesanan (nik,
     nama_pemesan, tlp, alamat, kamar, harga) values ('$nik',
     '$nama','$tlpn','$alamat','$kamar','$harga')");

     header("Location: beranda.php");

}

elseif(isset($_POST['backpacker'])) {
    $nik            = $_POST["nik"];
    $nama           = $_POST["nama"];
    $tlpn           = $_POST["tlpn"];
    $alamat         = $_POST["alamat"];
    $kamar          = $_POST["kamar"];
    $harga          = $_POST["harga"];

    $sql = mysqli_query ($koneksi, "insert into pesanan (nik,
     nama_pemesan, tlp, alamat, kamar, harga) values ('$nik',
     '$nama','$tlpn','$alamat','$kamar','$harga')");

     header("Location: beranda.php");

}

elseif(isset($_POST['premier'])) {
    $nik            = $_POST["nik"];
    $nama           = $_POST["nama"];
    $tlpn           = $_POST["tlpn"];
    $alamat         = $_POST["alamat"];
    $kamar          = $_POST["kamar"];
    $harga          = $_POST["harga"];

    $sql = mysqli_query ($koneksi, "insert into pesanan (nik,
     nama_pemesan, tlp, alamat, kamar, harga) values ('$nik',
     '$nama','$tlpn','$alamat','$kamar','$harga')");

     header("Location: beranda.php");
}

elseif(isset($_POST['presidential'])) {
    $nik            = $_POST["nik"];
    $nama           = $_POST["nama"];
    $tlpn           = $_POST["tlpn"];
    $alamat         = $_POST["alamat"];
    $kamar          = $_POST["kamar"];
    $harga          = $_POST["harga"];

    $sql = mysqli_query ($koneksi, "insert into pesanan (nik,
     nama_pemesan, tlp, alamat, kamar, harga) values ('$nik',
     '$nama','$tlpn','$alamat','$kamar','$harga')");

     header("Location: beranda.php");

}

elseif(isset($_POST['superior'])) {
    $nik            = $_POST["nik"];
    $nama           = $_POST["nama"];
    $tlpn           = $_POST["tlpn"];
    $alamat         = $_POST["alamat"];
    $kamar          = $_POST["kamar"];
    $harga          = $_POST["harga"];

    $sql = mysqli_query ($koneksi, "insert into pesanan (nik,
     nama_pemesan, tlp, alamat, kamar, harga) values ('$nik',
     '$nama','$tlpn','$alamat','$kamar','$harga')");

     header("Location: beranda.php");

}

elseif(isset($_POST['twin'])) {
    $nik            = $_POST["nik"];
    $nama           = $_POST["nama"];
    $tlpn           = $_POST["tlpn"];
    $alamat         = $_POST["alamat"];
    $kamar          = $_POST["kamar"];
    $harga          = $_POST["harga"];

    $sql = mysqli_query ($koneksi, "insert into pesanan (nik,
     nama_pemesan, tlp, alamat, kamar, harga) values ('$nik',
     '$nama','$tlpn','$alamat','$kamar','$harga')");

     header("Location: beranda.php");

}

elseif(isset($_POST['deluxe_twin'])) {
    $nik            = $_POST["nik"];
    $nama           = $_POST["nama"];
    $tlpn           = $_POST["tlpn"];
    $alamat         = $_POST["alamat"];
    $kamar          = $_POST["kamar"];
    $harga          = $_POST["harga"];

    $sql = mysqli_query ($koneksi, "insert into pesanan (nik,
     nama_pemesan, tlp, alamat, kamar, harga) values ('$nik',
     '$nama','$tlpn','$alamat','$kamar','$harga')");

     header("Location: beranda.php");

}
?>
