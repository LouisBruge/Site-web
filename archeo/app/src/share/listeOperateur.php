<?php


if (isset ($manager))
{
	$manager = NULL;
	$manager = new operateurShortManager($db);
}
else
{
	require  $_SERVER['DOCUMENT_ROOT'] . '/archeo/app/src/modele/operateurShortManager.php';
	require $_SERVER['DOCUMENT_ROOT'] . '/archeo/app/src/controller/operateurShort.php';
	$manager = new operateurShortManager($db);
}

$operateurs = $manager->getList();


echo '<p> <select name="operateur">';
foreach($operateurs as $operateur)
{
	echo '<option value = "' . $operateur->id() . '"> ' . $operateur->nom() .'</option>';
}

echo '</select><br /></p>'
?>
