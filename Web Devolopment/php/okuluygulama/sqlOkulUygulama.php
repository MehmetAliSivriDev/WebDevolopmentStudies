
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Öğrenci Bilgileri</title>
</head>
</style>
<body>
    <table border= "1" align="center">
        <tr  style="font-weight:bold">
            <td>Öğrenci Numarası</td>
            <td>Ad</td>
            <td>Soyad</td>
            <td>Vize</td>
            <td>Final</td>
            <td>Ortalama</td>
        </tr>
        <?php 

            $servername = "localhost";
            $username = "root";
            $password = "";
            $db = "ogrenci";
            $conn = mysqli_connect($servername,$username,$password,$db);

            $sqlQuery = "select * from ogrenci INNER JOIN notlar ON ogrenci.ogrno = notlar.ogrno";
            $result = mysqli_query($conn,$sqlQuery);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $ogrenciNum = $row["ogrno"];
                    $ad = $row["ad"];
                    $soyad = $row["soyad"];
                    $vize = $row["vize"];
                    $final = $row["final"];
                    $ortalama = ($vize * 4) / 10 + ($final * 6) /10;

                    if($vize == ''){
                        $vize = 'GR';
                    }

                    if($final == ''){
                        $final = 'GR';
                        $ortalama = 'Hesaplanamaz';
                    }

                    if($ortalama<50 || $ortalama == 'Hesaplanamaz'){
                        echo"<tr style=background-color:red;color:white>
                        <td>
                        <a href='ayrintiliOgrenciBilgisi.php?num = $ogrenciNum'>$ogrenciNum</a>
                        </td>
                        <td>
                        $ad
                        </td>
                        <td>
                        $soyad
                        </td>
                        <td>
                        $vize
                        </td>
                        <td>
                        $final
                        </td>
                        <td>
                        $ortalama
                        </td>
                    </tr>";
                    }
                    else{
                        echo"<tr>
                        <td>
                        <a href='ayrintiliOgrenciBilgisi.php?num = $ogrenciNum'>$ogrenciNum</a>
                        </td>
                        <td>
                        $ad
                        </td>
                        <td>
                        $soyad
                        </td>
                        <td>
                        $vize
                        </td>
                        <td>
                        $final
                        </td>
                        <td>
                        $ortalama
                        </td>
                    </tr>";
                    }
                }
            }


        ?>
    </table>
    
</body>
</html>