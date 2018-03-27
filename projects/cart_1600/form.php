<?php
if($_POST)
    {
    $to = "stacyt13@yandex.ru"; //куда отправлять письмо
    $from = 'stacyt13@yandex.ru'; // от кого
    $subject = "Заявка CART 1600"; //тема
    $message = 'Имя: '.$_POST['fio'].'; Телефон: '.$_POST['telephone'].'; E-mail: '.$_POST['email'].';';
    $headers = "Content-type: text/html; charset=UTF-8 \r\n";
    $headers .= "From: <snezon@yandex.ru>\r\n";
    $result = mail($to, $subject, $message, $headers);
 
    if ($result){
        echo "Cообщение успешно отправленно. Пожалуйста, оставайтесь на связи";
    }
    }
?>
