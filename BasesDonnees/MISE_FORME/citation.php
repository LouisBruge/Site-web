<?php

	function affichage_citation($commande)
	{
		echo '<strong> Citation(s) : </strong>';
		while($element = $commande->fetch())
		{
			echo '<blockquote><p>"';
			echo $element['citation'];
			echo '" <br />';
			echo '<small> de ' . $element['auteur'] . ', <cite>' . $element['reference'] . '</cite>, ' . $element['date_non_scalaire'] . '</small></p></blockquote>';
		}
	}

?>
