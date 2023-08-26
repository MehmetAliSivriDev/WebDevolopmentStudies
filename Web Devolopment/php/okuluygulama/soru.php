<?php

    $toplam = 0;
    $adet = 0;

    while($toplam <= 500)
    {
        $sayi = rand(1,100);    
        $toplam += $sayi;
        $adet++;
    }

    echo "toplam sonuç :".$toplam." Bu sonuç ".$adet." sayi kullanılarak elde edilmiştir.";

?>