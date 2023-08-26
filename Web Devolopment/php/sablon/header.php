<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>PHP ŞABLON</title>  
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<?php
include "dbbaglan.php";
?>
<header>
    <h1>Basit Öğrenci Bilgi Sistemi</h1>
    <p style="float=left;" > <?php echo "Sayın ".$_SESSION["ad"]." ".$_SESSION["soyad"]." Hoşgeldiniz" ?> </p>
</header>
