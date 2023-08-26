<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <title>Doktor Arama</title>
    <style>   
   
  
    
    </style>
</head>

<html>

<body>
 
<h2>Gelen Kutusu</h2>

    <form method="POST" action="">


        <label for="bölüm">Bölüm:</label>
        <select name="bölüm"  id="bölüm">
        <option value="#" ></option>
            <option value="üroloji">Üroloji</option>
            <option value="BeslenmeVeDiyet">Beslenme ve Diyet</option>

            <option value="RuhSağlığıVeHastalıkları">RuhSağlığıVeHastalıkları</option>
     
            <option value="KlinikPsikolog">KlinikPsikolog</option>
        
            <option value="Algoloji">Algoloji</option>
            
            <option value="KulakBurunBoğazHastalıkları">KulakBurunBoğazHastalıkları</option>
            
            <option value="nöroloji">nöroloji</option>
            
            <option value="BeyinVeSinirCerrahisi">BeyinVeSinirCerrahisi</option>
            
            <option value="GenelCerrahi">GenelCerrahi</option>
            
            <option value="kardiyoloji">kardiyoloji</option>
        
            <option value="dahiliye">dahiliye</option>
        
            <option value="AcilServis">AcilServis</option>
        
            <option value="FizikTedaviVeRehabilitasyon">FizikTedaviVeRehabilitasyon</option>
        
            <option value="biorezonans">biorezonans</option>
        
            <option value="CocukSaglıgıVeHastalıkları">CocukSaglıgıVeHastalıkları</option>
            
            <option value="GozHastalıkları">GozHastalıkları</option>

        </select>
        <br><br>
        <input type="submit" name="submit" value="Listele">
    </form>



    <?php


    if (isset($_POST['submit'])) {
      
       
        function test_input($data){ 
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
       

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hastaneveritabani";
        $conn = mysqli_connect($servername,$username,$password,$dbname);

      
        $Bölüm = test_input($_POST["bölüm"]);
        
        $sql = "SELECT * from hasta_soru where poliklinik='$Bölüm'";
        $result = mysqli_query($conn,$sql);

        while($row = $result ->fetch_assoc())
        {        

            echo("Hasta Eposta".$row["hasta_eposta"]."<br>"."Poliklinik".$row["poliklinik"]."<br>"."Hasta Soru:".$row["soru"]);
            echo"<button type='submit'>Cevap Ver</button>";
            echo"-------------------------------------------------------------------------------------------------------------<br>";

        }
              }else {"Mesajınız bulunmamaktadır!!! " ;}

?>


    