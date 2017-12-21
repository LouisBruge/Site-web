		<!-- mise en forme du formulaire d'enregistrement des jeux -->
		<form method="post" action="/bibliographie/public/jeux.php" id="jeux_video">
		<h2> Jeux </h2>
        Titre : <br />
        <input type="text" name="titre"  required /> <br />

        Éditeur : <br />
        <input type="text" name="editeur" required /> <br />

        Année : <br />
        <input type="number" name="annee" maxlenght="4" min="1900" required="no">

	<br />
        Plateforme : <br />
            <select name="plateforme">
			<option value="PC">PC</option>
			<option value="PS2">PS2</option>
			<option value="PS1">PS1</option>
			<option value="Wii">Wii</option>
			<option value="Gameboy">Gameboy</option>
			<option value="Gameboy Color">Gameboy Color</option>
			</select> <br />

        Commentaire : <br />
        <textarea name="commentaire" rows="2" cols="45"> </textarea> <br />

		<input type="submit" name="validation" /><br />
		</form>

