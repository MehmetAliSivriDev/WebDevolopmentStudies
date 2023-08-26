<?php
include "dbbaglan.php";
@SESSION_destroy();
//ortadaki bölümün kodlarý burada olcak
//echo "Güvenli çýkýþ Yaptýnýz. <br />Yönlendiriliyorsunuz, lütfen bekleyiniz.";
header ("refresh: 0; url=index.php");
//orta bölümün sonu