<?php

$per = 1;

switch ($per){
	case 1:
		$email = 'djin.diplom@gmail.com';
		$site = 'djin-diplom.96.lt';
		$site_name = '������ �� �����';
		break;
	case 2:
		$email = 'diplomdjin@gmail.com';
		$site = 'http://djin-diplom.hol.es';
		$site_name = '������ �� ������';
		break;
}

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
	//if(trim($_POST['number']) == '') {
	//	$hasError = true;
	//} else {
	//	$number = trim($_POST['number']);
	//}
	
	//�������� ���� email
	if(trim($_POST['email']) == '') {
		$hasError = true;
	} else {
		$email_stud = trim($_POST['email']);
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
		$emailTo = $email;//���� ������� ��� email
		$body = "
		���: $name \n\n
		Email: $email_stud \n\n
		��� ������: $type \n\n
		����: $tid \n\n
		���������: $link \n\n	
		";
		// ���� �����: $date \n\n
		// �������: $number \n\n
		
		$headers = 'From site: "djin-diplom"' . "\r\n" . 'Reply-To: ' . $email_stud;

		$subject = "����� ������� $name";

		mail($emailTo, $subject, $body, $headers);
		$emailSent = true;
	}
	include("blocks/win.php");
	}
?>