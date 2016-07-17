<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<? include("blocks/head.php");?>
<title>Дипломная работа</title>
</head>
<body style="background-color: #C9C2C2;">
<? include("blocks/order1.php");?>
<div id="win">
<div id="overlay" style="opacity: 0.8; display: block;"></div>
<div id="win1">
	
			<br>
			<?php if(isset($hasError)) { //Если найдены ошибки ?>
			<p class="error" style="color: #cc0000;font-size: 21px;">Проверьте, пожалуйста, правильность заполнения всех полей.<br><a href="index.php">Вернуться на главную</a></p>
			<?php } ?>
			<?php if(isset($emailSent) && $emailSent == true) { //Если письмо отправленл ?>
			<p style="color: #e94500;font-size: 19px;"><strong>Email успешно отправлен!</strong></p>
			<p  style="font-size: 17px;">Спасибо  <strong><?php echo $name;?></strong> за отзыв! <br><a href="index.php">Вернуться на главную</a></p>
			<?php } ?><br>
		</div>
		</div>
</body>
</html>