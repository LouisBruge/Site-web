<?php
function annuaireListe()
{
	require($_SERVER['DOCUMENT_ROOT'] . '/Login/ConnectionDB.php');
	$db = ConnectionDB();

	try
		{
			$reponse = $db->query("SELECT id, prenom, upper(nom) AS nom, numero_rue, rue, complement, code_postal, ville, cedex, mobile, fixe FROM contact;");
		}
	catch(PDOException $e)
		{
			echo 'Err : ' . $e->getMessage();
	};

	echo '<table> <tr> <th> Contact </th> <th> Adresse </th> <th> tel. mobile </th> <th> tel. fixe </th> <tr>';

	while($donnee = $reponse->fetch())
	{
	echo '<tr><td><a href="/Annuaire/public/annuaire.php?id=' . $donnee['id']. '">' . $donnee['prenom'] . ' ' . $donnee['nom'] . '</a></td>';
		echo '<td>';
		if (!empty($donnee['batiment']))
		{
			echo $donnee['batiment'] . '<br />';
		}
		if(!empty($donnee['numero_rue']) AND !empty($donnee['rue']))
		{
		echo  $donnee['numero_rue'] . ', ' . $donnee['rue'] ;
		}
	if (!empty($donnee['complement']))
	{
		echo ' ' . $donnee['complement'] . ' ';
		echo '<br />';
	}
	elseif(!empty($donnee['numero_rue']) AND !empty($donnee['rue']))
	{
		echo '<br />';
	}

	if(!empty($donnee['code_postal']) OR preg_match('#^0$#', $donnee['code_postal']))
	{
		echo $donnee['code_postal'] . ' ';
	}
	if(!empty($donnee['ville']))
	{
		echo $donnee['ville'];
	}
	if (!empty($donnee['cedex']))
	{
		echo ' ' . $donnee['cedex'] . ' ';
	}

		echo '</td>';
	       	echo '<td> ' . $donnee['mobile'] . '</td> <td>' . $donnee['fixe'] . '</td>';
	};

	echo '</table>';

	$reponse->closeCursor();
}

function contact($id)
{
	require($_SERVER['DOCUMENT_ROOT'] . '/Login/ConnectionDB.php');
	$db = ConnectionDB();

	try
		{
			$reponse = $db->prepare("SELECT prenom, upper(nom) AS nom, naissance, EXTRACT(YEAR FROM age(naissance)) AS age, batiment, numero_rue, rue, complement, code_postal, ville, cedex, fixe, mobile, mail FROM contact WHERE id = :id;");
			$reponse->bindParam(':id', $id, PDO::PARAM_INT);
			$reponse->execute();
			$donnee = $reponse->fetch();
			return $donnee;
	}
	catch(PDOException $e)
	{
		echo 'Err : ' . $e->getMessage();
	};
}

if (isset($_GET['id']))
{
	$id = $_GET['id'];
	$donnee = contact($id);
	require('miseForme.php');
	miseFormeContact($donnee);
}
elseif (isset($_POST['nom']) AND isset($_POST['prenom']))
{
	require('enreg.php');
	enregContact($_POST);
	require('miseForme.php');
	miseFormeContact($_POST);
}
else
{
	annuaireListe();
}


?>

