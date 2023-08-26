<?php
include "header.php";
include "menu.php";
?>
<!-- buraya orta kisimda yapilacaklar eklenecek-->
<section>
    <p>buraya text yazılacak</p>
</section>
<!-- orta kismin sonu-->
<?php
include "alt.php";

?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sablon";

// Bağlantı yarat
$conn = new mysqli($servername, $username, $password, $dbname);
$_SESSION["conn"]=$conn;

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı Hatası: " . $conn->connect_error);
}
//Şifre dogruysa menüde ek bölümler alacağı için menuden önce şifre kontrolu yapacaz
$mesaj ='';
if(isset($_POST['no']))
{
	$kul=$_POST['no'];
	$sifr=$_POST['sifr'];
	$sql="select * From ogrenci where ogrno=".$kul;
	$result=$conn->query($sql);
	$row = $result->fetch_assoc();
	if($result->num_rows > 0){

		$sifre = $row["sifre"];
		$girilenSifre = hash('sha512', $sifr);
		$hashliduzenlenmis = substr($girilenSifre, 0, 12);

		if($sifre == $hashliduzenlenmis){
			$_SESSION["ogrno"]=$kul;
			$_SESSION["ad"]=$row["ad"];
			$_SESSION["soyad"]=$row["soyad"];
			header ("refresh: 2; url=index.php");
		}
		else {
			$mesaj="Sifre Yanlis .Tekrar dene.";
			header ("refresh: 2; url=index.php");
		}

	}
else{
	echo "Bir sonuç dönmedi!";
}}
//ortadaki bölümün kodları burada olcak
if(isset($_POST['no'])){
echo $mesaj;}

?>