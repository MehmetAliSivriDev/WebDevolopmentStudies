<?php
include "header.php";
include "menu.php";
?>
<!-- buraya orta kisimda yapilacaklarr eklenecek-->
<section>
    <p>Kişisel Bilgiler</p>
</section>

<?php 
        $kul = $_SESSION["ogrno"];
        $sql = "SELECT * FROM ogrenci o,bolumler b where o.ogrno = $kul and o.bolumu = b.bolum_id";
        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $adi = $row["ad"];
                $soyadi = $row["soyad"];
                $bolumAdi = $row["bolum_adi"];
                $girisYili = $row["giris_yili"];
                $email = $row["email"];
                $tel = $row["tel"];

            }
            }
        ?>


<form action="" method="post">
    <br><br><br>
    <label>Ögrenci No:</label><input disabled placeholder="<?php echo(" $_SESSION[ogrno]");?>">
    <br>
    <label>Adı:</label><input disabled placeholder="<?php echo(" $adi");?>">
    <br>
    <label>Soyadı:</label><input disabled placeholder="<?php echo(" $soyadi");?>">
    <br>
    <label>Giriş Yılı:</label><input disabled placeholder="<?php echo(" $girisYili");?>">
    <br>
    <label>Bölümü:</label><input disabled placeholder="<?php echo(" $bolumAdi");?>">
    <br>
    <label>E-Mail Adresi:</label><input name="email" placeholder="<?php echo(" $email");?>">
    <br>
    <label>Telefon No:</label><input name="tel" placeholder="<?php echo(" $tel");?>">
    <br>
    <button type="submit" name="submit">Bilgileri Güncelle</button>

</form>

<?php 

if(isset($_POST["submit"])){
 
    $email = $_POST["email"];
    $tel = $_POST["tel"];

    $sql = "UPDATE ogrenci SET `email` = '$email', `tel` = '$tel' WHERE `ogrno` = '$kul'";
            
    $result = mysqli_query($conn,$sql);


    
}


?>

<?php
include "alt.php";
?>
