<?php
	function Tableau_html($tableau) // affichage d'un tableau de valeur en html
	{
		echo '<table>';
		foreach($tableau as $cle => $element)
		{
			echo '<tr><td> ' . $cle . '</td> <td> ' . $element . '</td> </tr><br />';
		}
		echo '</table>';
	}
	

	function tableau_film($tableau)
	{
?>
	<h1 id="film"> Film </h1>
	<table><tr><th> ID </th>
		   <th> Titre </th>
		   <th> Réalisateur </th>
		   <th> Date </th>
		</tr>
<?php
		while($element = $tableau->fetch())
		{
			echo '<tr> <td> <a href="/FICHES/film.php?id=' . $element['id'] . '"> ' . $element['id'] . '</a></td> 
			       	<td> <cite> ' . $element['titre'] . '</cite> </td>
				<td> ' . $element['realisateur'] . '</td>
				<td> ' . $element['date'] . '</td></tr>';
		}
		echo '</table>';
	}

	function tableau_ouvrage($tableau)
	{
?>
	<h1 id="ouvrage"> Ouvrage </h1>
	<table><tr><th> ID </th>
		   <th> Auteur(s) </th>
		   <th> Titre </th>
		   <th> Date </th>
		</tr>
<?php
		while($element = $tableau->fetch())
		{
			echo '<tr> <td> <a href="/FICHES/ouvrage.php?id=' . $element['id'] . '"> ' . $element['id'] . '</a></td> 
			       	<td> ' . $element['auteur'] . '</td>
				<td><cite> ' . $element['titre'] . '</cite></td>
				<td> ' . $element['date'] . '</td></tr>';
		}
		echo '</table>';
	}

	function tableau_jeux($tableau)
	{
?>
	<h1 id="jeux"> Jeux </h1>
	<table><tr><th> ID </th>
		   <th> Titre </th>
		   <th> Éditeur </th>
		   <th> Date </th>
		</tr>
<?php
		while($element = $tableau->fetch())
		{
			echo '<tr> <td> <a href="/FICHES/jeux.php?id=' . $element['id'] . '"> ' . $element['id'] . '</a></td> 
			       	<td> <cite> ' . $element['titre'] . '</cite> </td>
				<td> ' . $element['editeur'] . '</td>
				<td> ' . $element['date'] . '</td></tr>';
		}
		echo '</table>';
	}
?>
