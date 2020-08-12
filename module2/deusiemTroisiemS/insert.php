<html>
<head>
	<title>insertion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap4/bootstrap.min.css">
	<script type="text/javascript" src="../bootstrap4/jquery.min.js"></script>
	<script type="text/javascript" src="controlChamp.js"></script>
	<style type="text/css">
		.cadre{
			border: 1px solid black;
			border-radius: 5px;
			background-color: yellow;
			box-shadow: 10px 10px;
		}
		h1{
			text-align: center;
		}
		.error-message{
			display: inline;
			color: red;
			display: none;
		}
	</style>
</head>
<body>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 cadre">
			<h1>création compte</h1>
			<form method="POST" action="sqlInsert.php">
				<div>
					<label>nom:</label>
					<input type="text" name="nom" class="form-control" id="nom">
					<span class="error-message">erreur</span>
				</div>
				<div>
					<label>prenom:</label>
					<input type="text" name="prenom" class="form-control" id="prenom">
					<span class="error-message">erreur</span>
				</div>
				<div>
					<label>email:</label>
					<input type="email" name="mail" class="form-control" id="mail">
					<span class="error-message">erreur</span>
				</div>
				<div>
					<label>password:</label><br>
					<input type="password" name="password" id="password" width="90%">
					<i class="btn btn-sm btn-primary a" id="showP">show</i>
					<span class="error-message">erreur</span>
				</div><br>
				<input class="btn btn-success" type="submit" name="submit" value="save" id="save">
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>

</body>
</html>