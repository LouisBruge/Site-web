<?php session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title> Déconnexion </title>
	<meta charset="utf-8" />
	<link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css"/>
</head>
<body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php'); //ajout du menu dans le texte ?>
	<p>
		<section>
			<h1> Déconnexion </h1>
	Vous êtes déconnectés du serveur, Cordialement	
		</section>
	</p>
    </main>
</body>
			<?php include($_SERVER['DOCUMENT_ROOT']."/footer.php") ; ?>
</html>

