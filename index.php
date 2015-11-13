<?php
require "includes/functions.php";

$name = getValue("n");
if (!$name) $name = "Kampó";

$location = getValue("l");
if (empty($location)) $location = "0";
$location = (int) $location;
$locationFilePath = "includes/" . $location . ".php";
if (file_exists($locationFilePath)) {
	require $locationFilePath;
} else {
	$locationText = <<<EOT
<p>Hoppá! Leestél a térképről!</p>
EOT;
	$locationPaths = [];
}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta charset="UTF-8"/>
	<title>Kaland</title>
</head>
<body>
	<?php echo $locationText ?>
	<ul>
		<?php
		foreach ($locationPaths as $locationPath => $locationPathText) {
		?>
			<li>
				<a href="<?php echo $locationPath ?>">
					<?php echo $locationPathText ?>
				</a>
			</li>
		<?php
		}
		?>
	</ul>
</body>
</html>
