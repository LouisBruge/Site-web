<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>	Annuaire</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="/design.css" type="text/css" media="screen" />
	</head>
	<body>
		<?php require($_SERVER['DOCUMENT_ROOT'] . '/menu.php') ; ?>
		<section>
			<?php 

	use griselangue\core\connexion;
	require __DIR__ . '/../app/src/contactManager.php';
	require __DIR__ .  '/../app/src/contact.php';

	$db = new connexion('biblio', $session);

	$manager = new contactManager($db);


	if($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		$contact = new contact($_POST);
		require (__DIR__ . '/../app/view/show.php');
		$manager->create($contact);
	}
	elseif 	(isset($_GET['id']))
	{
		$id = (int) $_GET['id'];

		$contact = $manager->get($id);

		require (__DIR__ . '/../app/view/show.php');
	}
	else
	{
		$contacts = $manager->getList();
		require(__DIR__ . '/../app/view/index.php');
	}?>
		</section>
</main>
</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>
