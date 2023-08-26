<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="psot">
    <h2>SİTEMİZİ DEĞERLENDİRİN!</h2>
    <label>Adınız:</label>
    <input type="text" name="ad">
    <br><br>
    <label>Soyadınız:</label>
    <input type="text" name="soyad">
    <br><br>
    <label>Mail Adresiniz:</label>
    <input type="text" name="mail">
    <br><br>
    <input type="number" name="puan" placeholder = "Puanını seç!">
    <br><br>
    <label>Yorumunuz:</label>
    <br>
    <textarea name = "yorum"></textarea>
    <br><br>

    <input type = "submit" name = "gonder" value = "Gönder">
    </form>


    <?php 

            
            
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "yorum";
        
        
            //create connection 
        
            $conn = new mysqli($servername,$username,$password,$dbname);
            $new = mysqli_set_charset($conn, "utf8");
            if($conn->connect_error){
                die("Bağlantı hatası: ".$conn->connect_error);
            }
            
        

            if(isset($_POST["gonder"])){
                $ad = $_POST["ad"];
                $soyad = $_POST["soyad"];
                $mail = $_POST["mail"];
                $puan = $_POST["puan"];
                $yorum = $_POST["yorum"];
                
                echo "<br>".$sql."<br>";
                

                $sql = "select * from yorumlar";
                $stmt = mysqli_prepare($conn,$sql);
                mysqli_stmt_bind_param($stmt, "ssiss", $ad, $soyad, $puan, $mail, $yorum);
                mysqli_stmt_execute($stmt);

                $sql2 = "INSERT INTO yorumlar (`ad`, `soyad`, `email`, `puan`, `yorum`) VALUES
                (?,?,?,?,?)";
                
                $stmt2 = mysqli_prepare($conn,$sql2);
                
                mysqli_stmt_bind_param($stmt2, "ssiss", $ad, $soyad, $puan, $mail, $yorum);
                
                mysqli_stmt_execute($stmt2);

                $result = mysqli_stmt_get_result($stmt);
                
               
                if(mysqli_num_rows($result) > 0){

                    echo("<div class='alert alert-success' role='alert'>
                    Yorumunuz Başarıyla Eklendi!.</div>");

                
                    while($row = mySQLi_fetch_array($result)){

                        echo "<p>".$row[1]."(".$row[3].")"."</p>";
                        echo "<p>".$row[6]."</p>";
                        echo "<p>".$row[5]."</p>","<br>";
                        echo "<p>".$row[4]."</p>";
                    
                    }
                }
                else{
                    echo "Hatalı işlem yaptınız";
                }
            }
        
            
            ?>
    </body>
</html>