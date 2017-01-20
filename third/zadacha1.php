<?php
	function daysToNewYear($dayYear = 364) 
	{
    return $dayYear - (int) date('z');
	}
echo 'До нового года осталось: ' . daysToNewYear() . ' дней! Ура!!! Совсем чуть-чуть.';
?>