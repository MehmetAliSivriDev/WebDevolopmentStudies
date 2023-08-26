<?php
include "header.php";
include "menu.php";
?>
<!-- buraya orta kısımda yapılacaklarr eklenecek-->
<section>
    <p>Not Listeniz</p>

    <table border= "1" >
        <tr  style="font-weight:bold">
            <td>Ders Adı</td>
            <td>Vize</td>
            <td>Final</td>
            <td>Geçme Notu</td>
        </tr>

        <?php 
            $kul = $_SESSION["ogrno"];
            $sql = "SELECT * FROM notlar n, dersler d where n.ogrno = $kul and n.derskod = d.derskod";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    $dersadi = $row["dersadi"];
                    $derskod = $row["derskod"];
                    $vize = $row["vize"];
                    $final = $row["final"];
                    $gecmenotu = $row["gecmenotu"];

                    echo"
                    <tr>
                        <td>
                            $dersadi
                        </td>
                        <td>
                            $vize
                        </td>
                        <td>
                            $final
                        </td>
                        <td>
                            $gecmenotu
                        </td>
                    </tr>";

                }
            }
        ?>
    </table>

</section>
<!-- orta kısmın sonu-->
<?php
include "alt.php";
?>