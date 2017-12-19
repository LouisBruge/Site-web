	<h1> <?= $candidature->poste(); ?> chez <a href="/archeo/public/operateur.php?id='<?= $candidature->operateur(); ?>'"> <?= $candidature->operateur(); ?></a> </h1>
	
	<p>
	Date d'envoi de la candidature : <?=  date('d/m/Y', strtotime($candidature->date_envoi())) ?> par <?= $candidature->support() ?> <br />

	envoyer à <?= $candidature->contact() ?> <br /><br />

	Numéro d'annonce : <?= $candidature->n_annonce() ?>
	</p>

