<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="">
		<label>Nombre à multiplier :</label>
		<input type="number" name="nombre">
		<label>Longueur :</label>
		<input type="number" name="longueur">
		<button type="submit">Lancer</button>

	</form>
	<p>Resultat : </p>

</body>
</html>


<?php
	if (isset($_POST['nombre']) && isset($_POST['longueur'])) {
		$nbr1 = $_POST['nombre'];
		$longueur = $_POST['longueur'];	
	 		
	 	for ($i=0; $i <=$longueur ; $i++) { 
		echo "$nbr1 * $i : ". $nbr1*$i ."<br>";
		}
	}
?>


<!-- EXO FOR

	creation table de multiplication
-->


