<?php
if( !empty($_GET['type']) ){
	if( $_GET['type'] === 'success' ){
		$message = "Fichier enregistré avec succès";
	} elseif ( $_GET['type'] === 'error' && !empty($_GET['code']) ){
		switch ($_GET['code']) {
			case 1:
				$message = "Accès non autorisé";
				break;
			case 2:
				$message = "Saisir le champs nom et sélectionné un fichier";
				break;
			case 3:
				$message = "Erreur lors du chargement du fichier";
				break;
		}
	}
}
?>
<!doctype html>
<html lang="fr">
	<header>
		<meta charset="utf-8">
		<title>Système d'upload de fichiers</title>
	</header>
	<body>
		<h1>Système d'upload de fichier</h1>
		<?php
		if( !empty($message) ) echo '<p>'.$message.'</p>';
		?>
		<form action="upload.php" method="POST" enctype="multipart/form-data">
			<input type="text" name="nom" id="id" placeholder="Nom du fichier" />
			<input type="file" name="fichier" placeholder="Fichier" />
			<input type="submit" name="envoyer" value="Envoyer le fichier" />
		</form>
	<?php
	$directory = opendir(__DIR__.DIRECTORY_SEPARATOR.'files/');
	echo '<ul>';
	while( ($file = readdir($directory)) ){
		if( $file !== '.' && $file !== '..' ){
			echo '<li><a href="./files/'.$file.'">'.$file.'</a></li>';
		}
	}
	echo '</ul>';
	?>
	</body>
</html>
