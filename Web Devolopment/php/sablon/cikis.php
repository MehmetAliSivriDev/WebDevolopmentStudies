<?php
include "dbbaglan.php";
@SESSION_destroy();
//ortadaki b�l�m�n kodlar� burada olcak
//echo "G�venli ��k�� Yapt�n�z. <br />Y�nlendiriliyorsunuz, l�tfen bekleyiniz.";
header ("refresh: 0; url=index.php");
//orta b�l�m�n sonu