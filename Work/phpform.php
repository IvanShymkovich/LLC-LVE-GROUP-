<?php
$name = trim(htmlspecialchars($_POST['name']));
$email = trim(htmlspecialchars($_POST['email']));
$phone = trim(htmlspecialchars($_POST['phone']));
$message = trim(htmlspecialchars($_POST['message']));

$to = "Info@orox.by"; // емайл получателя данных из формы
$tema = "Форма обратной связи на PHP"; // тема полученного емайла

$message = "Ваше имя: " . $name . "<br>"; //присвоить переменной значение, полученное из формы name=name
$message .= "E-mail: " . $email . "<br>"; //полученное из формы name=email
$message .= "Номер телефона: " . $phone . "<br>"; //полученное из формы name=phone
$message .= "Сообщение: " . $message . "<br>"; //полученное из формы name=message


$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
$result = mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
