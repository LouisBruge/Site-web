<!-- formulaire pour les opérateurs en archéologie -->
	<form method="post" action="/archeo/public/operateur.php" id="operateur">
	<h2> Enregistrement des opérateurs archéologiques </h2>
	<fieldset>
	<legend> Administratif </legend>
	Nom : <input type="text" name="operateur" /> <br />
		Abréviation : <input type="text" name="abrev"  /> Activité : <input type="text" name="activite" /> <br />
		Secteur :  <input type="radio" name="secteur" value="public" id="public" checked="checked" /><label for="public">oui</label> <input type="radio" name="secteur" value="prive" id="prive" /><label for="prive">privé</label> <br />
		Statut : <input type="text" name="statut_juridique" size='10'/> Siren/Siret : <input type='number' name='siren'/> <br />
		Date de création : <input type="number" name="date_creation" /> <br />
		Nbre personnel : <input type="number" name="personnel_min" placeholder="min" size='3'/> <input type="number" name="personnel_max" placeholder="max" size='3'/>
	</fieldset>

	<fieldset>
	<legend> Coordonnées </legend>

<!-- Enregistrement des coordonnées de l'opérateur -->
		Nom de l'opérateur : <input type="text" name="service" /> Bâtiment : <input type="text" name="batiment" /> <br />
		N<sup>o</sup> : <input type="text" name="numero_siege"/> Rue/Voie : <input type="text" name="addresse" /><br />
		Complement : <input type="text" name="complement_addresse"/> Boite : <input type="number" name="boite_postale" /> <br />
		Code : <input type="number" name="code_postal" /> Ville : <input type="text" name="ville" /> CEDEX : <input type="text" name="code_cedex" placeholder="CEDEX" /> Dept. : <input type="text" name="departement" /> Reg. : <input type="text" name="region" /><br />
		mail : <input type="email" name="mail" />
		Site Web : <input type="url" name="web" />
		Téléphone : <input type='tel' name="telephone" /> <br />

	</fieldset>
       <input type="submit" name="validation" /><br/>
       </form>


