<?php
function check()
	{	
		$num = 4224;
		$back = strrev($num);
		if ($num==$back){
			echo "It's true";
		}else{
			echo "It's false";
		}
	}
	echo check();
?>