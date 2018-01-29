<?php
  //Если форма отправлена
  if(isset($_POST['submit'])) {
 //Проверка Поля ИМЯ
  if(trim($_POST['name']) == '') {
  $hasError = true;
  } else {
  $name = trim($_POST['name']);
  }
  //Проверка поля phone
  if(trim($_POST['phone']) == '') {
  $hasError = true;
  } else {
  $phone = trim($_POST['phone']);
  }
 //Проверка правильности ввода EMAIL
  if(trim($_POST['email']) == '')  {
  $hasError = true;
  } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
  $hasError = true;
  } else {
  $email = trim($_POST['email']);
  }
 //Проверка наличия ТЕКСТА сообщения
  $comments = trim($_POST['message']);
 //Если ошибок нет, отправить email
  if(!isset($hasError)) {
  $emailTo = 'shest28@gmail.com';
  $body = "Name: $name \n\nEmail: $email \n\nPhone: $phone \n\nComments:\n $comments";
  $headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
 mail($emailTo, $phone, $body, $headers);
  $emailSent = true;
  }
}
?>
