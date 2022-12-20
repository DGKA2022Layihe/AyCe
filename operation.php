<?php
ob_start();
session_start();

include 'conn.php';

if (isset($_POST['admingiris'])) {

    $istifadeci_mail=$_POST['istifadeci_mail'];
    $istifadeci_password=md5($_POST['istifadeci_password']);

    //İstfadəçini bura daxil etmək.
$istifadecigetir=$db->prepare("SELECT * FROM istifadeci where istifadeci_mail=:mail and istifadeci_password=:password
 and istifadeci_selahiyyet=:selahiyyet");
$istifadecigetir->execute(array(
  'mail' => $istifadeci_mail,
  'password' => $istifadeci_password,
  'selahiyyet' => 5

));

$say=$istifadecigetir->rowCount();
if ($say==1) {
    $_SESSION['istifadeci_mail']=$istifadeci_mail;
    header("Location:../index.php");
    exit;
}else{
    header("Location:../login.php?system=no");
    exit;
}  
}
?>