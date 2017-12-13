<?php
require  $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/modele/contactManager.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/controller/contact.php';
require $_SERVER['DOCUMENT_ROOT'] . '/Archeo/app/src/connectiondb.php';

$db = connectiondb();

$manager = new contactManager($db);

$contacts = $manager->getList();


echo '<p> <select name="contact">';
foreach($contacts as $contact)
{
	echo '<option value = "' . $contact->id() . '"> ' . $contact->nom() . ' ' . $contact->prenom() .'</option>';
}

echo '</select><br /></p>';
?>
