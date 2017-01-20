<?php
	$plate = 100;
	$cleaning = 1000;

	while ($plate>0 && $cleaning>0){
		$cleaning -= 0.5;
		$plate--;
		echo "\n Моющего ср-а осталось: " . $cleaning . '. Тарелок вымыто: ' . $plate;
	}
	echo "\nПосле мытья осталось: тарелок - " . $plate . ', моющего ср-а - ' . $cleaning;
?>