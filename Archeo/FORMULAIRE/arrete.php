
<!-- Formulaire des arrêtés --!>
	<form method="post" action="/Archeo/FONCTION-ENREG/arrete.php" id="arrete">
	<h2> Enregistrement des arrêtés </h2>
	<fieldset>
	<legend> Agréements </legend>
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
		Date :  <input type="date" name="annee"> <br />
		Agréments de diagnostic :  <input type="radio" name="diagnostic" value="TRUE" id="oui" checked="checked" /><label for="oui">oui</label> <input type="radio" name="diagnostic" value="FALSE" id="non" /><label for="non">non</label> <br />
		Agréments de fouilles :  <input type="radio" name="fouille" value="TRUE" id="oui" checked="checked" /><label for="oui">oui</label> <input type="radio" name="fouille" value="FALSE" id="non" /><label for="non">non</label> <br />
	</fieldset>

	<fieldset>
	<legend> Périodes </legend>
		Paléolithique : <input type="radio" name="paleolithique" value="TRUE" id="oui" checked="checked" /><label for="oui">oui</label> <input type="radio" name="paleolithique" value="FALSE" id="non" /><label for="non">non</label> <br />
		Néolithique : <input type="radio" name="neolithique" value="TRUE" id="oui" checked="checked" /><label for="oui">oui</label> <input type="radio" name="neolithique" value="FALSE" id="non" /><label for="non">non</label> <br />
		Protohistorique : <input type="radio" name="protohistoire" value="TRUE" id="oui" checked="checked" /><label for="oui">oui</label> <input type="radio" name="protohistoire" value="FALSE" id="non" /><label for="non">non</label> <br />
		Romain : <input type="radio" name="romain" value="TRUE" id="oui" checked="checked" /><label for="oui">oui</label> <input type="radio" name="romain" value="FALSE" id="non" /><label for="non">non</label> <br />
		Médiéval : <input type="radio" name="medieval" value="TRUE" id="oui" checked="checked" /><label for="oui">oui</label> <input type="radio" name="medieval" value="FALSE" id="non" /><label for="non">non</label> <br />
		Moderne : <input type="radio" name="moderne" value="TRUE" id="oui" checked="checked" /><label for="oui">oui</label> <input type="radio" name="moderne" value="FALSE" id="non" /><label for="non">non</label> <br />
		Contemporain : <input type="radio" name="contemporain" value="TRUE" id="oui" checked="checked" /><label for="oui">oui</label> <input type="radio" name="contemporain" value="FALSE" id="non" /><label for="non">non</label> <br />
	</fieldset>

       <input type="submit" name="validation" /><br/>

	</form>

