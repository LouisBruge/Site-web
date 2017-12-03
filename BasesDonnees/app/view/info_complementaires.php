<?php
		// listings pour la modification de la fiche
		require($_SERVER['DOCUMENT_ROOT'] . '/BasesDonnees/MISE_FORME/donnees_annexes_ajout.php');
		ajout_donnee_annexe($db, $id, $media);

		// enregistrement des données annexes
		require($_SERVER['DOCUMENT_ROOT'] . '/BasesDonnees/ENREG/info_complementaires.php');
		if (isset($_POST['genre']))
		{
			enreg_genre($db, $media, $_POST['genre'], $id);
		}

		if (isset($_POST['support']))
		{
			enreg_support($db, $media, $_POST['support'], $id);
		}
		if (isset($_POST['proprietaire']))
		{
			enreg_proprio($db, $media, $_POST['proprietaire'], $id);
		}

?>
