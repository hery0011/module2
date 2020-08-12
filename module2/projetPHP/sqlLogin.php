<?php 
	
	if (isset($_POST['mail']) && isset($_POST['password'])) {
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
	$key = "hery0011";
	$keyPsd = openssl_encrypt($mdp, "AES-128-ECB" ,$key);
	$sql = "SELECT * FROM utilisateurs WHERE mail = '$mail' AND password='$keyPsd'";
	$result = $conn->query($sql); 
	$row = $result->fetch_assoc();
	
	if ($row) {
		header('location:e-commerce/index.html');
	}else{
		echo "<script type='text/javascript'>
			if (confirm('error, you want to creat new compt?')) {
				window.location.assign('../deusiemTroisiemS/insert.php');
			}else{
				window.location.assign('index.html');
			}
	</script>";
	}
 ?>