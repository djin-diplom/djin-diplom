<?php
include("email.php");
//���� ����� ����������
if(isset($_POST['submit'])) {

		
	//�������� ���� ���
	if(trim($_POST['name']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['name']);
	}
	//�������� �����������
	if(trim($_POST['message1']) == '') {
		$hasError = true;
	} else {
		$message1 = trim($_POST['message1']);
	}
	$tid = trim($_POST['tid']);
	
	
	
	
	//���� ������ ���, ��������� email
	if(!isset($hasError)) {
		$emailTo = 'djin.diplom@gmail.com';//$email; //���� ������� ��� email
		$body = "
		����: $tid \n\n
		���: $name \n\n
		�����������: $message1 \n\n
		
		
				
				
		";
		
		$headers = 'From site: "Diplom"' . "\r\n" . 'Reply-To: ' . $email;
		
		

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
	include("blocks/win.php");
	}
?>