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
			<input type="password" class="form-control input-sm" placeholder="Password" /><br />
			<input type="password" class="form-control input-sm" placeholder="Password confirmation" /><br />
			<input type="submit" class="btn btn-primary" value="S'inscrire !" />
		</form>
	</div>
</body>
</html>