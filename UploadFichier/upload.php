<?php
if( isset($_POST['envoyer']) ){ // permet de s'assurer que le formulaire est bien à l'origine
	if( !empty($_POST['nom']) && !empty($_FILES['fichier']) ){ // contrôle de la présence du fichier et du nom de fichier
		if( $_FILES['fichier']['error'] === 0 ){ // contrôle de l'absence d'erreur du chargement de l'image depuis le formulaire
			$uploadDirectory = __DIR__.DIRECTORY_SEPARATOR.'files'.DIRECTORY_SEPARATOR; // fichier d'upload
			$fileInfo = new SplFileInfo($_FILES['fichier']['name']); // préparation du fichier pour upload
			$extension = $fileInfo->getExtension();
			$nouveauFichier = $_POST['nom'].'.'.$extension;
			move_uploaded_file($_FILES['fichier']['tmp_name'], $uploadDirectory.$nouveauFichier);
			header('location: index.php?type=success');
		} else {
			header('location: index.php?type=error&code=3');
		}
	} else {
		header('location: index.php?type=error&code=2');
	}
} else {
	header('location: index.php?type=error&code=1');
}

?>