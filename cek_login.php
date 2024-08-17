<?php
    include "koneksi.php";

    session_start();

    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, md5($_POST['password']));

    $query = mysqli_query($koneksi, "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'");

    $cek = mysqli_num_rows($query);

    $r = mysqli_fetch_array($query);
    
    // echo $cek;

    if ($cek > 0){


        $_SESSION['namaadmin']  = $r['nama_admin'];
        $_SESSION['username']   = $r['username'];
        $_SESSION['password']   = $r['password'];
        $_SESSION['idadmin']    = $r['id_admin'];

        if(!empty($_POST["remember"])){
            setcookie("username", $_POST["username"], time() + (60 * 60 * 24 * 5));
            setcookie("password", $_POST["password"], time() + (60 * 60 * 24 * 5));
        } else{
            setcookie("username", "");
            setcookie("password", "");
        }

        header("location:dashboard.php?hal=home");
    }else{
        header("location:gagal_login.php");
    }
?>