<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<? include("blocks/head.php");?>
	<title>������ �� �����</title>
	<link rel="shortcut icon" href="favicon.ico">
</head>
<body>
<? include("blocks/order.php");?>
<? include("email.php");?>
	<div id="marquee">�� ���� ������ ������ �� �������� ����� ��������� �����! � ����� ������� ������ �������� �� ���� �������� �����������. </div>
<div id="marquee2">�� ���� ������ ������ �� �������� ����� ��������� �����!</div>
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
		<p>�� ����� �� ���������� ����������! ������������ ������ "��� ����"</p>
	</div>
	<div class="box4">
		<img src="img/reasons/2.png">
		<p>�� ���, ���� ������ ��������. �� ������ ������� ������ �� �����</p>
	</div>
	<div class="box4">
		<img src="img/reasons/3.png">
		<p>������������ � �������� ������� ����� ������������� ������ ����������</p>
	</div>
	<div class="box4" style="margin-left: 150px;">
		<img src="img/reasons/4.png">
		<p>�� ������������ ��������� � 5-6 ���. ������ � ��� �������� ������ �������.</p>
	</div>
	<div class="box4">
		<img src="img/reasons/5.png">
		<p>� ������ ��������� ����������� ����, �����������, ������� � ������ ������!</p>
	</div>
	-->
	<div class="shadow_b"></div>
</div>
		<div style="position: relative; top: -50px;" id="order1"></div>
<div class="box1">
	<h1 id="h1form" style="font-weight: normal;">�� ����� �����! ������ ������ ����� ������!</h1>

<div id="form">
<form class="popup-form" action="order2.php" method="post">
	<input type="hidden" name="tid" value="����� ������">
	<div>
		<p class="set"><span>*</span>�����</p>
		<select style="width: 310px;height: 30px;border: 1px solid #e3e3e3;" name="type">
			<option>������� ���������</option>
			<option>������� ��������</option>
			<option>������� �������</option>
		</select>
	</div>
	<!--<div>
		<p class="set"><span>*</span>���� ���</p>
		<input id="" onclick="" type="text" name="date" placeholder="" value="">
	</div> -->
	<div>
		<p class="set"><span>*</span>���� ���</p>
		<input id="" onclick="" type="text" name="name" placeholder="���� ���" value="">
	</div>
	<div>
		<p class="set"><span>*</span>���� ������</p>
		<input id="" onclick="" type="text" name="tid" placeholder="���� ������" value="">
	</div>
	<div>
		<p class="set"><span>*</span>��� Email</p>
		<input id="" onclick="" type="text" name="email" placeholder="��� Email" value="">
	</div>
	<div>
		<p class="set">������� ��������� �� ����� �������:<br>dropmefiles.com<br>zalil.ru<br>�������������.��<br>� �������� ������</p>
		<input id="" onclick="" type="text" name="link" placeholder="������ �� ��������� (���������)" value="">
	</div>
	<input class="button1" id="submit" type="submit" name="submit" value="���������">
</form>

</div><div class="clear"></div>
<p class="set1"><span>*</span> - ������������ ���� ��� �����</p>
	
	
	
	
	
	
	
	
	
	
	
	<div class="shadow_b"></div>
</div>
<h2 id="zacagiZeichas">������ ������, � �� ������ ��� ���� ��������� �������� <br><span>�� ���� ������ ������!</span></h2>
<div class="box2">
	<div class="number" style="width: 750px;
padding-top: 10px;">
			<p style="margin-left: 135px;"><img src="img/phone2.png" style="float: left;" class="blink">������� ����������!</p>
			<p style="margin: 0px 20px;"><img src="img/vk.png" style="float: left;"><a href="mailto:<? echo $email; ?>" target="_blank"><? echo $email; ?></a></p>

		</div>
</div>
<div class="clear"></div>
<div id="center" style="height: 820px;">
	<div id="otziv">
	<h2>������ ����� ���������</h2>
		<div class="box3" style="margin-left: 45px;">
			<img src="img/otzivi/1.jpg">
			<p>���������� �. �������� ����������� ����: "����� ������ �� ���� ������ ������ �������� ����� ��������� �����. ��� ������� �������� ����������� ������."</p>
			<p class="name"></p>
		</div>
		<div class="box3">
			<img src="img/otzivi/2.jpg">
			<p>������� �. ��������: "������� ����� ������ ����� ����������� � ���, ��� ������ ����� ����������� ��� ���������� ���� �� ���� ������. �� ������ �������� ��������� �������� ������������ ������ �� ����������� ����!"</p>
			<p class="name"></p>
		</div>
		<div class="box3">
			<img src="img/otzivi/3.jpg">
			<p style="font-size: 12px;">����� �. �������������, �������� ������-�������������� ����: "�� �������� ������ ������ ������ � ��� ���� ��������������� �������� ���� ������ � ���� ����."</p>
			<p class="name"></p>
		</div>
		<div class="box3" style="margin-left: 45px;">
			<img src="img/otzivi/4.jpg">
			<p>������ �. ������������� �������, ��������: "�������� ������������ �������� "���� ������" �������� �������� ���� ���������� ������� ������. �� ���� ����� ������� ����� �������� ������� ������ - � ��� ������������!"</p>
			<p class="name"></p>
		</div>
		<div class="box3">
			<img src="img/otzivi/5.jpg">
			<p>������� �. ������� ����������� ����, ������������� ���: "����� ���� ��� ����������� ������ ���, � �� ������ �� ��� �� ����� ������ ������ �������� ��������."</p>
			<p class="name"></p>
		</div>
		<div class="box3">
			<img src="img/otzivi/6.jpg">
			<p>������ �. ��������-�������: "�� ���� ������������ � ����������� � ��������� ������������ �����. ����� ����� �������� ������ � �������� ��� ������ ��������. ��� ������� �����, ������� �������� ����� ��������!"</p>
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
	<h2>�����</h2>
	<h2>"��� ����"</h2>
	<h3>������=3400</h3>
	<h3>��������=1700</h3>
	<h3>�������=850</h3>
	<h2>���������</h2>
	<h2>����� �� ����</h2>
	<h2>������ ������</h2>
	<a href="#order2">3 ������� �������� ������ � ���...</a>

</div>


<div class="slide_panel_wrap">
	<div class="slide_panel">
		<p class="open">��� ���� ��� ���������!<br><span class="blink">�����!</span></p>
		<p>������������� ���������� ������ �� ���� �����, �� ���� ������ ������ �� �������� ��������� �����!</p>
		<a href="#order2"	>���������...</a>
	</div>
</div>

<div class="slide_panel_wrap_2">
	<div class="slide_panel_2">
		<p class="open">���� ��������<br><br><span class="blink">�����!</span></p>
		<p>��� ��������</p>
		<p><a href="mailto:<? echo $email; ?>" target="_blank"><? echo $email; ?></a></p>
		<p><a href="https://freelance.ru/djin-diplom" target="_blank">����� frelance</a></p>
		<p><a href="https://www.fl.ru/users/djin-diplom/" target="_blank">����� fl</a></p>
		<p><a href="https://www.weblancer.net/users/djindiplom/" target="_blank">����� weblancer</a></p>
		<p><a href="#order1">����� ��� ������</a></p>
		<p><a href="<?php echo $site; ?>" target="_blank"><?php echo $site; ?></a></p>
	</div>
</div>

</body>
</html>