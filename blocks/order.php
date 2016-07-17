<?php

//Если форма отправлена
if(isset($_POST['submit1'])) {

		
	//Проверка Поля имя
	if(trim($_POST['name']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['name']);
	}
	//Проверка Поля телефон
	if(trim($_POST['number']) == '') {
		$hasError = true;
	} else {
		$number = trim($_POST['number']);
	}
	$tid = trim($_POST['tid']);
	
	
	
	
	//Если ошибок нет, отправить email
	if(!isset($hasError)) {
		$emailTo = 'cedoy333@mail.ru'; //Сюда введите Ваш email
		$body = "
		Тема: $tid \n\n
		Имя: $name \n\n
		Телефон: $number \n\n
		
		
				
				
		";
		
		$headers = 'From site: "Diplom"' . "\r\n" . 'Reply-To: ' . $email;
		
		

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
	include("blocks/win.php");
	}
?>