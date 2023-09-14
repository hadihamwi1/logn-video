<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'emailsend/autoload.php'; // تأكد من تعيين المسار الصحيح لملف autoload.php

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 0; // تعيين مستوى التصحيح الذي تحتاجه
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; // استبدل بمعلومات الخادم البريدي الخاص بك
    $mail->SMTPAuth   = true;
    $mail->Username   = 'haidarhaidarh9104@gmail.com'; // استبدل بمعلومات الحساب البريدي الخاص بك
    $mail->Password   = 'nglmafnubmbviiec';
    $mail->SMTPSecure = 'ssl'; // يمكنك استخدام 'ssl' أو 'tls' حسب إعدادات الخادم البريدي الخاص بك
    $mail->Port       = 465; // تغيير الرقم اعتمادًا على إعدادات الخادم
} catch (Exception $e) {
    echo 'حدث خطأ أثناء تكوين PHPMailer: ' . $e->getMessage();
    exit;
}
?> 