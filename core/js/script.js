$(document).ready(
	function() {
		console.log('Fichier chargé');

		// menu rétractable
		$('.menu-trigger').on('click', function() { 
			console.log('Click');
			$('.element_menu').toggle();}
		)
	});

