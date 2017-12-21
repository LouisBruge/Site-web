		<!-- mise en forme du formulaire d'enregistrement des ouvrages -->
 	       	<form method="post" action="/bibliographie/public/ouvrage.php" id="monographie">
        	<h2> Ouvrage </h2>
            Auteur(s) : <br />
            <input type="text" name="auteur" size=60 required/> <br/>

            Titre : <br />
            <input type="text" name="titre" size=60 required/> <br/>

            Date : <br />
            <input type="number" name="date" required/> <br/> 

            Editeur : <br />
            <input type="text" name="editeur" required/> <br/>

            Ville d'édition : <br />
            <input type="text" name="ville" required/> <br/>
            Collection : <br />
            <input type="text" name="collection" /> <br />

Commentaire : <br />
      <textarea name="commentaire" rows="2" cols="45" ></textarea> <br />

<input type="submit" name="validation"/>
</form>
