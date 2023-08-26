<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "ogrenci";

    $conn = mysqli_connect($servername,$username,$password,$db);

    if(!$conn){
        die("Bağlantı Hatası: ".mysqli_connect_error());
    }
    echo("Bağlantı Başarılı");

    $sql = "INSERT INTO ogrenci(ogrno,ad,soyad,bolumu,giris_yili,sifre) VALUES ('1210505007','Mehmet Ali','Sivri',3,'03.20.2023','123456')";

    if(mysqli_query($conn,$sql)){
        echo("Kayıt Başarılı");
    }
    else{
        echo("Hata:" .$sql."<br>".mysqli_error($conn));
    }

    mysqli_close($conn);
?>