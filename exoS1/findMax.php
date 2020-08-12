<?php 
	$nombres = array(1,2,10,6,-5,9, 44);

	$max = 0;
	for ($i=0; $i < count($nombres); $i++) { 
		if ($i === 0) {
			$max = $nombres[$i];
		}
		if ($max < $nombres[$i]) {
			$max = $nombres[$i];
		}
	}
	echo "le maX est:"." ".$max; 

 ?>