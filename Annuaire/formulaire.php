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

				<!-- Formulaire d'enregistrement des contacts et des coordonnées de ces derniers -->

				<form method="post" action="/Annuaire/annuaire.php" id="annuaire">
				<fieldset>
				<legend> Etat civil </legend>
					Nom : <input type="text" name="nom" size=60 placeholder="Nom"required /> <br />
					Prenom : <input type="text" name="prenom" placeholder="Prenom" required /><br />
					Date de naissance : <input type="date" name="naissance" placeholder="JJ/MM/AAAA" /><br />
					Date de décès : <input type="date" name="mort" placheholder="JJ/MM/AAAA" /><br />
				</fieldset>
				<fieldset>
				<legend> Coordonnées </legend>
					Bâtiment ou villa... : <input type="text" name="batiment" /> <br />
					Numéro de rue : <input type="text" name="numero_rue" /> <br />
					Rue : <input type="text" name="rue" /> <br />
					Complément : <input type="text" name="complement" /> <br />
					Code postal : <input type="number" name="code_postal" /><br />
					Ville : <input type="text" name="ville" /> <br />
					Cedex : <input type="text" name="cedex" placeholder="CEDEX 14"/><br />

					<br />
					Téléphone mobile : <input type="text" name="mobile" placeholder="XXXXXXXX" /><br />
					Téléphone fixe : <input type="text" name="fixe" placeholder="XXXXXXXX" /><br />
					Mail : <input type="mail" name="mail" placeholder="xxx.xxx@xxx.xxx" /> <br />
				</fieldset>
				<input type="submit" name="validation" />
				</form>
			</section>
		</p>
		</main>
	</body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php'); ?>
</html>
