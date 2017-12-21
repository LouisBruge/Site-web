<h2> Notes </h2>
<p>
<?php
foreach($listnotes as $notes)
{
?>
	<?=$notes->text();?> <br />
	<cite> 
	<?= $notes->source(); ?> <?= $notes->web(); ?> (consulté le <?= date('j-m-Y', strtotime($notes->dateAjout())) ?> )
	</cite>
<br />
<?php
}
?>
</p>

