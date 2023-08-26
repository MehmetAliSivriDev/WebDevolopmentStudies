<?php
$sifredizi=array();
$guvenliSifre = array();
$ogrenciNumaralari = array();
echo "DİKKAT BU PHP DOSYASI VERİTABANINDAKİ TÜM VERİLERE ETKİ EDECEĞİNDEN SADECE 1 KERE ÇALIŞTIRILMALIDIR!";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hastaneveritabani";

// Bağlantı yarat
$conn = new mysqli($servername, $username, $password, $dbname);
$_SESSION["conn"]=$conn;

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı Hatası: " . $conn->connect_error);
}

$sql = "SELECT * FROM doktor";
$result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $ogrno = $row["doktor_eposta"];
            array_push($ogrenciNumaralari, $ogrno);
            $sifre = $row["doktor_sifre"];
            array_push($sifredizi, $sifre);
        }
    }

$sifreBoyutu = strval(count($sifredizi));

echo("<br>Veritabanındaki Mevcut Şifre Sayısı: $sifreBoyutu <br>");

for ($i = 0; $i < count($sifredizi); $i++) {
    if (CRYPT_SHA512 == 1) {
        $guvenli = hash('sha512', $sifredizi[$i]);
        array_push($guvenliSifre, $guvenli);
    }
}

for ($j = 0; $j < count($ogrenciNumaralari); $j++) {
    $sql2 = "UPDATE doktor SET `doktor_sifre` = '$guvenliSifre[$j]' WHERE `doktor_eposta` = '$ogrenciNumaralari[$j]'";
    $result2 = mysqli_query($conn, $sql2);
}


//Veritabanında öğrencilere ait tüm şifreleri çekip diziyi şifrelerle dolduracağız.


//Dizi doldurulduktan sonra cont ile boyutunu öğreniniz.


//Dizide kayıtlı olan şifreleri SHA512 ile şifreleyip veritabanındaki şifre alanlarını güncelleyeceğiz.


echo "Şifreler güncellendi!";
?>