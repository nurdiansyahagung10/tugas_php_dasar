<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery.js"></script>
    <script>
        $(document).ready(function(){
            $('.message a').click(function(){
                $('form').animate({height: "toggle",opacity: "toggle"},"slow");
            });
        });
    </script>
</head>
<body>
    
    <style>
        body{
            background-image: url(background.jpg);
            background-size: cover;
        }
        .form{
            position: relative; 
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0,0,0.2),0 5px 5px 0 rgba(0,0,0,0.24);
            font-size: 14px;
            margin-top: 100px;
            background-color: rgba(153, 180, 233, 0.432);
            border-radius: 10px;
        }
        .form input{
            font-family: "Roboto",sans-serif;
            outline: 0;
            width: 100%;
            border: 0;
            border-bottom: solid black 1px;
            margin: 0 0 15px;
            box-sizing: border-box;
            font-size: 14px;
            border-radius: 5px;
            background: transparent;
        }
        .register-form{
            display: none;
        }

        input[type="submit"]{
            font-size: 14px;
            height: 40px;
            width: 80px;
            border-radius: 50px;
            border: rgba(0, 0, 12, 0.801) solid 2px;    
            transition: 0.5s;
        }
        button:hover{
            width:100px;
            background-color: rgba(18, 187, 253, 0.623);
            color: antiquewhite;
            
        }
        img{
            width: 100px;
            height: 100px;
            padding: 15px;
        }
    </style>
    
    <div class="form">
        <img src="smk_prev_ui.png" alt="">
        <h2>Login</h2>
        <div class="login" id="loginform">
            <form class="login-form" action="index.html">
                <input type="text" placeholder="username" required/>
                <input type="password" placeholder="password" required/>
                <button class="button1">login</button>
                <p class="message">Belum Registasi?<a href="#">Buat Akun Baru</a></p>
            </form>
        </div>
        <div class="register" id="registerform">
            <form class="register-form" method="post">
                <input type="text" placeholder="id" name="id"/>
                <input type="text" placeholder="username" name="username"/>
                <input type="password" placeholder="password" name="password"/>
                <input type="text" placeholder="level user" name="level"/>
                <input type="submit" name="kirim" value="Registrasi" id="">
                <p class="message">Sudah Registasi?<a href="#">Sign In</a></p>
            </form>
        </div>
    </div>
</body>
</html>

<?php
//registrasi akun

include 'koneksi.php';

if (isset($_POST["kirim"])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $query = mysqli_query($koneksi,"INSERT INTO user (id, username, password, level)
    VALUES('$id', '$username','$password','$level')");

    if($query){
        echo "<script type='text/javascript'>alert ('Data telah disimpan');</script>";

    }else{
        echo "<script type='text/javascript'>alert ('Data telah disimpan');</script>";
    }
}

?>

<?php
//login

session_start();
if (isset($_SESSION['username']) ) {
    header('Location: beranda.php');
}

if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = mysqli_query ($koneksi, "SELECT * FROM user WHERE username='$username'
    AND password='$password'");
    $cek = mysqli_num_rows($sql);

    if ($cek > 0) {
        $_SESSION['username'] = $username;
        header("Location: beranda.php");
    } else {
    echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</
    script>";
    }
}
?>