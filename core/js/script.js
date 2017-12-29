$(document).ready(
	function() {
		console.log('Fichier chargé');
	
		// masque les liens du menu
		$(".submenu").hide();

		// liens rétractables dans le menu
		$('#tabs').children('li').on('click', function() {
			$(this).next(".submenu").toggle();
		});

	});

