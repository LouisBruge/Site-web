	<br />
	<form method="post" action="/Archeo/FONCTION-ENREG/candidature-update.php" id="update">
	
	<fieldset> <legend> Réponse liée à la candidature </legend>
	
		Réponse :  <input type="radio" name="reponse" value="TRUE" id="oui" checked="checked" /><label for="oui">oui</label> <input type="radio" name="reponse" value="FALSE" id="non" /><label for="non">non</label> <br />
		<textarea name="type_rep"> </textarea> <br />
		<input type="hidden" name="id" value=<?php echo '"' . $_GET['id'] . '"'; ?> />
		<input type="submit" name="validation" /> <br />
	</fieldset>
	</form>
