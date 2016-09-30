<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<? include("blocks/head.php");?>
	<title>Диплом от Джина</title>
	<link rel="shortcut icon" href="favicon.ico">
</head>
<body>
<? include("blocks/order.php");?>
<? include("email.php");?>
	<div id="marquee">По цене одного заказа вы получите сразу несколько работ! В нашей команде только эксперты по всем основным дисциплинам. </div>
<div id="marquee2">По цене одного заказа вы получите сразу несколько работ!</div>
<? include("blocks/header.php");?>
<div id="main">
	<div id="content">
		<? include("blocks/slides.php");?>
		<div style="position: relative; top: -50px;" id="order2"></div>
<div class="box1">
	<iframe id="iframe1" src="email/three-cols-images-clients/build.php" width="830" height="1270"></iframe>
	<iframe id="iframe2" src="email/three-cols-images-clients/build.php" width="410" height="1960"></iframe>
	<iframe id="iframe3" src="email/three-cols-images-clients/build.php" width="305" height="2390"></iframe>
	<!--
	<div class="box4">
		<img src="img/reasons/1.png">
		<p>Не плати за телефонных менеджеров! Воспользуйся акцией "Три цены"</p>
	</div>
	<div class="box4">
		<img src="img/reasons/2.png">
		<p>Не жди, пока работу выполнят. Мы найдем готовую работу за сутки</p>
	</div>
	<div class="box4">
		<img src="img/reasons/3.png">
		<p>Уникальность и качество готовых работ гарантированы нашими экспертами</p>
	</div>
	<div class="box4" style="margin-left: 150px;">
		<img src="img/reasons/4.png">
		<p>Не переплачивай компаниям в 5-6 раз. Возьми у нас контакты лучших авторов.</p>
	</div>
	<div class="box4">
		<img src="img/reasons/5.png">
		<p>К работе бесплатно прилагаются речь, презентация, чертежи и многое другое!</p>
	</div>
	-->
	<div class="shadow_b"></div>
</div>
		<div style="position: relative; top: -50px;" id="order1"></div>
<div class="box1">
	<h1 id="h1form" style="font-weight: normal;">Не теряй время! Закажи работу прямо сейчас!</h1>

<div id="form">
<form class="popup-form" action="order2.php" method="post">
	<input type="hidden" name="tid" value="Заказ работы">
	<div>
		<p class="set"><span>*</span>Заказ</p>
		<select style="width: 310px;height: 30px;border: 1px solid #e3e3e3;" name="type">
			<option>Готовая дипломная</option>
			<option>Готовая курсовая</option>
			<option>Готовый реферат</option>
		</select>
	</div>
	<!--<div>
		<p class="set"><span>*</span>Ваше имя</p>
		<input id="" onclick="" type="text" name="date" placeholder="" value="">
	</div> -->
	<div>
		<p class="set"><span>*</span>Ваше имя</p>
		<input id="" onclick="" type="text" name="name" placeholder="Ваше имя" value="">
	</div>
	<div>
		<p class="set"><span>*</span>Тема работы</p>
		<input id="" onclick="" type="text" name="tid" placeholder="Тема работы" value="">
	</div>
	<div>
		<p class="set"><span>*</span>Ваш Email</p>
		<input id="" onclick="" type="text" name="email" placeholder="Ваш Email" value="">
	</div>
	<div>
		<p class="set">Залейте документы на любой хостинг:<br>dropmefiles.com<br>zalil.ru<br>файлообменник.рф<br>и вставьте ссылку</p>
		<input id="" onclick="" type="text" name="link" placeholder="Ссылка на документы (хранилище)" value="">
	</div>
	<input class="button1" id="submit" type="submit" name="submit" value="Отправить">
</form>

</div><div class="clear"></div>
<p class="set1"><span>*</span> - обязательные поля для ввода</p>
	
	
	
	
	
	
	
	
	
	
	
	<div class="shadow_b"></div>
</div>
<h2 id="zacagiZeichas">Закажи сейчас, и мы найдем для тебя несколько дипломов <br><span>по цене одного заказа!</span></h2>
<div class="box2">
	<div class="number" style="width: 750px;
padding-top: 10px;">
			<p style="margin-left: 135px;"><img src="img/phone2.png" style="float: left;" class="blink">Никаких менеджеров!</p>
			<p style="margin: 0px 20px;"><img src="img/vk.png" style="float: left;"><a href="mailto:<? echo $email; ?>" target="_blank"><? echo $email; ?></a></p>

		</div>
</div>
<div class="clear"></div>
<div id="center" style="height: 820px;">
	<div id="otziv">
	<h2>Мнения наших экспертов</h2>
		<div class="box3" style="margin-left: 45px;">
			<img src="img/otzivi/1.jpg">
			<p>Александра Б. Кандидат технических наук: "Очень удобно по цене одного заказа получать сразу несколько работ. Так студент обретает возможность выбора."</p>
			<p class="name"></p>
		</div>
		<div class="box3">
			<img src="img/otzivi/2.jpg">
			<p>Дмитрий С. Аспирант: "Главная фишка нашего сайта заключается в том, что клиент имеет возможность сам установить цену не свою работу. Мы всегда помогаем студентам получить качественные работы по минимальной цене!"</p>
			<p class="name"></p>
		</div>
		<div class="box3">
			<img src="img/otzivi/3.jpg">
			<p style="font-size: 12px;">Алена Ф. Преподаватель, кандидат физико-математических наук: "Мы выбираем только лучшие работы и при этом руководствуемся правилом ОДНА РАБОТА В ОДНИ РУКИ."</p>
			<p class="name"></p>
		</div>
		<div class="box3" style="margin-left: 45px;">
			<img src="img/otzivi/4.jpg">
			<p>Михаил В. Преподаватель истории, кандидат: "Огромным достоинством компании "Джин Диплом" является короткий срок исполнения каждого заказа. За одни сутки студент может получить готовую работу - и это замечательно!"</p>
			<p class="name"></p>
		</div>
		<div class="box3">
			<img src="img/otzivi/5.jpg">
			<p>Василий Г. Магистр юридических наук, преподаватель МГУ: "Лучше дать нам развернутый список тем, и по каждой из них мы точно найдем работы высокого качества."</p>
			<p class="name"></p>
		</div>
		<div class="box3">
			<img src="img/otzivi/6.jpg">
			<p>Марина С. Аспирант-филолог: "Мы даем ознакомиться с содержанием и введением предлагаемых работ. После этого получаем оплату и высылаем всю работу студенту. Это хорошая схема, которая нравится нашим клиентам!"</p>
			<p class="name"></p>
		</div>
		<div class="clear"></div>
		
	</div>
	<div class="shadow_b1"></div>
</div>
		
		<? include("blocks/footer.php");?>
	</div>
</div>
<div id="slidebox1">
	<a class="close"></a>
	<h2>Акция</h2>
	<h2>"Три цены"</h2>
	<h3>Диплом=3400</h3>
	<h3>Курсовая=1700</h3>
	<h3>Реферат=850</h3>
	<h2>Несколько</h2>
	<h2>работ по цене</h2>
	<h2>одного заказа</h2>
	<a href="#order2">3 причины заказать работу у нас...</a>

</div>


<div class="slide_panel_wrap">
	<div class="slide_panel">
		<p class="open">Три цены для студентов!<br><span class="blink">Нажми!</span></p>
		<p>Предоставляем уникальные работы по трем ценам, по цене одного заказа вы получите несколько работ!</p>
		<a href="#order2"	>Подробнее...</a>
	</div>
</div>

<div class="slide_panel_wrap_2">
	<div class="slide_panel_2">
		<p class="open">Наши контакты<br><br><span class="blink">Нажми!</span></p>
		<p>Для клиентов</p>
		<p><a href="mailto:<? echo $email; ?>" target="_blank"><? echo $email; ?></a></p>
		<p><a href="https://freelance.ru/djin-diplom" target="_blank">Биржа frelance</a></p>
		<p><a href="https://www.fl.ru/users/djin-diplom/" target="_blank">Биржа fl</a></p>
		<p><a href="https://www.weblancer.net/users/djindiplom/" target="_blank">Биржа weblancer</a></p>
		<p><a href="#order1">Форма для заказа</a></p>
		<p><a href="<?php echo $site; ?>" target="_blank"><?php echo $site; ?></a></p>
	</div>
</div>

</body>
</html>