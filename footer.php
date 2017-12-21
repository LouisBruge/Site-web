<footer>
<?php	use griselangue\core\connexion;
	$db = new connexion('archeo', $session);
?>


	<div class="credits">
		<p> © L. Bruge 2016 - 2017 </p>
	</div>
	<div class="powered">
		<p>
			php : <?= phpversion(); ?>
	et <?= $db->query('SELECT version()') ->fetchColumn();?>
		</p>
	</div>
</footer>
	
