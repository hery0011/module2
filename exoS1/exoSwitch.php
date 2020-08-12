<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="">
		<label>Nombre 1</label>
		<input type="number" name="number_1">
		<label>Nombre 2</label>
		<input type="number" name="number_2">
		<label>Operation</label>
		<select name="operation">
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
			<option value="%">%</option>
		</select>
		<input type="submit" value="Calculer">
	</form>


	<?php 
		if (isset($_POST['number_1']) && isset($_POST['number_2']) && isset($_POST['operation'])) {
				$nbr1 = $_POST['number_1'];
				$nbr2 = $_POST['number_2'];
				$operation = $_POST['operation'];

				$resultat = '';
				switch ($operation) {
					case '+':
						$resultat = $nbr1 + $nbr2;
						break;

					case '-':
						$resultat = $nbr1 - $nbr2;
						break;

					case '*':
						$resultat = $nbr1 * $nbr2;
						break;

					case '/':
						$resultat = $nbr1 / $nbr2;
						break;
					
					case '%':
						$resultat = $nbr1 % $nbr2;
						break;
					default:
						echo "erreur";
						break;
				}
				echo "<p> le resulta du calcul de ".$nbr1 ." ". $operation ." ". $nbr2 ."est :". $resultat ." </p>";	
		}
	 ?>
</body>
</html>



<!-- RESUMER 

	variable 
	concatenation 
	POST, condition(switch)
	operateur
-->

