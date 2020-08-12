<?php 
	if (isset($_POST['age'])) {
		$age = $_POST['age'];
	}
/*
	if ($age <18 ) {
		print "tsy ampy taona ianao";
	}elseif($age == 18){
		echo "efa ampy taona";
	}else{
		print "efa lehibe";
	}*/


/*	switch ($age) {
		case $age<10:
			echo "mbola kely ianao";
			break;
		case $age<18:
			echo "mbola tsy ampy taona ianao";
			break;
		case $age ==18;
			echo "ampy taona";
			break;
		default:
			echo "efa lehibe ianao";
			break;
	}*/


	/*$i = 1;
	while ( $i<= 10) {
		echo $age."*".$i."=".$i*$age."<br>";
		$i ++;
	}*/



	for ($i=0; $i <= 10; $i++) { 
		echo $age."*".$i."=".$i*$age."<br>";
		}
 ?>