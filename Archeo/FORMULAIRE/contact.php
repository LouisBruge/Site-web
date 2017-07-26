<!-- formulaire des contacts -->
	<form method="post" action="/Archeo/FONCTION-ENREG/contact-enregist.php" id="contact">
	<h2> Enregistrement des contacts dans le monde de l'archéologie </h2> <br />
	<fieldset>
		Nom : <input type='text' name="nom" /> Prenom : <input type='text' name='prenom' /> <br />
		Poste : <input type="text" name='poste' /> <br />
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
		Mail : <input type="email" name="mail" /> Tel : <input type="tel" name="telephone"/> <br />
		Coordonnées : <textarea name='coordonnees' rows="3" cols="45" ></textarea> <br />
	</fieldset>
	<input type="submit" name="validation" /><br />
	</form>

