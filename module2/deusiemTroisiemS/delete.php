<?php 
	$id = $_GET['id'];

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

	// sql to delete a record
	$sql = "DELETE FROM utilisateurs WHERE id=$id";

	if ($conn->query($sql) === TRUE) {
    	header('location:affiche.php');
	} else {
    	echo "Error deleting record: " . $conn->error;
	}

	$conn->close();

?>