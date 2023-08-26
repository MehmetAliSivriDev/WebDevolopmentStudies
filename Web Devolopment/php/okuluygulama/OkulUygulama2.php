<?php

    $unvan = $_POST["unvan"];
    $teorik = $_POST["teorik"];
    $uygulama = $_POST["uygulama"];
    $katsayi = $_POST["katsayi"];

    $toplamDers = 0;

    $dersYuku1 = 10;
    $dersYuku2 = 12;

    if($teorik > 20){
        $teorik = 20;
    }
    if($uygulama > 10){
        $uygulama = 10;
    }

    if($unvan != 4 && $unvan != 0){

        $toplamDers = $teorik + $uygulama;

        if($toplamDers >= 10){

            $toplamDers -= $dersYuku1;
                
                if($unvan = 1){
                    $toplamDers *= 300;
                    $toplamDers *= $katsayi;
                    echo("Alacağınız Ek Ücret:".$toplamDers);
                }
                else if ($unvan = 2){
                    $toplamDers *= 250;
                    $toplamDers *= $katsayi;
                    echo("Alacağınız Ek Ücret:".$toplamDers);
                }
                else if ($unvan = 3){
                    $toplamDers *= 200;
                    $toplamDers *= $katsayi;
                    echo("Alacağınız Ek Ücret:".$toplamDers);
                }
                else if ($unvan = 4){
                    $toplamDers *= 160;
                    $toplamDers *= $katsayi;
                    echo("Alacağınız Ek Ücret:".$toplamDers);
                }
            }
            else{
                if($unvan = 1){
                    $toplamDers *= 300;
                    $toplamDers *= $katsayi;
                    echo("Alacağınız Ek Ücret:".$toplamDers);
                }
                else if ($unvan = 2){
                    $toplamDers *= 250;
                    $toplamDers *= $katsayi;
                    echo("Alacağınız Ek Ücret:".$toplamDers);
                }
                else if ($unvan = 3){
                    $toplamDers *= 200;
                    $toplamDers *= $katsayi;
                    echo("Alacağınız Ek Ücret:".$toplamDers);
                }
                else if ($unvan = 4){
                    $toplamDers *= 160;
                    $toplamDers *= $katsayi;
                    echo("Alacağınız Ek Ücret:".$toplamDers);
            }
        }

    }
    else if($unvan != 0 && $unvan == 4){
        $toplamDers = $teorik + $uygulama;
        
        if($toplamDers >= 12){
                
            $toplamDers -= $dersYuku2;

                if($unvan = 1){
                    $toplamDers *= 300;
                    $toplamDers *= $katsayi;
                    echo("Alacağınız Ek Ücret:".$toplamDers);
                }
                else if ($unvan = 2){
                    $toplamDers *= 250;
                    $toplamDers *= $katsayi;
                    echo("Alacağınız Ek Ücret:".$toplamDers);
                }
                else if ($unvan = 3){
                    $toplamDers *= 200;
                    $toplamDers *= $katsayi;
                    echo("Alacağınız Ek Ücret:".$toplamDers);
                }
                else if ($unvan = 4){
                    $toplamDers *= 160;
                    $toplamDers *= $katsayi;
                    echo("Alacağınız Ek Ücret:".$toplamDers);
                }
            }
            else{
                if($unvan = 1){
                    $toplamDers *= 300;
                    $toplamDers *= $katsayi;
                    echo("Alacağınız Ek Ücret:".$toplamDers);
                }
                else if ($unvan = 2){
                    $toplamDers *= 250;
                    $toplamDers *= $katsayi;
                    echo("Alacağınız Ek Ücret:".$toplamDers);
                }
                else if ($unvan = 3){
                    $toplamDers *= 200;
                    $toplamDers *= $katsayi;
                    echo("Alacağınız Ek Ücret:".$toplamDers);
                }
                else if ($unvan = 4){
                    $toplamDers *= 160;
                    $toplamDers *= $katsayi;
                    echo("Alacağınız Ek Ücret:".$toplamDers);
                }
            }


        }
    
?>
