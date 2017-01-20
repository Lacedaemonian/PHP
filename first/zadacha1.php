<?php
	echo date("\nh:i:s \n\n");
	$minute = (int) date('i');
	$time = $minute % 3;
	echo $time < 5 ? 'Сфетофор горит зелёным!' : 'Светофор горит красным!';
?>