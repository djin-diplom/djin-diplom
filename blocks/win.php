<div id="win">
<div id="overlay" style="opacity: 0.8; display: block;"></div>
<div id="win1">
	
			<br>
			<?php if(isset($hasError)) { //���� ������� ������ ?>
			<p class="error" style="color: #cc0000;font-size: 21px;">���������, ����������, ������������ ���������� ���� �����.</p>
			<?php } ?>
			<?php if(isset($emailSent) && $emailSent == true) { //���� ������ ���������� ?>
			<p style="color: #e94500;font-size: 19px;"><strong>Email ������� ���������!</strong></p>
			<p  style="font-size: 17px;">�������  <strong><?php echo $name;?></strong> �� ������������� ���������� �����! �� �������� � ���� � ���������� �����.</p>
			<?php } ?><br>
		</div>
		</div>