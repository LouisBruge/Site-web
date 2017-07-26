<?php session_start() ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Formulaires </title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" media="screen" type="text/css" title="Design" href="/design.css"/>
	</head>

	<body>
		<?php include($_SERVER['DOCUMENT_ROOT'].'/menu.php');
			require($_SERVER['DOCUMENT_ROOT'].'/ConnectionDB.php');
			require($_SERVER['DOCUMENT_ROOT'].'/listing_genre.php'); // accés au fichier pour la génération des listes déroulantes (genre, support et proprio)
			$db = ConnectionDB(); // connection au serveur de base de donnée
		 ?>

		<p>
		<section>
		<!-- mise en forme du formulaire d'enregistrement des ouvrages -->
 	       	<form method="post" action="ENREG/ouvrage.php" id="monographie">
        	<fieldset>
        	<legend> Ouvrage </legend>
        	Auteur(s) : <input type="text" name="auteur" size=60 required/> <br/>
	        Titre : <input type="text" name="titre" size=60 required/> <br/>
       		Date : <input type="number" name="date" required/> <br/> 
      		Editeur : <input type="text" name="editeur" required/> <br/>
	        Ville d'édition : <input type="text" name="ville" required/> <br/>
	        Collection : <input type="text" name="collection" /> <br />
            	Commentaire : <textarea name="commentaire" rows="2" cols="45" ></textarea> <br />
		<?php
			info_complementaire($db, "ouvrage");// génére les listes déroulantes pour le genre, le type de support et le propriétaire
		?>
   		<input type="submit" name="validation" /><br/>
       		</fieldset>
       		</form>

		<!-- mise en forme du formulaire d'enregistrement des films -->
		<form method="post" action="ENREG/film.php" id="film">
		<fieldset>
		<legend> Films </legend>
		Titre : <input type="text" name="titre" required/> <br />
		Réalisateur : <input type="text" name="realisateur" required/> <br />
		Studio : <input type="text" name="studio" required/> <br />
		Année : <input type="number" name="annee" maxlenght="4" min="1900" required="yes">
		Durée (min) : <input type="number" name="duree" required> <br />
		Commentaire : <textarea name="commentaire" rows="2" cols="45"> </textarea> <br />
		<?php
			info_complementaire($db, "film"); // génére les listes déroulantes pour le genre, le type de support et le propriétaire
		?>
		<input type="submit" name="validation" /><br />
		</fieldset>
		</form>

		<!-- mise en forme du formulaire d'enregistrement des jeux -->
		<form method="post" action="ENREG/jeux_video.php" id="jeux_video">
		<fieldset>
		<legend> Jeux </legend>
		Titre : <input type="text" name="titre"  required /> <br />
		Éditeur : <input type="text" name="editeur" required /> <br />
		Année : <input type="number" name="annee" maxlenght="4" min="1900" required="no">
		Plateforme : <select name="plateforme">
			<option value="PC">PC</option>
			<option value="PS2">PS2</option>
			<option value="PS1">PS1</option>
			<option value="Wii">Wii</option>
			<option value="Gameboy">Gameboy</option>
			<option value="Gameboy Color">Gameboy Color</option>
			</select> <br />
		Commentaire : <textarea name="commentaire" rows="2" cols="45"> </textarea> <br />
		<?php
			info_complementaire($db, "jeux");// génére les listes déroulantes pour le genre, le type de support et le propriétaire
		?>
		<input type="submit" name="validation" /><br />
		</fieldset>
		</form>

		<!-- mise en forme du formulaire d'enregistrement des genres -->
		<form method="post" action="ENREG/genre.php" id="genre">
		<fieldset>
		<legend> Genre </legend>
		Nom : <input type="text" name="nom" required /> <br />
		Abreviation : <input type="text" name="abreviation" required /> <br />
		film :  <input type="radio" name="film" value="TRUE" id="oui" checked="checked" /><label for="oui">oui</label> <input type="radio" name="film" value="FALSE" id="non"/><label for="non">non</label> <br />
		ouvrage :  <input type="radio" name="ouvrage" value="TRUE" id="oui" checked="checked" /><label for="oui">oui</label> <input type="radio" name="ouvrage" value="FALSE" id="non"/><label for="non">non</label> <br />
		jeux :  <input type="radio" name="jeux" value="TRUE" id="oui" checked="checked" /><label for="oui">oui</label> <input type="radio" name="jeux" value="FALSE" id="non"/><label for="non">non</label> <br />

		<input type="submit" name="validation" />
			</fieldset>
			</form>

		</section>
		</p>
	</body>
</html>

