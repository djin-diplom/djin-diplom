<div id="win">
<div id="overlay" style="opacity: 0.8; display: block;"></div>
<div id="win1">
	
			<br>
			<?php if(isset($hasError)) { //Если найдены ошибки ?>
			<p class="error" style="color: #cc0000;font-size: 21px;">Проверьте, пожалуйста, правильность заполнения всех полей.</p>
			<?php } ?>
			<?php if(isset($emailSent) && $emailSent == true) { //Если письмо отправленл ?>
			<p style="color: #e94500;font-size: 19px;"><strong>Email успешно отправлен!</strong></p>
			<p  style="font-size: 17px;">Спасибо  <strong><?php echo $name;?></strong> за использование контактной формы! Мы свяжемся с Вами в кратчайшие сроки.</p>
			<?php } ?><br>
		</div>
		</div>