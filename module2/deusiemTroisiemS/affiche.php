<?php
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

$sql = "SELECT * FROM utilisateurs";
$result = $conn->query($sql);
?>  

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../bootstrap4/bootstrap.min.css">
	<style type="text/css">
		.cadre{
			padding-top: 50px;
		}
	</style>
</head>
<body>

<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10 cadre">
		<a href="insert.php" class="btn btn-primary">ajout utilisateur</a>
	<table class="table table-dark table-striped table-hover">
		<tr>
			<th>nom</th>
			<th>prenom</th> 
			<th>mail</th>
			<th>password</th>
			<th>action</th>
		</tr>

	<?php		
		if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	?>
		<tr>
			<td><?php echo $row["nom"]?></td>
			<td><?php echo $row["prenom"]?></td>
			<td><?php echo $row["mail"]?></td>
			<td><?php $key_password = "hery0011"; $mdp = $row["password"]; $mdpcrypt = openssl_decrypt($mdp, "AES-128-ECB" ,$key_password); echo $mdpcrypt?></td>
			<td>
				<a href="delete.php?id=<?php echo $row["id"]?>" data-id="<?= $row["id"]?>" class="delete"><button class="btn btn-sm btn-danger">delete</button></a>
				<a href="edit.php?id=<?php echo $row["id"]?>"><button class="btn btn-sm btn-primary">edit</button></a>
			</td>
		</tr>
    <?php	
		}
	?>
</table>
	<?php 
		}
	?>
	</div>
	<div class="col-md-1"></div>
</div>
	
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript">
		
		$(document).ready(function(){
			$(".delete").click(function(e) {
				e.preventDefault();
				let id = $(this).attr('data-id');
				let confirmDelete = confirm("Vous voulez supprimer cette donnée ?");
				if (confirmDelete) {
					window.location = "delete.php?id="+id;
				}
				return;
			})
		});

	</script>

</body>
</html>

