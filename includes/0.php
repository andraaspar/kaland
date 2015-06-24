<?php

$pathInputs_ = getPathInputs(1, "name");
$nameEscaped = htmlspecialchars($name);

$locationText = <<<EOT
<form action="">
	$pathInputs_
	<p>Mi a neved?</p>
	<p>
		<input name="n" value="$nameEscaped"/>
	</p>
	<p>
		<button>Kész</button>
	</p>
</form>
EOT;

$locationPaths = [];
