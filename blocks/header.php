<? include("email.php");?>
<div id="header">
	<div id="center">
		<img id="logo" src="img/logo.png" class="logo">
		<div class="number">
			<p id="pnumber" style="margin:0px 40px 0px 250px"><img src="img/phone2.png" style="float: left;" class="blink">Никаких менджеров!</p>
			<p style="margin: 0px 20px;"><img src="img/vk.png" style="float: left;"><a href="mailto:<? echo $email; ?>" target="_blank"><? echo $email; ?></a></p>
		</div>

		<div id="vkvk" class="order">
			<img src="img/vk.png" style="float: left;width: 70px;"><a href="#order1" id="zakaz1" class="blink">Купить работу</a>
		</div>
	</div>
	<h1 id="site_name"><? echo $site_name; ?></h1>
</div>