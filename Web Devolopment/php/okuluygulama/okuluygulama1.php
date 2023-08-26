<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Alt Metin Bulucu </h1>
    <form action="okuluygulama1.php" method="post">
        <p>Aradığınız Metin:</p>
        <input type="text" name = "metin_ara" placeholder="Alt Metin Giriniz...">
        <br>
        <p>İçinde Aranılacak Metin:</p>
        <input type="text" name = "metin_bul", placeholder="Metin Giriniz...">
        <br><br>
        <input type="submit" name="bul" value="Bul"/>
    

    

    </form>

    
    <?php

        $metin_ara = $_POST['metin_ara'];
        $metin_bul = $_POST['metin_bul'];

        $sonuc = substr_count($metin_ara, $metin_bul);


        if ($sonuc >= 3) {
            echo '<p>'.preg_replace('/'.$metin_bul.'/', '<span style="color:red">'.$metin_bul.'</span>', $metin_ara, 3).'</p>';
            echo "Aranan alt metin toplamda ".$sonuc." kez geçiyor.<br>";
            
        } else {
            echo "Aranan alt metin ana metinde en az üç kere bulunmalıdır ve ana metniniz ".str_word_count($metin_ara)." kelimeye sahiptir.";
        }
    ?>
    
</body>
</html>