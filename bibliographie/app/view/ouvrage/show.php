	<p> <h1> <?= $ouvrage->titre(); ?> </h1>

	ouvrage écrit par : <strong> <?= $ouvrage->auteur(); ?> </strong> <br />
	publié en <?= $ouvrage->annee(); ?> par <?= $ouvrage->editeur(); ?> (<?= $ouvrage->ville(); ?>) <?php
	if(!empty($ouvrage->_collection)) {
		echo 'dans la collection : ' . $ouvrage->collection();
	}
?>


	<br />
	<br />

