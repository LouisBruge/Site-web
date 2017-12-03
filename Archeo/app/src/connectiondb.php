<?php 
function connectiondb()
	{
		try{
			if (isset($_SESSION['login']) && isset($_SESSION['password']))
			{
				$user = $_SESSION['login'];
				$password = $_SESSION['password'];
				$conn = new PDO("pgsql:dbname=archeo;host=localhost", $user, $password);

				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
		}
		catch(PDOException $e) {
			echo 'Erreur : ' . $e->getMessage();
		};
		return($conn);
}
?>

