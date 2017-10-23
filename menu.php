<header>
		<div id="nom-site" >
			<a href="/index.php"><h1> Home's Server </h1></a>
		</div>

<!-- login intégré dans l'header --!>
	<div id="login">
		<?php
			if(isset($_SESSION['login']) && isset($_SESSION['password']))
			{
				echo '<a href="/Login/login.php">' . $_SESSION['login'] . '</a>'; 
			}
			else
			{
	?>
		<form method="post" action="/Login/login.php" id='login-form'>
			<input type="text" name="login" required placeholder="Pseudonyme" />
			<input type="password" name="password" required placeholder="Mot de Passe" />
			<input type="submit" name="loger" /> <br />
		</form>
	<?php
		}
	?>
	</div>

<!-- Barre de recherche intégrée dans l'header --!>
	<div id="barre">
		<form method="post" action="/SQL/test.php" id="requete">
			<input type="search" name="recherche" required placeholder="Barre de recherche" />
			<input type="submit" name="Recherche" /> <br />
		</form>
	</div>
</header>

<main>

        <nav id="menu">
            <div class="element_menu">
                 <ul id="tabs">
		     <li> Annuaire </li>
			<ul id="annuaire">
		     		<li><a href="/Annuaire/annuaire.php">Liste</a></li>
				<li><a href="/Annuaire/formulaire.php">Formulaire</a></li>
			</ul>
		     <li>Inventaires</li>
			<ul id="inventaires">
				<li><a href="/BasesDonnees/SQL/film.php"/>Films</a></li>
				<li><a href="/BasesDonnees/SQL/jeux_video.php"/>Jeux</a></li>
				<li><a href="/BasesDonnees/SQL/ouvrage.php"/>Ouvrages</a></li>
                		<li><a href="/BasesDonnees/formulaires.php">Formulaires</a></li>
			</ul>
		     <li>Archéologie</li>
			<ul id="Archeologie">
		     		<li><a href="/Archeo/fiche/candidature.php">Candidatures</a></li>
		     		<li><a href="/Archeo/formulaires.php">Formulaires</a></li>
		     		<li><a href="/Archeo/fiche/operateur.php">Operateur</a></li>
			</ul>
                 </ul>
            </div>
        </nav>

