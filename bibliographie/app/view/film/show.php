<?php
require __DIR__ . '/../../src/controller/media.php';
require __DIR__ . '/../../src/controller/film.php';
require __DIR__ . '/../../src/modele/filmManager.php';
require '/srv/http/moduleConnection.php';

$db = new connectionDb('biblio', $_SESSION['login'], $_SESSION['password']);

$db->connection();

$conn = $db::$pdo;

$id = (int) $_GET['id'];

$manager = new filmManager($conn);
$film = $manager->get($id);

?>

	<p> <h1> <?= $film->titre(); ?> </h1>

	Film réalisée par : <strong> <?= $film->realisateur(); ?> </strong> <br />
	en <?= $film->annee(); ?> par le studio <?= $film->studio(); ?>

	<br />
	<br />

	Durée : <?= $film->duree();?> min<br />
