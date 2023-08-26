<?php
if(isset($_POST['submit'])) {
    // Formdan gelen verileri al
    $ad = $_POST['ad'];
    $email = $_POST['email'];
    $mesaj = $_POST['mesaj'];
    
    // Alıcı e-posta adresi
    $alici = 'mehmetalisivridev@gmail.com';
    
    // E-posta başlık bilgileri
    $baslik = 'From: ' . $ad . ' <' . $email . '>';
    
    // E-posta içeriği
    $icerik = "Gönderen: " . $ad . "\n";
    $icerik .= "E-posta: " . $email . "\n";
    $icerik .= "Mesaj: " . $mesaj;
    
    // E-postayı gönder
    if(mail($alici, 'Website İletişim Formu', $icerik, $baslik)) {
        echo 'E-posta başarıyla gönderildi!';
    } else {
        echo 'E-posta gönderilirken bir hata oluştu.';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>İletişim Formu</title>
</head>
<body>
    <h1>İletişim Formu</h1>
    <form method="post" action="">
        <label for="ad">Adınız:</label>
        <input type="text" name="ad" id="ad" required><br><br>
        
        <label for="email">E-posta Adresiniz:</label>
        <input type="email" name="email" id="email" required><br><br>
        
        <label for="mesaj">Mesajınız:</label><br>
        <textarea name="mesaj" id="mesaj" required></textarea><br><br>
        
        <input type="submit" name="submit" value="Gönder">
    </form>
</body>
</html>
