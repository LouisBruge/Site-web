<footer>
<p> © L. Bruge 2016 - 2017 
php : <?php echo phpversion(); ?> et postgresql : 9.6.1
	<?php require($_SERVER['DOCUMENT_ROOT'].'/ConnectionDB.php');
	echo $db->query('SELECT version()') ->fetchColumn(); 
	?>
</p>
</footer>
	
