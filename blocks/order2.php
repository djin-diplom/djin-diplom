<?php

//���� ����� ����������
if(isset($_POST['submit'])) {

	
	//�������� ��� ������
	if(trim($_POST['type']) == '') {
		$hasError = true;
	} else {
		$type = trim($_POST['type']);
	}
	
	//�������� ���� �����
	//if(trim($_POST['date']) == '') {
	//	$hasError = true;
	//} else {
	//	$date = trim($_POST['date']);
	//}
	
	//�������� ���� ���
	$name = trim($_POST['name']);
	
	//�������� ���� �������
	if(trim($_POST['number']) == '') {
		$hasError = true;
	} else {
		$number = trim($_POST['number']);
	}
	
	//�������� ���� email
	if(trim($_POST['email']) == '') {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}
	
	//�������� ���� ������
	if(trim($_POST['link']) == '') {
		$hasError = true;
	} else {
		$link = trim($_POST['link']);
	}
	
	
	$tid = trim($_POST['tid']);
	
	
	
	
	//���� ������ ���, ��������� email
	if(!isset($hasError)) {
		$emailTo = 'cedoy333@mail.ru'; //���� ������� ��� email
		$body = "
		����: $tid \n\n
		��� ������: $type \n\n
		���� �����: $date \n\n
		���: $name \n\n
		�������: $number \n\n
		Email: $email \n\n
		���������: $link \n\n
		
		
		
				
				
		";
		
		$headers = 'From site: "Diplom"' . "\r\n" . 'Reply-To: ' . $email;
		
		

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
	include("blocks/win.php");
	}
?>