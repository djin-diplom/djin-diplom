<?php
include("email.php");
//Если форма отправлена
if(isset($_POST['submit'])) {

		
	//Проверка Поля имя
	if(trim($_POST['name']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['name']);
	}
	//Проверка комментарий
	if(trim($_POST['message1']) == '') {
		$hasError = true;
	} else {
		$message1 = trim($_POST['message1']);
	}
	$tid = trim($_POST['tid']);
	
	
	
	
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'djin.diplom@gmail.com';//$email; //Сюда введите Ваш email
		$body = "
		Тема: $tid \n\n
		Имя: $name \n\n
		Комментарий: $message1 \n\n
		
		
				
				
		";
		
		$headers = 'From site: "Diplom"' . "\r\n" . 'Reply-To: ' . $email;
		
		

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
	include("blocks/win.php");
	}
?>