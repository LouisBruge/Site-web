<?php

	use griselangue\core\connexion;

	$db = new connexion('archeo', $session);
?>
        <form method="post" action="/archeo/public/candidature.php" id="candidature">
        <h2> Enregistrement des candidatures</h2> <br />
	<fieldset> <legend> Service </legend>
		<?php 
	require $_SERVER['DOCUMENT_ROOT'] . '/archeo/app/src/share/listeOperateur.php';
	require $_SERVER['DOCUMENT_ROOT'] . '/archeo/app/src/share/listeContact.php';
			?>
		poste : <input type = "text" name="poste" />
		numéro d'annonce : <input type="text" name="n_annonce" />
		date : <input type = "date" name="date_envoi" /> <br />
		support : <select name="support">
				<option value="mail">mail </option>
				<option value="oral"> Oral </option>
				<option value="lettre manuscrite"> Courrier </option>
				<option value="site_web"> Web </option>
				<option value="formulaire"> formulaire web </option>
				<option value="intermediaire">intermediaire </option>
				<option value="autre"> Autre</option>
			</select>

		Candidature spontannée ? :  <input type="radio" name="spontannee" value="TRUE" id="oui" checked="checked" /><label for="oui">oui</label> <input type="radio" name="spontannee" value="FALSE" id="non" /><label for="non">non</label> <br />

             </fieldset>
       <input type="submit" name="validation" /><br/>
       </form>
