<?php
 if (isset($_POST['question'])) {$question = $_POST['question'];}
 if (isset($_POST['name'])) {$name = $_POST['name'];}
 if (isset($_POST['email'])) {$email = $_POST['email'];}
 if (isset($_POST['massage'])) {$massage = $_POST['massage'];}

//Куда отправить
 $address = "tanya.pustyak@mail.ru";

//Текст сообщения
 $mes = "Характер обращения: $question \r\nИмя: $name  \r\nE-mail: $email  \r\nТекст обращения: $massage";

//Заголовок письма
$soobshenie= "Новое обращение на сайте Продукт";
/* А эта функция как раз занимается отправкой письма на указанный вами email */
 $send = mail ($address,$soobshenie,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
 if ($send == 'true')
 {
?>
<?php
echo "Спасибо, мы свяжемся с вами в течение нескольких дней.<br><a href=contact.html>Нажмите,</a> чтобы вернуться на страницу.";
}
else 
{
echo "<p><b>Ошибка. Сообщение не отправлено.";
}
?>