<?php 

$nombres = array(1,2,10,6,-5,9, 44);

$min = 0;
	for ($i=0; $i < count($nombres); $i++) { 
		if ($i === 0) {
			$min = $nombres[$i];
		}
		if ($min > $nombres[$i]) {
			$min = $nombres[$i];
		}
	}

	echo "le min est:"." ".$min;
?>