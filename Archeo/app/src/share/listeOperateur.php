<?php
require  $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/modele/operateurShortManager.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/controller/operateurShort.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/connectiondb.php';

$db = connectiondb();

$manager = new operateurShortManager($db);

$operateurs = $manager->getList();


echo '<p> <select name="operateur">';
foreach($operateurs as $operateur)
{
	echo '<option value = "' . $operateur->id() . '"> ' . $operateur->nom() .'</option>';
}

echo '</select><br /></p>'
?>
