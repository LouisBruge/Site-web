<?php

require '/srv/http/Archeo/app/src/controller/arrete.php';
require '/srv/http/Archeo/app/src/modele/arreteManager.php';
require '/srv/http/moduleConnection.php';

$db = new connectionDb('archeo', 'louis', '@m19l5tt5');

$db->connection();

$test = $db::$pdo;

//$q = $test->query('SELECT * FROM auteur');

//$auteurs = [] ;
//while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
//{
//	$auteurs[] = new Auteur($donnees);
	
//}

//print_r($auteurs);


$arretes = new arreteManager($test);


$Listarretes = $arretes->getListByOperateur($id)
?>

<h2> Arrêtés </h2>
		<table>
		<tr>
		<th> Date </th>
		<th> Fouilles </th>
		<th> Diag. </th>
		<th> Paleo. </th>
		<th> Neo. </th>
		<th> Proto. </th>
		<th> Romain </th>
		<th> Mediéval </th>
		<th> Moderne </th>
		<th> Contemp. </th>
		</tr>
	
<?php
	foreach($Listarretes as $arrete)
			{
?>
	<tr> <td> <?= $arrete->annee() ?> </td>
		<td> <?=  $arrete->fouille() ?> </td>
		<td> <?=  $arrete->diagnostic() ?> </td>
		<td> <?=  $arrete->paleolithique() ?> </td>
		<td> <?=  $arrete->neolithique() ?> </td>
		<td> <?=  $arrete->protohistoire() ?> </td>
		<td> <?=  $arrete->romain() ?> </td>
		<td> <?=  $arrete->medieval() ?> </td>
		<td> <?=  $arrete->moderne() ?> </td>
		<td> <?=  $arrete->contemporain() ?> </td>
	</td>
<?php
			}
?>
		</table>
