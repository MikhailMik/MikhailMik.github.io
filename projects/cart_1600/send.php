$fio = $_POST['fio'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];

$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$telephone = htmlspecialchars($telephone);

$fio = urldecode($fio);
$email = urldecode($email);
$telephone = urldecode($telephone);

$fio = trim($fio);
$email = trim($email);
$telephone = trim($telephone);

mail("example@mail.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: example2@mail.ru \r\n");