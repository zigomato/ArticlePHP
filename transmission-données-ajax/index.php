<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Transmission d'information en AJAX</title>
	</head>
	<body>
		<section id="zone"></section>
		<h1>Méthode GET</h1>
		<button id="clickForGet">Récupérer les informations</button>
		<h1>Méthode POST</h1>
		<form method="POST" action="login.php">
			Pseudo : <input type="text" name="username" id="username" value="Nicolas" /><br />
			Mot de passe : <input type="password" id="password" name="password" />
			<input type="submit" name="submit" value="Envoyer" id="send" />
		</form>
	</body>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="main.js"></script>
</html>
