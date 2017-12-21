<p>
	Nom : <?= $contact->nom(); ?> <br />
	Prenom : <?= $contact->prenom(); ?> <br />
	Naissance : <?= date('d-m-Y', strtotime($contact->naissance())); ?> <br />
</p>



