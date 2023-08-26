<nav class="n-menu">
    <?php
if (!isset($_SESSION["ogrno"])){
?>
  <ul>
    <li><a href="index.php">ANASAYFA</a></li>
	<li><a href="login.php" id="giris">Giriş</a></li>
	<li><a href="iletisim.php" id="iletisim">İletişim</a></li>
	<li><a href="bizkimiz.php" id="bizkimiz">Biz Kimiz</a></li>
  </ul>

<?php
}
else{
?>
<ul>
	<li><a href="index.php">ANASAYFA</a></li>
	<li><a href="notlarim.php" id="notlarim">Notlarım</a></li>
	<li><a href="iletisim.php" id="iletisim">İletişim</a></li>
	<li><a href="sifredegistir.php" id="sifredegistir">Şifre Değiştir</a></li>
	<li><a href="bizkimiz.php" id="bizkimiz">Biz Kimiz</a></li>
	<li><a href="cikis.php">Güvenli Çıkış</a></li>
</ul>
<?php
}
?>
</nav>