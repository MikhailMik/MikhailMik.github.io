<?php
if($_POST)
    {
    $to = "snezon@yandex.ru"; //куда отправлять письмо
    $from = 'snezon@yandex.ru'; // от кого
    $subject = "Заявка земельный участок"; //тема
    $message = 'Имя: '.$_POST['name'].'; Телефон: '.$_POST['telephone'].';';
    $headers = "Content-type: text/html; charset=UTF-8 \r\n";
    $headers .= "From: <snezon@yandex.ru>\r\n";
    $result = mail($to, $subject, $message, $headers);
 
    if ($result){
        echo "Cообщение успешно отправленно. Пожалуйста, оставайтесь на связи";
    }
    }
?>