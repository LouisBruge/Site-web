	<h1> <?= $contact->nom() ?> <?= $contact->prenom() ?> </h1>
	<h2> <?= $contact->operateur() ?> </h2>

	<p>
		Poste : <?= $contact->poste() ?> <br />
		<br />
		Mail : <?= $contact->mail() ?> <br />
		Téléphone : <?= $contact->tel() ?> <br />
		Coordonnées : <?= $contact->coordonnes() ?> <br />
	</p>
