<?php
if (isset($_GET['action']) AND $_GET['action'] == 'getHTMLData') {
	echo '<p>Ce paragraphe est présent pour vérifier que ma page est bien rechargée en AJAX</p>';
}
?>