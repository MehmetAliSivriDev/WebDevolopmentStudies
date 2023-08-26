<?php
include "header.php";
include "menu.php";
?>
<!-- buraya orta kısımda yapılacaklarr eklenecek-->
    

<section>
    <p>Şifre Değiştir</p>
    <br/>
    
    <form method="post" action="">

        
        Eski Şifre: <input type="password" name="eskisifre"/><br/>
        Yeni Şifre: <input type="password" name="yenisifre"/><br/>
        Yeni Şifre(Tekrar): <input type="password" name="yenisifretekrar"/><br/>
        <input type="submit" name="btn" value="Güncelle" />
        <br/>
        <br/>
        <br/>
    </form>
</section>

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

        // Eğer kullanıcı giriş yapmışsa
            if (isset($_POST["btn"])) {
                // Form gönderildiğinde

                $kul = $_SESSION["ogrno"];

                $sql = "SELECT * FROM ogrenci where ogrno = $kul";
                $result = mysqli_query($conn,$sql);
                
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){

                        $sifre = $row["sifre"];
                    }
                }

                $eski_sifre = $_POST["eskisifre"];
                $yeni_sifre = $_POST["yenisifre"];
                $yeni_sifre_tekrar = $_POST["yenisifretekrar"];

                $eskiHash = hash('sha512', $eski_sifre);
                $eskihashliduzenlenmis = substr($eskiHash, 0, 12);
                $yeniHash = hash('sha512', $yeni_sifre);
                $yeniTekrarHash = hash('sha512', $yeni_sifre_tekrar);

                if ($eskihashliduzenlenmis == $sifre) {
                    if ($yeniHash == $yeniTekrarHash) {
                        // Şifre güncelleme SQL sorgusu
                        $sql = "UPDATE ogrenci SET `sifre` = '$yeniHash' WHERE `ogrno` = '$kul'";
                        $result = mysqli_query($conn, $sql);

                        if ($result) {
                            echo("Şifre başarıyla güncellendi.");
                            // Şifre başarıyla güncellendi
                        } else {
                            echo("Şifre güncellenirken bir hata oluştu: " . mysqli_error($conn));
                            // Şifre güncelleme sırasında bir hata oluştu
                        }
                    } else {
                        echo("Yeni şifreler uyuşmuyor, lütfen tekrar deneyin.");
                    }
                } else {
                    echo("Eski şifrenizi yanlış girdiniz, lütfen tekrar deneyin.");
                }
            }
        
    ?>

<!-- orta kısmın sonu-->
<?php
include "alt.php";
?>