<?php

	print_r($_POST);

	if(isset($_POST['submit']))
	{
		if(isset($_POST['username']) && !empty($_POST['username']))
		{
			if(isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['password-check']) && !empty($_POST['password-check']))
			{
				if($_POST['password'] === $_POST['password-check'])
				{
					$db = new PDO('mysql:host=localhost;dbname=phpdev', 'phpdev', 'azerty') or die();
					$req = $db->prepare("INSERT INTO users VALUES('', :username, :password)");
					$req->execute(array(
						':username' => $_POST['username'],
						':password' => $_POST['password']
					));
				}
				else
				{
					echo '<p class="btn btn-danger">Les deux mots de passe de correspondent pas.';
				}
			}
			else
			{
				echo '<p class="btn btn-danger">Veuillez renseigner un mot de passe et veuillez le confirmer</p>';
			}
		}
		else
		{
			echo '<p class="btn btn-danger">Veuillez remplir le champ username !</p>';
		}
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Connexion</title>
	<link rel="stylesheet" href="css/flat-ui.css" />
	<style>
		body { background:#282828;padding-top:150px;}
		h1 { color:#fff;font-weight: 300;}
		#block { width:600px; margin:auto;}
		input { width:500px;margin-top:20px;}
		input[type="submit"]{margin-top:40px;margin-left:10px;cursor:pointer;}
	</style>
</head>
<body>
	<div id="block">
		<h1>Register</h1>
		<!--<p class="btn btn-danger"></p>-->
		<form action="register.php" method="post">
			<input type="text" name="username" class="form-control input-sm" placeholder="Username" /><br />
			<input type="password" name="password" class="form-control input-sm" placeholder="Password" /><br />
			<input type="password" name="password-check" class="form-control input-sm" placeholder="Password confirmation" /><br />
			<input type="submit" name="submit" class="btn btn-primary" value="S'inscrire !" />
		</form>
	</div>
</body>
</html>


