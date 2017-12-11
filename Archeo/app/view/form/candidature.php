        <form method="post" action="/Archeo/FONCTION-ENREG/candidature-enregist.php" id="candidature">
        <h2> Enregistrement des candidatures</h2> <br />
	<fieldset> <legend> Service </legend>
		<?php 
			if(isset($_GET['id']))
			{
				echo '<input type="hidden" name="operateur" value="' . $_GET['id'] . '" />';
			}
			else
			{
				echo 'Opérateur : <select name="operateur"> ';
				ListeOperateur();
			       echo '</select> <br />';
			}
		?>
		Contact : <select name = "id_contact"> <?php ListeContact(); ?> </select> <br />
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
