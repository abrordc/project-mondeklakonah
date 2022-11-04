/* PROCCESS PHP */
<?php
session_start();
require 'conf.php';
if(isset($_POST['proccess_login'])) {
  if($_POST['proccess_login'] == "check_data") {
    $email = htmlentities($_POST['email']);
    $password = htmlentities($_POST['password']);
    $checking = mysqli_query($con, "SELECT * FROM tabel_user WHERE email='$email' ");
    if(mysqli_num_rows($checking) == 1) {
      $row = mysqli_fetch_assoc($checking);
      if(password_verify($password, $row['password']) {
        $_SESSION['login'] = true;
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['level'] = $row['level'];
        $data = array(
          'yes' => true,
          'msg' => "Selamat, Anda berhasil login.",
          'direct' => "index.php",
        );
      } else {
        $data = array(
          'not_pass' => true,
          'msg' => "Password yang Anda masukkan salah!",
        );
      }
    } else {
      $data = array(