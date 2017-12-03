<?php
	function ajout_donnee_annexe($db, $id, $media)
	{
		// listings pour la modification de la fiche
		require($_SERVER['DOCUMENT_ROOT'] . '/BasesDonnees/listing_genre.php');

		echo '<fieldset>
			<legend> Ajout de données annexes </legend>';
		echo '<form method="post" action="/BasesDonnees/FICHES/' . $media . '.php?id=' . $id . '" id="genre-form">
			<fieldset>
			<legend> Genre </legend>';
		listing_genre($db, $media);
		echo '<input type="submit" name="validation" />
			</fieldset>
			</form>';

		echo '<form method="post" action="/BasesDonnees/FICHES/' . $media . '.php?id=' . $id . '" id="support-form">
			<fieldset>
			<legend> support </legend>';
		listing_support($db, $media);
		echo '<input type="submit" name="validation" />
			</fieldset>
			</form>';


		echo '<form method="post" action="/BasesDonnees/FICHES/' . $media . '.php?id=' . $id . '" id="proprio-form">
			<fieldset>
			<legend> Proprietaire</legend>';
		listing_proprio($db);
		echo '<input type="submit" name="validation" />
			</fieldset>
			</form>';

		form_citation($media, $id);
		echo '</fieldset>';
		

	}

function form_citation($media, $id)
	{
		echo	'<form method="post" action="/BasesDonnees/FICHES/' . $media . '.php?id=' . $id . '" id="citation">'
?>
	<fieldset>
	<legend> Citation </legend>
	Citation : <br />
		<textarea name="citation" rows="2" cols="45"> </textarea> <br />
	Auteur(s) : <br />
		<input type = "text" name="auteur" required/> <br />
	Référence(s) : <br />
		<input type = "text" name="reference" /> <br />
	Date scalaire : <br />
		<input type = "number" name="date_scalaire" /> <br />
	Siècle : <br />
		<input type = "number" name="siecle" /> <br />
	Date non scalaire : <br />	
		<input type = "text" name="date_non_scalaire" /> <br />
	<input type="submit" name="validation" />
	</fieldset>
	</form>
<?php
	}
?>

