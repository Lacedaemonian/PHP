<?php
$arbitrary_date	= '12.03.2016 19:50';
	function calendar($arbitrary_date)
	{	
		$today = date('d.m.Y ');
		$yesterday = date('d.m.Y ', strtotime('-1 days'));
		$monthes = array(
			1 => 'Января', 2 => 'Февраля', 3 => 'Марта', 4 => 'Апреля',
			5 => 'Мая', 6 => 'Июня', 7 => 'Июля', 8 => 'Августа',
			9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря'
		);
		if($arbitrary_date == $today){
			echo 'Сегодня ' . date('d.m.Y') . ' в ' . date('H:i');
		}
		else if($arbitrary_date == $yesterday){
			echo 'Вчера ' . date('d.m.Y') . ' в ' . date('H:i');
		}
		else{
			(date('d ') . $monthes[(date('n'))] . date(' Y года, в H:i'));
		}				  
	}
	echo calendar($arbitrary_date);					  
		
