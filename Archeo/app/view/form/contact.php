<!-- formulaire des contacts -->
	<form method="post" action="/Archeo/app/view/contact/new.php" id="contact">
	<h2> Enregistrement des contacts dans le monde de l'archéologie </h2> <br />
	<fieldset>
		Nom : <input type='text' name="nom" /> Prenom : <input type='text' name='prenom' /> <br />
		Poste : <input type="text" name='poste' /> <br />
		
		Mail : <input type="email" name="mail" /> Tel : <input type="tel" name="tel"/> <br />
		Coordonnées : <textarea name='coordonnes' rows="3" cols="45" ></textarea> <br />
	</fieldset>
	<input type="submit" name="validation" /><br />
	</form>

