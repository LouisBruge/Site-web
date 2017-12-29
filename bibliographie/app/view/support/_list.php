<h3> Support </h3>

<ul>
	<?php
	foreach($listsupport AS $support)
	{
	?>
		<li> <?= $support->support(); ?> </li>
	<?php
	};
	?>
</ul>
