<?php
	require($_SERVER['DOCUMENT_ROOT'] . '/Login/ConnectionDB.php');

	require __DIR__ . '/../contactManager.php';
	require __DIR__ .  '/../contact.php';

	$db = ConnectionDB();

	$manager = new contactManager($db);

	print_r ($manager->annivMois());


?>
