<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<? include("blocks/head.php");?>
<title>��������� ������</title>
</head>
<body style="background-color: #C9C2C2;">
<? include("blocks/order1.php");?>
<div id="win">
<div id="overlay" style="opacity: 0.8; display: block;"></div>
<div id="win1">
	
			<br>
			<?php if(isset($hasError)) { //���� ������� ������ ?>
			<p class="error" style="color: #cc0000;font-size: 21px;">���������, ����������, ������������ ���������� ���� �����.<br><a href="index.php">��������� �� �������</a></p>
			<?php } ?>
			<?php if(isset($emailSent) && $emailSent == true) { //���� ������ ���������� ?>
			<p style="color: #e94500;font-size: 19px;"><strong>Email ������� ���������!</strong></p>
			<p  style="font-size: 17px;">�������  <strong><?php echo $name;?></strong> �� �����! <br><a href="index.php">��������� �� �������</a></p>
			<?php } ?><br>
		</div>
		</div>
</body>
</html>