<?php 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        extract($_POST);
    
        echo "Veri 1: " . $veri1 . "<br>Veri 2: " . $veri2;
    }

?>