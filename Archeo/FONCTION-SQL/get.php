<?php

	require($_SERVER['DOCUMENT_ROOT'] . '/Archeo/connectiondb.php');
	require($_SERVER['DOCUMENT_ROOT'] . '/Archeo/mise_forme.php');


	function ListeOperateur()
	{
			// connection au serveur
			$conn = connectiondb();

			// téléchargement des données
			$reponse = $conn->query('SELECT nom_operateur AS operateur, id AS id FROM operateur;');

			// mise en forme des données sous la forme de tableau
			while ($donnee = $reponse->fetch())
			{
			echo '<option value= "' . $donnee['id'] . '">' . $donnee['operateur'] . '</option>';
			}

			// fermeture de la base
			$reponse->closeCursor();

		}

	function ListeContact()
	{
			// connection au serveur
			$conn = connectiondb();
		// téléchargement des données
		$reponse = $conn->query('SELECT c.id AS id, c.nom AS nom, c.prenom As prenom, c.poste AS poste, o.nom_operateur AS operateur FROM contact AS c LEFT JOIN operateur AS o ON c.id_operateur = o.id;');

		while ($donnee = $reponse->fetch())
		{
			echo '<option value= "'. $donnee['id'] . '">' . $donnee['nom'] . ' ' . $donnee['prenom'] . ' - ' . $donnee['poste'] . ' chez ' . $donnee['operateur'] . '</option>';
		}

		// fermeture de la base de donnée
		$reponse->closeCursor();
	}

	function GetOperateur($id)
	{
		$conn = connectiondb();

		$reponse = $conn->prepare('SELECT id, nom_operateur, abrev, secteur, statut_juridique, activite, siren, service, batiment, numero_siege, addresse, complement_addresse, code_postal, ville, code_cedex, mail, web, telephone, date_creation, historique FROM operateur WHERE id = :id');
		$reponse->bindParam(':id', $id, PDO::PARAM_INT);
		$reponse->execute();
		$fiche = $reponse->fetch(PDO::FETCH_ASSOC);

		echo '<h1>' . $fiche['nom_operateur'] . '</h1>';
		echo  $fiche['secteur'] . ' - ' . $fiche['statut_juridique'] .  ' : ' . $fiche['activite'] . '<br />';
		if(isset($fiche['date_creation']))
		{
			echo 'Date de Creation : ' . $fiche['date_creation'] . '<br />' ;
		}
		echo ' <h3> Coordonnées du siege </h3>';
		if(isset($fiche['service']))
		{
			echo $fiche['service'] . '<br />';
		}
		else
		{
			echo $fiche['nom_operateur'] . '<br />';
		}

		if(isset($fiche['batiment']) AND !empty($fiche['batiment']))
		{
			echo $fiche['batiment'] . '<br />';
		}

		if(isset($fiche['numero_siege']) AND !empty($fiche['numero_siege']))
		{
			echo $fiche['numero_siege'] ;
		}

		if(isset($fiche['addresse']))
		{
			echo ' ' . $fiche['addresse'] . '<br />';
		}
		else
		{
			echo '<br />';
		}

		if(isset($fiche['complement_addresse']) AND !empty($fiche['complement_addresse']))
		{
			echo $fiche['complement_addresse'] . '<br />';
		}

		echo $fiche['code_postal'] . ' ' . $fiche['ville'] ;
		if(isset($fiche['code_cedex']) AND !empty($fiche['code_cedex']))
		{
			echo ' ' . $fiche['code_cedex'] . '<br />';
		}
		else
		{
			echo '<br />';
		}

		echo '<br />';

		if(isset($fiche['telephone']) AND !empty($fiche['telephone']))
		{
			echo 'Tel : ' . $fiche['telephone'];
		}
		if(isset($fiche['mail']) AND !empty($fiche['mail']))
		{
			echo ' Mail : ' . $fiche['mail'];
		}

		if(isset($fiche['web']) AND !empty($fiche['web']))
		{
			echo ' Web : <a href="http://' . $fiche['web'] . '">' . $fiche['web'] . '</a> <br />';
		}

		$reponse->closeCursor();
	}

	function GetContacts($id)
	{
		$conn = connectiondb();
		$reponse = $conn->prepare('SELECT upper(nom) AS nom, prenom, poste, coordonnes FROM contact WHERE id_operateur = :id');
		$reponse->bindParam(':id', $id, PDO::PARAM_INT);
		$reponse->execute();

		echo '<h3> Contacts </h3>';
		echo '<ul id="contact">';
		while ( $contact = $reponse->fetch(PDO::FETCH_ASSOC))
			{
			echo '<li> ' . $contact['poste'] . ' : ' . $contact['prenom'] . ' ' . $contact['nom'] . '</li> ' ; 
			}
		echo '</ul>';
		$reponse->closeCursor();
		
	}


	function GetContactsUnique($id)
	{
		$conn = connectiondb();
		$reponse = $conn->prepare('SELECT upper(nom) AS nom, prenom, poste, mail, tel, coordonnes FROM contact WHERE id = :id');
		$reponse->bindParam(':id', $id, PDO::PARAM_INT);
		$reponse->execute();

		$contact = $reponse->fetch(PDO::FETCH_ASSOC);

		echo '<stong>     ' . $contact['nom'] . ' ' . $contact['prenom'] . '</strong><br />';
		if(!empty($contact['poste']))
		{
			echo ' Poste : ' . $contact['poste'] . '<br />';
		}
		if(!empty($contact['mail']))
		{
			echo 'Mail : ' . $contact['mail'] . '<br />';
		}
		if(!empty($contact['tel']))
		{
			echo 'Téléphone : ' . $contact['tel'] . '<br />';
		}
		if(!empty($contact['coordonnes']))
		{
			echo $contact['coordonnes'] . '<br />';
		}

		$reponse->closeCursor();
		
	}

	function GetArretes($id)
	{
		$conn = connectiondb();
		// mise en forme des arrêtés 
		$reponse = $conn->prepare('SELECT annee, fouille, diagnostic, paleolithique, neolithique, protohistoire, romain, medieval, moderne, contemporain FROM arrete WHERE id_operateur = :id');
		$reponse->bindParam(':id', $id, PDO::PARAM_INT);
		$reponse->execute();

		echo '<h3> Arrêtés </h3>';
		echo '<table>';
		echo '<tr>';
		echo '<th> Date </th>';
		echo '<th> Fouilles </th>';
		echo '<th> Diag. </th>';
		echo '<th> Paleo. </th>';
		echo '<th> Neo. </th>';
		echo '<th> Proto. </th>';
		echo '<th> Romain </th>';
		echo '<th> Mediéval </th>';
		echo '<th> Moderne </th>';
		echo '<th> Contemp. </th>';
		echo '</tr>';

		while ( $arrete= $reponse->fetch(PDO::FETCH_ASSOC))
			{
				echo '<tr> <td>' . $arrete['annee'] . ' </td> ';
				coloration_case($arrete['fouille']);
				coloration_case($arrete['diagnostic']);
				coloration_case($arrete['paleolithique']);
				coloration_case($arrete['neolithique']);
				coloration_case($arrete['protohistoire']);
				coloration_case($arrete['romain']);
				coloration_case($arrete['medieval']);
				coloration_case($arrete['moderne']);
				coloration_case($arrete['contemporain']);
			       	echo	'</tr> ' ; 
			}
		echo '</table>';
		$reponse->closeCursor();
	}

	function GetCandidatures($id)
	{
		$conn = connectiondb();
		// mise en forme des candidatures 
			$reponse = $conn->prepare('SELECT ca.poste AS poste, ca.support AS support, ca.date_envoi AS date_envoi, upper(co.nom) AS nom, co.prenom AS prenom FROM candidature AS ca LEFT JOIN contact AS co ON ca.id_contact = co.id WHERE ca.id_operateur = :id');

			$reponse->bindParam(':id', $id, PDO::PARAM_INT);
			$reponse->execute();


		echo '<h3> Candidatures </h3>';
		echo '<ul id="candidature">';
		while ( $candidature= $reponse->fetch(PDO::FETCH_ASSOC))
			{
			echo '<li> ' . $candidature['date_envoi'] . ' : ' . $candidature['poste'] . ' par ' . $candidature['support'] . ' à ' . $candidature['prenom'] . ' ' . $candidature['nom'] . '</li> ' ; 
			}
		echo '</ul>';
		$reponse->closeCursor();
	}

	function GetNotes($id, $boolean)
	{
		$conn = connectiondb();

		$reponse = $conn->prepare('SELECT note, source, web, date_ajout FROM notes WHERE historique = :historique AND id_operateur = :id');

		$reponse->bindParam(':id', $id, PDO::PARAM_INT);
		$reponse->bindParam(':historique', $boolean, PDO::PARAM_INT);
		$reponse->execute();

		echo '<h3> Notes </h3>';
		echo '<ul id="note">';
		while ($note = $reponse->fetch(PDO::FETCH_ASSOC))
		{
			echo '<li> ' . $note['note'] . '<br /> <cite> ' . $note['source'] . $note['web'] . ' (consulté : ' . $note[date_ajout] . ') </cite></li>';
		}
		echo '</ul>';
		$reponse->closeCursor();
	}
	
	function GetNotesHistoriques($id)
	{
		$conn = connectiondb();

		$reponse = $conn->prepare('SELECT note, source, web, date_ajout FROM notes WHERE historique = TRUE AND id_operateur = :id');

		$reponse->bindParam(':id', $id, PDO::PARAM_INT);
		$reponse->execute();

		echo '<h3> Notes </h3>';
		while ($note = $reponse->fetch(PDO::FETCH_ASSOC))
		{
			echo  $note['note'] . '<br /> <cite> ' . $note['source'] .  $note['web'] . ' (consulté : ' . $note[date_ajout] . ') </cite>';
		}
		$reponse->closeCursor();
	}

	function GetCandidatureUnique($id)
	{
		$conn = connectiondb();
		// mise en forme des candidatures 
			$reponse = $conn->prepare('SELECT ca.poste AS poste, ca.support AS support, ca.date_envoi AS date_envoi, ca.n_annonce AS n_annonce, ca.type_rep AS reponse, ca.id_operateur AS id_operateur, ca.id_contact AS id_contact FROM candidature AS ca WHERE ca.id = :id');

			$reponse->bindParam(':id', $id, PDO::PARAM_INT);
			$reponse->execute();

			$candidature= $reponse->fetch(PDO::FETCH_ASSOC);
			
			echo 'Date d\'envoi : ' . $candidature['date_envoi'] . '<br />';
			echo ' Poste  : ' . $candidature['poste'];
			if(!empty($candidature['n_annonce']))
			{
				echo ' - ' . $candidature['n_annonce'] . '<br />';
			}
			else
			{
				echo '<br />';
			}
			echo ' Support : ' . $candidature['support'] . '<br />';
			echo '<br />';
			if(!empty($candidature['reponse']))
			{
				echo $candidature['reponse'] . '<br />';
			}

			$reponse->closeCursor();

			$valeur['operateur'] = $candidature['id_operateur'];
			$valeur['contact'] = $candidature['id_contact'];

			return $valeur;

	}

