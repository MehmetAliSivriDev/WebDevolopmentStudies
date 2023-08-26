
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayrıntılı Bilgi</title>
</head>
</style>
<body>
    <table border= "1" align="center">
        <tr  style="font-weight:bold">
            <td>Öğrenci Numarası</td>
            <td>Ad</td>
            <td>Soyad</td>
            <td>Bölümü</td>
            <td>Giriş Yılı</td>
            <td>Şifre</td>
        </tr>
        <?php 

            $servername = "localhost";
            $username = "root";
            $password = "";
            $db = "ogrenci";

            $ogrenciNumarasi = $_GET['num'];

            $conn = mysqli_connect($servername,$username,$password,$db);

            $sqlQuery = "select * from ogrenci where ogrno = $ogrenciNumarasi";
            $result = mysqli_query($conn,$sqlQuery);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $ogrenciNum = $row["ogrno"];
                    $ad = $row["ad"];
                    $soyad = $row["soyad"];
                    $bolumu = $row["bolumu"];
                    $girisYili = $row["giris_yili"];
                    $sifre = $row["sifre"];
                        
                    
                    echo"
                        <td>
                        <a href=''>$ogrenciNum</a>
                        </td>
                        <td>
                        $ad
                        </td>
                        <td>
                        $soyad
                        </td>
                        <td>
                        $bolumu
                        </td>
                        <td>
                        $girisYili
                        </td>
                        <td>
                        $sifre
                        </td>
                    </tr>";
                    
                }
            }


        ?>
    </table>
    
</body>
</html>