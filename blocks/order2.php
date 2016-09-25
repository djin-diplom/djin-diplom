<?php
include("/home/u632189451/public_html/email.php");
//Если форма отправлена
if(isset($_POST['submit'])) {

	
	//Проверка тип работы
	if(trim($_POST['type']) == '') {
		$hasError = true;
	} else {
		$type = trim($_POST['type']);
	}
	
	//Проверка дата сдачи
	//if(trim($_POST['date']) == '') {
	//	$hasError = true;
	//} else {
	//	$date = trim($_POST['date']);
	//}
	
	//Проверка Поля имя
	$name = trim($_POST['name']);
	
	//Проверка поля телефон
	//if(trim($_POST['number']) == '') {
	//	$hasError = true;
	//} else {
	//	$number = trim($_POST['number']);
	//}
	
	//Проверка поля email
	if(trim($_POST['email']) == '') {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}
	
	//Проверка поля ссылка
	if(trim($_POST['link']) == '') {
		$hasError = true;
	} else {
		$link = trim($_POST['link']);
	}
	
	
	$tid = trim($_POST['tid']);
	
	
	
	
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'djin.diplom@gmail.com'; //Сюда введите Ваш email
		$body = "
		Имя: $name \n\n
		Email: $email \n\n
		Тип работы: $type \n\n
		Тема: $tid \n\n
		Документы: $link \n\n	
		";
		// Дата сдачи: $date \n\n
		// Телефон: $number \n\n
		
		$headers = 'From site: "djin-diplom"' . "\r\n" . 'Reply-To: ' . $email;

		$subject = "Заказ клиента $name";

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
	include("blocks/win.php");
	}
?>