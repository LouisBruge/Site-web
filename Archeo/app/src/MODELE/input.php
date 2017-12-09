<?php
	

	require( __DIR__ . '/../connectiondb.php');

function InputNotes($valeur)
{
	$conn = connectiondb();
	try{
		$req = $conn->prepare('INSERT INTO notes (id_operateur, note, historique, source, web) VALUES (:operateur, :note, :historique, :source, :web)');
		$req->execute(array(
			':operateur' => $valeur['operateur'],
			':note' => $valeur['note'],
			':historique' => $valeur['historique'],
			':source' => $valeur['source'],
			':web' => $valeur['web']
		));
	}
	catch(PDOException$e)
	{
		echo 'Erreur : ' . $e->getMessage();
	};
}


function InputArrete($valeur)
{

	$conn = connectiondb();
	try{
	$req = $conn->prepare('INSERT INTO arrete (id_operateur, annee, diagnostic, fouille, paleolithique, neolithique, protohistoire, romain, medieval, moderne, contemporain) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

	$req->execute(array(
		$valeur['operateur'],
		$valeur['annee'],
		$valeur['diagnostic'],
		$valeur['fouille'],
		$valeur['paleolithique'],
		$valeur['neolithique'],
		$valeur['protohistoire'],
		$valeur['romain'],
		$valeur['romain'],
		$valeur['moderne'],
		$valeur['contemporain']
	));
	}
	catch(PDOException $e)
	{
		echo 'Erreur : ' . $e->getMessage();
	};
}

function InputCandidature($valeur)
{
	require( __DIR__ . '/../CONTROLLER/candidature.php');
	controllerCandidature($valeur);

	$conn = connectiondb();
	try {
	$req = $conn->prepare('INSERT INTO candidature (id_operateur, spontannee, poste, support, id_contact, date_envoi, n_annonce) VALUES(?, ?, ?, ?, ?, ?, ?)');
	$req->execute(array(
		$valeur['operateur'],
		$valeur['spontannee'],
		$valeur['poste'],
		$valeur['support'],
		$valeur['id_contact'],
		$valeur['date_envoi'],
		$valeur['n_annonce']
		));
	}
	catch(PDOException $e)
	{
		echo 'Erreur : ' . $e->getMessage();
	};
}

function UpdateReponseCandidature($valeur)
{
	$conn = connectiondb();

	try
	{
		$req = $conn->prepare('UPDATE candidature SET type_rep = :type_rep, reponse = :reponse WHERE id = :id');
		$req->bindParam(':id', $valeur['id'], PDO::PARAM_INT);
		$req->bindParam(':reponse', $valeur['reponse'], PDO::PARAM_STR);
		$req->bindParam(':type_rep', $valeur['type_rep'], PDO::PARAM_STR);
		$req->execute();
	}
	catch(PDOException $e)
	{ 
		echo '<strong> Erreur : </strong> ' . $e->getMessage();
	};
}


function InputContact($valeur)
{
	$conn = connectiondb();
	try{
	$req = $conn->prepare('INSERT INTO contact (nom, prenom, id_operateur, poste, mail, tel, coordonnes) VALUES(?, ?, ?, ?, ?, ?, ?)');
	$req->execute(array(
		$valeur['nom'],
		$valeur['prenom'],
		$valeur['operateur'],
		$valeur['poste'],
		$valeur['mail'],
		$valeur['telephone'],
		$valeur['coordonnees']
		));
	}
	catch(PDOException $e)
	{ 
		echo '<strong> Erreur : </strong> ' . $e->getMessage();
	};
}

function InputOperateur($valeur)
{
	$conn = connectiondb();
	try{
	$req = $conn->prepare('INSERT INTO operateur (nom_operateur, abrev, secteur, statut_juridique, activite, siren, personnel_min, personnel_max, service, batiment, numero_siege, addresse, complement_addresse, boite_postale, code_postal, ville, code_cedex, departement, region, mail, web, telephone, date_creation) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? );');
	$req->execute(array(
		$valeur['operateur'],
		$valeur['abrev'],
		$valeur['secteur'],
		$valeur['statut_juridique'],
		$valeur['activite'],
		$valeur['siren'],
		$valeur['personnel_min'],
		$valeur['personnel_max'],
		$valeur['service'],
		$valeur['batiment'],
		$valeur['numero_siege'],
		$valeur['addresse'],
		$valeur['complement_addresse'],
		$valeur['boite_postale'],
		$valeur['code_postal'],
		$valeur['ville'],
		$valeur['cedex'],
		$valeur['departement'],
		$valeur['region'],
		$valeur['mail'],
		$valeur['web'],
		$valeur['telephone'],
		$valeur['date_creation'],
	));
	}
	catch(PDOException $e)
	{
		echo 'Erreur : ' . $e->getMessage();
	};
}



