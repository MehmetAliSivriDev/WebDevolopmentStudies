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
            $dbname = "veysodeneme";
        
        
            //create connection 
        
            $conn = mysqli_connect($servername,$username,$password,$dbname);
            $new = mysqli_set_charset($conn, "utf8");
            if($conn->connect_error){
                die("Bağlantı hatası: ".$conn->connect_error);
            }
               
            $ad = test_input($_POST["ad"]);
            $soyad = test_input($_POST["soyad"]);
            $email = test_input($_POST["mail"]);
            $tel_no = test_input($_POST["tel_no"]);
            $konu = test_input($_POST["konu"]);
            $mesaj = test_input($_POST["ileti"]);
            $klinik = test_input($_POST["bölüm"]);
            // ------------------------------------------------------------------------------------
            $sql = "INSERT INTO hastalar (`ad`, `soyad`, `email`, `tel_no`, `konu`,`ileti`,`bölüm`) VALUES
                (?,?,?,?,?,?,?)";
            
            $sql2 = "select * from hastalar";
            // ifademiniz hazırlıyoruz. parse edilir ve DB sunucu saklanır. Tekrar tekrar kullanılabilir
            
            $stmt = mysqli_prepare($conn,$sql);
            // sorgumuzda çalıştırılacak parametreleri gönderiyoruz  is -> i = int ve s = string
            mysqli_stmt_bind_param($stmt, "sssisss", $ad, $soyad,$email,$tel_no,$konu,$mesaj,$klinik);
            // sorgu çalıştır
            mysqli_stmt_execute($stmt);

            $stmt2 = mysqli_prepare($conn,$sql2);
            // sorgumuzda çalıştırılacak parametreleri gönderiyoruz  is -> i = int ve s = string
            mysqli_stmt_bind_param($stmt, "sssisss", $ad, $soyad,$email,$tel_no,$konu,$mesaj,$klinik);
            // sorgu çalıştır
            mysqli_stmt_execute($stmt2);

            $result = mysqli_stmt_get_result($stmt2);

            // ----------b--------------------------------------------------------burya doktor siteden mesaj ile geri donsun yada arasın hastasını
            if(mysqli_num_rows($result) > 0){
             
                    //buraya alert olarak aranacagınız yaz yada doktor mesajlaşması için bişiler  yap
                echo("<div class='alert alert-success' role='alert'>
                iletiniz Başarıyla Gönderilmiştir . ilgili konu ile uzman doktorumuz tarafından size en kısa zamanda geri dönüş  sağlanacakır.
              </div>");

                while($row = mySQLi_fetch_array($result)){
                         
                    
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