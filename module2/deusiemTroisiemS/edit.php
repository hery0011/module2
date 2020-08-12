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

	$sql = "SELECT * FROM utilisateurs WHERE id = $id";
	$result = $conn->query($sql); 
	$row = $result->fetch_assoc();
 ?>



<html>
<head>
	<title>edit</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap4/bootstrap.min.css">
</head>
<body>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<form method="POST" action="sqlUpdate.php">
				<div>
					<input type="text" name="id" value="<?php echo $row["id"]?>" hidden>
				</div>
				<div>
					<label>nom:</label>
					<input type="text" name="nom" class="form-control" value="<?php echo $row["nom"]?>">
				</div>
				<div>
					<label>prenom:</label>
					<input type="text" name="prenom" class="form-control" value="<?php echo $row["prenom"]?>">
				</div>
				<div>
					<label>email:</label>
					<input type="email" name="mail" class="form-control" value="<?php echo $row["mail"]?>">
				</div>
				<div>
					<label>password:</label>
					<input type="password" name="password" class="form-control" value="<?php echo $row["password"]?>">
				</div>
				<input type="submit" name="submit" value="update">
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>

</body>
</html>
