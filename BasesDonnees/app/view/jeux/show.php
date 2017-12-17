<?php
require __DIR__ . '/../../src/controller/media.php';
require __DIR__ . '/../../src/controller/jeux.php';
require __DIR__ . '/../../src/modele/jeuxManager.php';
require '/srv/http/moduleConnection.php';

$db = new connectionDb('biblio', $_SESSION['login'], $_SESSION['password']);

$db->connection();

$conn = $db::$pdo;

$id = (int) $_GET['id'];

$manager = new jeuxManager($conn);
$jeux = $manager->get($id);

?>

	<p> <h1> <?= $jeux->titre(); ?> </h1>

	jeux édité par: <strong> <?= $jeux->editeur(); ?> </strong> <br />
	en <?= $jeux->annee(); ?> pour la plateforme <?= $jeux->plateforme(); ?>

	</p>

