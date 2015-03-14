<?php
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['message'])) {$message = $_POST['message'];}

$address = 'SergeyAndreev-ekb@yandex.ru';
$sub = "Сообщение из раздела контакты сайта Парикмахерская Новый Образ";
$mes = "Автор назвался: $name \nУказал свой адрес: $email \nСодержание письма: $message";
$verify = mail ($address,$sub,$mes,"Content-type:text/plain; charset = windows-1251\r\nFrom:$email");
if ($verify == 'true')
{
echo "<p>Сообщение отправлено";
}
else 
{
echo "<p>Сообщение не отправлено";
}
?>
