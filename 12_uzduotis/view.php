<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		foreach ($imones as $imone) {
			echo "<div>";
			."Imone: " .$imone['id']
			."<br>"
			."Imone: " .$imone['imone'] 
			."<br>"
			."Imones kodas" . $imone['imones_kodas']
			."<br>"
			."Kliento tipas" . $imone['kliento_tipas']
			."<br>"
			."Kliento registravimo data" .$imone['kliento_registravimo_data']
			.echo "</div>";
		}
	?>
</body>
</html>