<?php

//���� ����� ����������
if(isset($_POST['submit1'])) {

		
	//�������� ���� ���
	if(trim($_POST['name']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['name']);
	}
	//�������� ���� �������
	if(trim($_POST['number']) == '') {
		$hasError = true;
	} else {
		$number = trim($_POST['number']);
	}
	$tid = trim($_POST['tid']);
	
	
	
	
	//���� ������ ���, ��������� email
	if(!isset($hasError)) {
		$emailTo = 'cedoy333@mail.ru'; //���� ������� ��� email
		$body = "
		����: $tid \n\n
		���: $name \n\n
		�������: $number \n\n
		
		
				
				
		";
		
		$headers = 'From site: "Diplom"' . "\r\n" . 'Reply-To: ' . $email;
		
		

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
	include("blocks/win.php");
	}
?>