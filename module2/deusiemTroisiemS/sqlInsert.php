<?php 
	if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['password'])) {
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$mail = $_POST['mail'];
		$mdp = $_POST['password'];

	}

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "utilisateur";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	}

/*	$key_password= "hery0011";
	$passwordCript = openssl_encrypt($mdp, "AES-128-ECB" ,$key_password);*/

	$sql = "INSERT INTO user (nom, prenom, mail, password)
	VALUES ('$nom', '$prenom', '$mail', '$mdp')";

	if ($conn->query($sql) === TRUE) {		
    	header('location:affiche.php');
	} else {
    	echo "error";
	}

	$conn->close();
?>