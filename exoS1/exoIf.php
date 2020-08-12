<!DOCTYPE html>
<html>
<head>
	<title>exoIf</title>
</head>
<body>
	<div>
		<form method="post" action="">
			<div>
				<label>personne</label>
				<select name="personne">
					<option value="rakoto">Rakoto</option>
					<option value="ndrema">Ndrema</option>
					<option value="bolida">Bolida</option>
				</select>
			</div>
			<input type="submit" name="verifier" value="verifier">
		</form>
	</div>
</body>
</html>


<?php 

if (isset($_POST['verifier'])) {
	$personne = $_POST['personne'];


	if ($personne == 'rakoto') {
		echo "i Rakoto dia papianatra MTH";
	}elseif ($personne == 'ndrema') {
		echo "i Ndreama dia pampianatra PC ";
	}else{
		echo "i Bolida dia pampianatra PHILO";
	}
}
?>


<!-- EXO realiser avec condition if
	
	rakoto => mathematique
	ndrema => physique
	bolida => phylo

-->