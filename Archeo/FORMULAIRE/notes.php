<form method="post" action="/Archeo/FONCTION-ENREG/notes.php" id="note">
	<h2> Notes complementaires </h2>
<fieldset>
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

	<textarea name="note" required='yes'> Note </textarea><br />
	Source web : <input type="url"  name="web" placeholder="Source Web" /> <br />
	Source : <input type="text"  name="source" placeholder="Source" /> <br />
	Historique : <input type="radio" name="historique" value="true" id="true" /><label for="true"> TRUE </label> <input type="radio" name="historique" value="false" id="false" /> <label for="false"> FALSE </label>
       <input type="submit" name="validation" /><br/>
</fieldset>
</form>
