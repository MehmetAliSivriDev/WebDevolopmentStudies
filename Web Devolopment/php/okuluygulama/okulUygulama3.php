<?php 

    $dizi = range(1,1000);

    echo("<br><br> 1.Sorunun Cevabı <br><br>");

    function soru1($dizi){
        
        $sonuc1 = 0;

        foreach ($dizi as $deger){
            
            $sonuc1 += $deger;
        }

        $sonuc1 = ($sonuc1)**2;

        $sonuc2 = 0;

        foreach ($dizi as $deger){
            
            $sonuc2 += ($deger)**2;
        }
        echo("Sonuç:".$sonuc1-$sonuc2);

    }

    soru1($dizi);

    echo("<br><br> 2.Sorunun Cevabı <br>");


    $myArray = array 
    (
        array("Ey","yükselen","yeni","nesil"),
        array("İstikbal","sizindir"),
        array("Cumhuriyeti","biz","kurduk","onu"),
        array("devam","ettirecek","sizlersiniz")
    );
    echo("<br><br><br>");

    function soru2($dizi)
    {
        foreach ($dizi as $index => $deger) {
            if (is_array($deger)) {

                soru2($deger);
            } else {
                echo $index." : ".$deger."\n"."<br>";
            }
        }
    }
    soru2($myArray);
    echo("<br><br><br>");

    echo("3.Sorunun Cevabı <br><br>");

    function soru3(){
        
        $faktoriyel = gmp_fact(100); // 100!'i hesaplar
        $toplam = 0;
        
        while ($faktoriyel > 0) {
            $toplam += gmp_mod($faktoriyel, 10); // son haneler toplanır
            $faktoriyel = gmp_div_q($faktoriyel, 10); // son hane çıkarılır
        }
        
        echo("Faktoriyelin Elemanlarının Toplamı:".$toplam);
        
    
    }
    soru3();

    


?>