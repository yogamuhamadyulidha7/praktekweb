<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$umur = $_POST["umur"];
if($email == "idris@usm.ac.id" && $password == "123" && $umur >= 14 && $umur <= 44 ){
    // echo "<b>Login Berhasil</b>";
    $_SESSION['login'] = true;
    header('Location: http://localhost/praktekweb/dashboard.php');
}else{
    header('Location: http://localhost/praktekweb/index.php?error=Login Gagal');
}