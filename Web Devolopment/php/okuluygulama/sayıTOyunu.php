<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sayı Tahmin Oyunu</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        div{
            border: 1px solid black;
            width: 250px;
            height: 150px;
            padding: 10px;
        }   
        div input{
            display: block;
            margin: 5px;
        }
    </style>
</head>
<body>

    <?php 
        if(isset($_POST["gonder"])){

            $kullaniciTahmin = $_POST["tahmin"];
            $dogruCevap = 25;
            $eskiTahminler = $_POST["eskiTahminler"];
            $sayac = 0 + intval($_POST["sayac"]);

            if($kullaniciTahmin == $dogruCevap){
                $sayac++;
                $sonuc = "Tebrikler Dogru Cevabı Buldunuz! Toplamda ".$sayac." Kez Tahmin Ettiniz!";
            }
            else if ($kullaniciTahmin > $dogruCevap){
                if(str_contains($eskiTahminler,$kullaniciTahmin)){
                    $sonuc = "<strong>Bu Sayıyı Zaten Tahmin Etmiştin!</strong><br>Daha Küçük Bir Sayı Tahmin Etmelisin!";
                    $eskiTahminler = $eskiTahminler.$kullaniciTahmin."-";
                    $sayac++;
                }
                else{
                    $sonuc = "Daha Küçük Bir Sayı Tahmin Etmelisin!";
                    $eskiTahminler = $eskiTahminler.$kullaniciTahmin."-";
                    $sayac++;
                }   
            }
            else{
                if(str_contains($eskiTahminler,$kullaniciTahmin)){
                    $sonuc = "<strong>Bu Sayıyı Zaten Tahmin Etmiştin!</strong><br>Daha Büyük Bir Sayı Tahmin Etmelisin!";
                    $eskiTahminler = $eskiTahminler.$kullaniciTahmin."-";
                    $sayac++;
                }
                else{
                    $sonuc = "Daha Büyük Bir Sayı Tahmin Etmelisin!";
                    $eskiTahminler = $eskiTahminler.$kullaniciTahmin."-";
                    $sayac++;
                }   
            }

            echo("<h3>Sistem Mesajı:</h3>");
            echo $sonuc;
            echo("<br><br>");
            echo("<h3>Eski Tahminler:</h3>");
            echo $eskiTahminler;
            echo("<h3>Tahmin Sayacı</h3>");
            echo $sayac;

        }

    ?>

    <form action="" method="post">
        <div>
        <input type="hidden" name="eskiTahminler" value="<?php echo $eskiTahminler ?? ""; ?>"/>
        <input type="hidden" name="sayac" value="<?php echo $sayac; ?>"/>
            <h3>Sayı Tahmin Oyunu</h3>
            <input type="number" name="tahmin" id="tahmin" placeholder="Tahmin Giriniz(1-100)">
            <input type="submit" name="gonder" value="Tahmin Et">     
            
        </div>
    </form>    


</body>
</html>