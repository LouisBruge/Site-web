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
