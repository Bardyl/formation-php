<?php

	if(isset($_POST['submit'])){
		$db = new PDO('mysql:host=localhost;dbname=phpdev', 'phpdev', 'azerty') or die();
		$req = $db->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
		$req->execute(array(
			':username' => $_POST['username'],
			':password' => $_POST['password']
		));
		$res = $req->fetch();
		if($res != ''){
			// Connexion ok
		} else {
			// Connexion pas ok
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
		<h1>Login</h1>
		<!--<p class="btn btn-danger"></p>-->
		<form>
			<input name="username" type="text" class="form-control input-sm" placeholder="Username" /><br />
			<input name="password" type="password" class="form-control input-sm" placeholder="Password" /><br />
			<input name="submit" type="submit" class="btn btn-primary" value="S'inscrire !" />
		</form>
	</div>
</body>
</html>
