<?php 

	if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['id']) && isset($_POST['password'])) {
		$id = $_POST['id'];
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

	$sql = "UPDATE utilisateurs SET nom='$nom', prenom='$prenom', mail='$mail', password='$mdp' WHERE id=$id";

	if ($conn->query($sql) === TRUE) {
    	header('location:affiche.php');
	} else {
    	echo "Error updating record: " . $conn->error;
	}

	$conn->close();
?>