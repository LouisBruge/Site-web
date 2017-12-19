	<h1> <?= $operateur->operateur() ?> </h1>
	<h2> Administratif </h2>
	<p>
	
		Secteur : <?= $operateur->secteur() ?> <br />
		Statut juridique : <?= $operateur->statut_juridique() ?><br />
		Activité : <?= $operateur->activite() ?><br />

	</p>

	<h2> Coordonnées du siege </h2>
	<p>
	<?= $operateur->service() ?> <br />
	<?= $operateur->batiment() ?><br />
	<?= $operateur->numero_siege() ?> <?= $operateur->addresse() ?> <?= $operateur->complement_addresse() ?><br />
	<?= $operateur->code_postal() ?> <?= $operateur->ville() ?> <?= $operateur->code_cedex() ?> <br />
	</p>

	<h2> Coordonnées </h2>
	<p>
		Téléphone : <?= $operateur->telephone() ?><br />
		Mail : <?= $operateur->mail() ?><br />
		Web : <a href="<?= $operateur->web() ?>"> <?= $operateur->web() ?> </a><br />
	</p>

