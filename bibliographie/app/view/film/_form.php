
	<!-- mise en forme du formulaire d'enregistrement des films -->
	<form method="post" action="/bibliographie/public/film.php" id="film">
	<h2> Film </h2>
        Titre : <br />
        <input type="text" name="titre" required/> <br />

        Réalisateur : <br />
        <input type="text" name="realisateur" required/> <br />

        Studio : <br />
        <input type="text" name="studio" required/> <br />

        Année : <br />
        <input type="number" name="annee" maxlenght="4" min="1900" required="yes"> <br />

        Durée (min) : <br />
        <input type="number" name="duree" required> <br />

        Commentaire : <br />
        <textarea name="commentaire" rows="2" cols="45"> </textarea> <br />

		<input type="submit" name="validation" /><br />
		</form>


