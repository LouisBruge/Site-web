        <nav id="menu">
            <div class="element_menu">
                 <ul id="tabs">
                     <li><a href="/index.php">Accueil</a></li>
		     <li> Annuaire </li>
			<ul id="annuaire">
		     		<li><a href="/annuaire.php">Liste</a></li>
				<li><a href="/formulaire-annuaire.php">Formulaire</a></li>
			</ul>
		     <li>Inventaires</li>
			<ul id="inventaires">
				<li><a href="/SQL/film.php"/>Films</a></li>
				<li><a href="/SQL/jeux_video.php"/>Jeux</a></li>
				<li><a href="/SQL/ouvrage.php"/>Ouvrages</a></li>
			</ul>
                     <li><a href="/formulaires.php">Formulaires</a></li>
		     <li>Archéologie</li>
			<ul id="Archeologie">
		     		<li><a href="/Archeo/fiche/candidature.php">Candidatures</a></li>
		     		<li><a href="/Archeo/formulaires.php">Formulaires</a></li>
		     		<li><a href="/Archeo/fiche/operateur.php">Operateur</a></li>
			</ul>
                 </ul>
            </div>
        </nav>
<aside>
	<?php
		if(isset($_SESSION['login']) && isset($_SESSION['password']))
			{
				echo '<a href="/login.php">' . $_SESSION['login'] . '</a>'; 
		}
		else
		{
?>
	<form method="post" action="/login.php" id='login'>
		<input type="text" name="login" required placeholder="Pseudonyme" />
		<input type="password" name="password" required placeholder="Mot de Passe" />
		<input type="submit" name="loger" /> <br />
	</form>
	<?php
		}
?>
</aside>
<id="barre">
	<form method="post" action="/SQL/test.php" id="requete">
		<input type="search" name="recherche" required placeholder="Barre de recherche" />
		<input type="submit" name="Recherche" /> <br />
	</form>
</id>
