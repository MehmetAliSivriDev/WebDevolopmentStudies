<?php
$to_email = "hasanemrediscord@gmail.com"; // Alıcının e-posta adresi
$subject = "Deneme"; // E-posta konusu
$body = "Merhaba,\nBu bir test e-postasıdır."; // E-posta içeriği

$headers = 'From: sivri109@gmail.com' . "\r\n" .
           'Reply-To: sivri109@gmail.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

ini_set("SMTP","smtp.gmail.com");
ini_set("smtp_port","587");

if (mail($to_email, $subject, $body, $headers)) {
    echo "E-posta başarıyla gönderildi.";
} else {
    echo "E-posta gönderilirken bir hata oluştu.";
}
?>
