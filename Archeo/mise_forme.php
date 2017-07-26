<?php	
		function coloration_case($valeur) // permet d'afficher des cases noires pour les valeurs 1 et blanches pour les valeurs 0 au sein d'un tableau
		{
			if ($valeur == 1)
			{
				echo '<td bgcolor = "#000000"> 1 </td>';
			}
			elseif ($valeur == 0)
			{
				echo '<td bgcolor = "#ffffff"> </td>';
			}
			else 
			{
				echo '<td> ' . $valeur . '</td>';
			}
		}
?>

