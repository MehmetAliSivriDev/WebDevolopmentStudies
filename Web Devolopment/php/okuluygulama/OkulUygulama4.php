<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Yorumlar</title>
</head>
<body style="margin-top: 50px;">
<div class="container">
    <div class="row">
        
        <?php 
        if(isset($_POST["gonder"])){
            // --------------------------------------------------------------------
            // Kullabıcı girişine yazılan kod ile hiç bir bilgi içeriye alınmayacak 
            function test_input($data){ 
                $data = trim($data);
                $data = stripcslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            // ---------------------------------------------------------------------

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "yorum";
        
        
            //create connection 
        
            $conn = mysqli_connect($servername,$username,$password,$dbname);
            $new = mysqli_set_charset($conn, "utf8");
            if($conn->connect_error){
                die("Bağlantı hatası: ".$conn->connect_error);
            }
        
            
            $ad = test_input($_POST["ad"]);
            $soyad = test_input($_POST["soyad"]);
            $email = test_input($_POST["mail"]);
            $puan = test_input($_POST["puan"]);
            $yorum = test_input($_POST["yorum"]);

            // ------------------------------------------------------------------------------------
            $sql = "INSERT INTO yorumlar (`ad`, `soyad`, `email`, `puan`, `yorum`) VALUES
                (?,?,?,?,?)";
            
            $sql2 = "select * from yorumlar";
            // ifademiniz hazırlıyoruz. parse edilir ve DB sunucu saklanır. Tekrar tekrar kullanılabilir
            
            $stmt = mysqli_prepare($conn,$sql);
            // sorgumuzda çalıştırılacak parametreleri gönderiyoruz  is -> i = int ve s = string
            mysqli_stmt_bind_param($stmt, "ssiss", $ad, $soyad,$puan,$email,$yorum);
            // sorgu çalıştır
            mysqli_stmt_execute($stmt);

            $stmt2 = mysqli_prepare($conn,$sql2);
            // sorgumuzda çalıştırılacak parametreleri gönderiyoruz  is -> i = int ve s = string
            mysqli_stmt_bind_param($stmt, "ssiss", $ad, $soyad,$puan,$email,$yorum);
            // sorgu çalıştır
            mysqli_stmt_execute($stmt2);

            $result = mysqli_stmt_get_result($stmt2);

            // ---------------------------------------------------------------------------------------
            if(mysqli_num_rows($result) > 0){
               
                echo("<div class='alert alert-success' role='alert'>
                Yorumunuz Başarıyla Eklenmiştir.
              </div>");

                while($row = mySQLi_fetch_array($result)){
                    
                    echo("<div class='card'>
                    <h4>$row[1]$row[2]</h4><br>
                    <p>Tarih:$row[6]</p>
                    <p>$row[5]</p><br><br>
                    <p>$row[4]</p></div>");

                    
                }
            }
            else{
                echo "Hatalı Işlem Yaptınız Lütfen Tekrar Deneyiniz.";
            }
        }

        ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>