<?php
session_start();
if(!isset($_SESSION["face_giris"])) header("Location:giris.php");

$connectMySQL=mysqli_connect('localhost','root','','facelektronik');
mysqli_set_charset($connectMySQL, "utf8");

$QueryString = 'DELETE FROM '.$_GET["kategori"].' WHERE ID="'.$_GET["id"].'"';

$QueryRow = mysqli_query($connectMySQL, $QueryString);
if($QueryRow) echo '<script>alert("Ürün silindi."); location.href="urunler.php?kategori='.$_GET["kategori"].'";</script>';
else echo '<script>alert("Ürün silinemedi!"); location.href="urunler.php?kategori='.$_GET["kategori"].'";</script>';
?>