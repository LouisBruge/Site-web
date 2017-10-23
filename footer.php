<footer>
	<div class="credits">
		<p> © L. Bruge 2016 - 2017 </p>
	</div>
	<div class="powered">
		<p>
			php : <?php echo phpversion(); ?>
			 et postgresql : 9.6.1
			<?php require($_SERVER['DOCUMENT_ROOT'].'/Login/ConnectionDB.php');
			echo $db->query('SELECT version()') ->fetchColumn(); 
			?>
		</p>
	</div>
</footer>
	
