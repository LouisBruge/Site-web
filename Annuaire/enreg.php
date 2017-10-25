<?php
session_start();
function enregContact($donnee)
{
	try
	{
	require($_SERVER['DOCUMENT_ROOT'] . '/Login/ConnectionDB.php');
	$db = ConnectionDB();
	require($_SERVER['DOCUMENT_ROOT'] . '/Annuaire/verif.php');
	$data = verificationContact($donnee);
	$reponse = $db->prepare('INSERT INTO contact (nom, prenom, naissance, mort, batiment, numero_rue, rue, complement, code_postal, ville, cedex, fixe, mobile, mail) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
	echo 'Pouet';
			$reponse->execute(array(
				$data['nom'],
				$data['prenom'],
				$data['naissance'],
				$data['mort'],
				$data['batiment'],
				$data['numero_rue'],
				$data['rue'],
				$data['complement'],
				$data['code_postal'],
				$data['ville'],
				$data['cedex'],
				$data['fixe'],
				$data['mobile'],
				$data['mail']
			));
		}
		catch(PDOException $e){
			echo 'ERR : ' . $e->getMessage();
		};
}
?>

