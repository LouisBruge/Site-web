<?php

	form_citation();

	function citation($db, $id, $media)
	{
		try{
			$commande = 'SELECT id, citation, auteur, reference, date_scalaire, date_non_scalaire WHERE id_' . $media . ' = :id';
			$commande = $db->prepare($commande);
			$commande->bindParam(':id', $id, PDO::PARAM_INT);
			$commande->execute();
		return $commande;
		}
		catch(PDOException $e){
			echo 'Err : ' . $e->getMessage();
		};
	}

	function enreg_citation($db, $type_media, $citation, $auteur, $reference, $id_media, $date_scalaire, $siecle, $date_non_scalaire)
		{
			try{
				$requete =  "INSERT INTO citation (citation, auteur, reference, id_" . $type_media . ", date_scalaire, siecle, date_non_scalaire) VALUE (:citation, :auteur, :reference, :id_media, :date_scalaire, :siecle, :date_non_scalaire)";
				$req = $db->prepare($requete);
				$req->execute(array(
					':citation' => $citation,
					':auteur' => $auteur,
					':reference' => $reference,
					':id_media' => $id_media,
					':date_scalaire' => $date_scalaire,
					':siecle' => $siecle,
					':date_non_scalaire' => $date_non_scalaire
				)
			);
			}
			catch(PDOException $e){
				echo 'Err : ' . $e->getMessage();
			};
	}

	function affichage_citation($commande)
	{
		echo '<strong> Citation(s) : </strong>';
		while($element = $commande->fetch())
		{
			echo '<blockquote><p>"';
			echo $element['citation'];
			echo '" <br />';
			echo '<small> de ' . $element['auteur'] . ', <cite>' . $element['reference'] . '</cite>, ' . $element['date_scalaire'] . $element['date_non_scalaire'] . '</small></p></blockquote>';
		}
	}

	function form_citation()
	{
?>
	<form method="post" action="blabla.php" id="citation">
	<fieldset>
	<legend> Citation </legend>
	Citation : <br />
		<textarea name="citation" rows="2" cols="45"> </textarea> <br />
	Auteur(s) : <br />
		<input type = "text" name="auteur" required/> <br />
	Référence(s) : <br />
		<input type = "text" name="citation" /> <br />
	Date scalaire : <br />
		<input type = "number" name="date_scalaire" /> <br />
	Siècle : <br />
		<input type = "number" name="siecle" /> <br />
	Date non scalaire : <br />	
		<input type = "text" name="citation" /> <br />
	<input type="submit" name="validation" />
	</fieldset>
	</form>
<?php
	}
?>
