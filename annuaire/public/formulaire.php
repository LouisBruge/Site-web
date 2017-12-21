<?php session_start() ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Formulaires </title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css"/>
	</head>

	<body>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); ?>

		<p>
			<section>
		<?php include(__DIR__ . '/../app/view/_form.php');?>
			</section>
		</p>
		</main>
	</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>
