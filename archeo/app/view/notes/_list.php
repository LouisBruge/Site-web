<h2> Notes </h2>

<p>
<?php
foreach($listnotes as $notes)
{
?>
<br />
	<?=$notes->text();?> <br />
	<cite> 
	<?= $notes->source(); ?> <?= $notes->web(); ?> (consulté le <?= $notes->dateAjout() ?> )
	</cite>
<br />
<?php
}
?>
</p>

