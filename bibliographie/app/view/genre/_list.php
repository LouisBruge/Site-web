<h3> Genres </h3>

<ul>
	<?php foreach($listgenre AS $genre)
		{
			?>
			<li> <?= $genre->nom(); ?>
			<?php
		};
		?>
</ul>
