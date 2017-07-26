<?php 
	function coloration_case($valeur)
	{
		if ($valeur == 1)
		{
			echo '<td bgcolor = "#000000"> 1 <td/>';
		}
		elseif ($valeur == 0)
		{
			echo '<td bgcolor = "#ffffff"> <td/>';
		}
		else
		{
		};
	}
?>

	<table> <tr>
			<th>test<th>
			<th>test<th>
			<th>test<th>
		</tr>
		<tr>
		<?php
			coloration_case(1);
			coloration_case(0);
			coloration_case(1);
?>

		</tr>
	</table>

