<?php 

    $altMetin = $_POST["AltMetin"];
    $aranilacakMetin = $_POST["AranilanMetin"];

    $sonuc = substr_count($altMetin,$aranilacakMetin);

    if($sonuc > 3){
        echo ("<p>".preg_replace('/'.$aranilacakMetin.'/',"<span style='color: red'>$aranilacakMetin</span>",$altMetin,3)."</p>");
        echo ("Metinde $aranilacakMetin $sonuc kez geçmektedir.");
    }
    else{
        echo ("Aranılan alt metin en az üç kere bulunmalıdır ve metinde toplamda".str_word_count($altMetin)." kelime vardır.");
    }

?>