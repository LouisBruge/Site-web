	<p> <h1> <?= $film->titre(); ?> </h1>

	Film réalisée par : <strong> <?= $film->realisateur(); ?> </strong> <br />
	en <?= $film->annee(); ?> par le studio <?= $film->studio(); ?>

	<br />
	<br />

	Durée : <?= $film->duree();?> min<br />
