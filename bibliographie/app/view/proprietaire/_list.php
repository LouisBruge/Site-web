<h3> Propriétaire </h3>

<ul>
	<?php foreach($listproprietaires AS $proprietaire)
	{
		?>
		<li> <?= $proprietaire->nom();?> <?= $proprietaire->prenom();?>
		<?php
	};
	?>
</ul>
