<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ek Ders Ucret Hesaplama</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <style>
        input{
            width: 250px;
            height: 30px;
        }
        select{
            width: 250px;
            height: 30px;
        }
    </style>
</head>
<body>

<?php  

if(isset($_POST["hesapla"]))
{

    $unvan = $_POST["unvan"];
    $teorik = $_POST["teorik"];
    $uygulama = $_POST["uygulama"];
    $katSayi = $_POST["katSayi"];
    $ekUcret = $_POST["ekUcret"];

    $dersYuku;
    $eldeEdilenEkDersSaati;
    $ekDersSaati = 20;
    $teorikSaati = 20;
    $uygulamaSaati = 10;

    if($teorik > $teorikSaati){
        $teorik = $teorikSaati;
    }

    if($uygulama > $uygulamaSaati){
        $uygulama = $uygulamaSaati;
    }

    $toplamSaat = $teorik + $uygulama;

    if($unvan == "profdr" || $unvan == "docdr" || $unvan == "yrddoc"){
        $dersYuku = 10;
        $eldeEdilenEkDersSaati = $toplamSaat - $dersYuku;
    }
    else{
        $dersYuku = 12;
        $eldeEdilenEkDersSaati = $toplamSaat - $dersYuku;
    }

    if($eldeEdilenEkDersSaati > $ekDersSaati){
        $eldeEdilenEkDersSaati = $ekDersSaati;
    }

    switch($unvan){

        case '0':
            echo("Lütfen Bir Ünvan Seçiniz!");
            break;
        case 'profdr':
            $ekUcret = $katSayi * $eldeEdilenEkDersSaati * 300;
            break;
        case 'docdr':
            $ekUcret = $katSayi * $eldeEdilenEkDersSaati * 250;
            break;
        case 'yrddoc':
            $ekUcret = $katSayi * $eldeEdilenEkDersSaati * 200;
            break;
        case 'ogrgr':
            $ekUcret = $katSayi * $eldeEdilenEkDersSaati * 160;
            break;
        default : 
            break;

    }
    


}

?>

    <h1>EK DERS ÜCRETİ HESAPLAYICI</h1>
    <form action="" method="post">
        <h3>Ünvan</h3>
        <select name="unvan">
            <option value="0">Lütfen Bir Ünvan Seçiniz</option>
            <option value="profdr">Prof. Dr.</option>
            <option value="docdr">Doç. Dr.</option>
            <option value="yrddoc">YRD. Doç. Dr.</option>
            <option value="ogrgr">Öğr. Gör</option>
        </select>

        <h3>Teorik:</h3>
        <input type="number" name="teorik" placeholder="Teorik Ders Saatini Giriniz">

        <h3>Uygulama:</h3>
        <input type="number" name="uygulama" placeholder="Uygulama Ders Saatini Giriniz">

        <h3>Aylık Katsayı:</h3>
        <input type="number" name="katSayi" value="0.05592">

        <h3>Alacağınız Ek Ücret</h3>
        <input type="text" name="ekUcret" value="<?php if(empty($ekUcret)){echo "";}else{echo "$ekUcret";}?>">
        <br>
        <br>
        <button type="submit" name="hesapla">Hesapla</button>

    </form>        


</body>
</html>