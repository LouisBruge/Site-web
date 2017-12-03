<?php
	function liste_html($liste, $type)
	{
		echo '<strong> ' . $type . '</strong>';
		echo '<ul id="' . $type . '">';
		while ($element = $liste->fetch())
		{
			echo '<li>' . $element['nom'] . '</li>';
		}
		echo '</ul>';
	}
?>
