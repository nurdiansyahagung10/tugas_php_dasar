<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
   <style>
      body {
         background-color: darkseagreen;
      }
      .container {
         background-color: lightgreen;
         width: 500px;
         padding: 20px;
         margin: auto;
         border-right: 30px solid seagreen;
         border-top: solid 5px seagreen;
      }
      input {
         width: 100%;
         padding: 10px;
         box-sizing: border-box;
         margin: 8px;
         outline: none;
         background: transparent;
         border-bottom: solid 5px teal;
      }
      input[type="submit"] {
         background-color: teal;
         color: white;
         border: none;
         border-radius: 10px;
         cursor: pointer;
      }
   </style>
<body>
   <div class="container">
   <h2>Input Data Pribadi</h2>
   <form action="data.php"method="post">
        <label for="">NIK</label>
        <input type="text" name="nik" id="">
        <label for="">Nama</label>
        <input type="text" name="nama" id="">
        <label for="">Alamat</label>
        <input type="text" name="alamat" id="">
        <label for="">E-mail</label>
        <input type="text" name="email" id="">
        <label for="">Tempat lahir</label>
        <input type="text" name="lahir" id="">
        <label for="">Tanggal lahir</label>
        <input type="date" name="tanggal" id="">
        <label for="">No Telepon</label>
        <input type="text" name="tlp" id="">
        <P></P>
        <h2>Persyaratan Dokumen</h2>
        <label for="">KTP</label>
        <input type="file" name="ktp" id=""><br><br>
        <label for="">Lamaran Pekerjaan</label>
        <input type="file" name="lamaran" id=""><br><br>
        <label for="">Fakta Integritas</label>
        <input type="file" name="fakta" id=""><br><br>
        <label for="">Kartu Keluarga</label>
        <input type="file" name="kk" id=""><br><br>
        <label for="">Ijazah Terakhir</label>
        <input type="file" name="ijazah" id=""><br><br>
        <input type="submit" name="submit" id="" value="Kirim">
      </form> 
   </div>
</body>
</html>