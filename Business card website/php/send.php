<?php
 require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$text = $_POST['Number'];

// Формирование самого письма
$title = "Заголовок письма";
$body = "
<h2>Заявка</h2>
<b>Сообщение:</b><br>$text
";

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.mail.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'shafeev2002@mail.ru'; // Логин на почте
    $mail->Password   = 'g7G15ND5W0vfgJe6KGNA'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('shafeev2002@mail.ru', 'Сайт'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('shafeev2002@mail.ru');  // Ещё один, если нужен

  
// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
header('Location: /OpusMagnum.php');
/*
// Отображение результата
echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);
*/
?>