<?php
    $kullaniciAdi = $_POST["kullaniciAdi"];
    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $mail = $_POST["mail"];
    $sifre = $_POST["sifre"];

    $saltDeger = "saltdegeriverdim";


    if (CRYPT_SHA512  == 1) 
    {
        $guvenliSifre = crypt($sifre,'$6$rounds=5000$saltdegeriverdim$');
    }
    
    echo("<b>Kullanıcı Adı:</b>".$kullaniciAdi."<br>");
    echo("<b>Ad:</b>".$ad."<br>");
    echo("<b>Soyad:</b>".$soyad."<br>");
    echo("<b>Mail:</b>".$mail."<br>");
    echo("<b>Şifre:</b>".$guvenliSifre."<br>");
    

    
    

?>