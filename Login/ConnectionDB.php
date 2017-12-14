<?php
function ConnectionDB() // fonction de connection à la base de donnée bibliographique
	{
		try{
		// ouverture de la base de donnée
			if (isset($_SESSION['login']) && isset($_SESSION['password']))
			{
				$user = $_SESSION['login'];
				$password = $_SESSION['password'];
				$db = new PDO("pgsql:dbname=biblio;host=localhost", $user, $password, array(PDO::ATTR_PERSISTENT => true));
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
		}
		catch(PDOException $e){
			echo 'ERR : ' . $e->getMessage();
		};
		return ($db);
	}

?>
