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
		<?php include($_SERVER['DOCUMENT_ROOT'] . '/menu.php') ; ?>
		<section>
			<?php require(__DIR__ . '/../app/src/view/contacts.php'); ?>
		</section>
</main>
</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>
