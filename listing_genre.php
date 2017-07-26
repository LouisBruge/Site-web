<?php
function info_complementaire($db, $type_media)
{
	listing_genre($db, $type_media);
	listing_support($db, $type_media);
	listing_proprio($db);
}

	// Requête pour générer un menu déroulant avec la liste des genres selon le type de média (film, monographie, jeux....) 
function listing_genre($db, $type_media)
	{
		$requete = "SELECT id, abreviation FROM genre WHERE " . $type_media . " IS TRUE ORDER BY abreviation;" ;
//		echo '<p> ' . $requete . "</p>";
		$listing = $db->query($requete);
		
		echo '<select name="genre" id="genre">';
		while ($donnee = $listing->fetch())
		{
			echo '<option value= "' . $donnee['id'] . '">' . $donnee['abreviation'] . '</option>';
		}
		echo '</select>';
		$listing->closeCursor();
	}
	
	// Requête pour générer un menu déroulant avec la liste des supports selon le type de média (film, monographie, jeux....) 
function listing_support($db, $type_media)
	{
		$requete = "SELECT id, support FROM support WHERE " . $type_media . " IS TRUE ORDER BY support;" ;
//		echo '<p> ' . $requete . "</p>";
		$listing = $db->query($requete);

		echo '<select name="support" id="support">';
		while ($donnee = $listing->fetch())
		{
			echo '<option value= "' . $donnee['id'] . '">' . $donnee['support'] . '</option>';
		}
		echo '</select>';

		$listing->closeCursor();
	}


	// Requête pour générer un menu déroulant avec la liste des propriétaires
function listing_proprio($db)
{
	$listing = $db->query("SELECT id, prenom, upper(nom) AS nom FROM proprietaire ORDER BY nom, prenom;");

	echo '<select name="proprietaire" id="proprietaire">';
	while($donnee = $listing->fetch())
	{
		echo '<option value = "' . $donnee['id'] . '">' . $donnee['prenom'] . ' ' . $donnee['nom'] . '</option>';
	}
	echo '</select>';

	$listing->closeCursor();
}


?>
