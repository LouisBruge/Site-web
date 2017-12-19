<header>
		<div id="nom-site" >
			<a href="/index.php"><h1> Home's Server </h1></a>
		</div>

<!-- chargement de l'autoloader --!>
	<?php
		require ($_SERVER['DOCUMENT_ROOT'] . '/core/autoloader.php');
		griselangue\core\autoLoader::register();
		$session = new	griselangue\core\session($_SESSION['login'], $_SESSION['password']);
	?>


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

</header>

<main>

        <nav id="menu">
            <div class="element_menu">
                 <ul id="tabs">
		     <li> Annuaire </li>
			<ul id="annuaire">
		     		<li><a href="/annuaire/public/annuaire.php">Liste</a></li>
				<li><a href="/annuaire/public/formulaire.php">Formulaire</a></li>
			</ul>
		     <li>Inventaires</li>
			<ul id="inventaires">
				<li><a href="/bibliographie/public/film.php"/>Films</a></li>
				<li><a href="/bibliographie/public/jeux.php"/>Jeux</a></li>
				<li><a href="/bibliographie/public/ouvrage.php"/>Ouvrages</a></li>
                		<li><a href="/bibliographie/public/formulaires.php">Formulaires</a></li>
			</ul>
		     <li>Archéologie</li>
			<ul id="Archeologie">
		     		<li><a href="/archeo/public/candidature.php">Candidatures</a></li>
		     		<li><a href="/archeo/public/contact.php">Contacts</a></li>
		     		<li><a href="/archeo/public/operateur.php">Operateur</a></li>
			</ul>
                 </ul>
            </div>
        </nav>

