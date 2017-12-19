<?php
require __DIR__ . '/../../src/controller/media.php';
require __DIR__ . '/../../src/controller/ouvrage.php';
require __DIR__ . '/../../src/modele/ouvrageManager.php';
require '/srv/http/moduleConnection.php';

$db = new connectionDb('biblio', $_SESSION['login'], $_SESSION['password']);

$db->connection();

$conn = $db::$pdo;

$id = (int) $_GET['id'];

$manager = new ouvrageManager($conn);
$ouvrage = $manager->get($id);

?>

	<p> <h1> <?= $ouvrage->titre(); ?> </h1>

	ouvrage écrit par : <strong> <?= $ouvrage->auteur(); ?> </strong> <br />
	publié en <?= $ouvrage->annee(); ?> par <?= $ouvrage->editeur(); ?> (<?= $ouvrage->ville(); ?>) <?php
	if(!empty($ouvrage->_collection)) {
		echo $ouvrage->collection();
	}
?>


	<br />
	<br />

