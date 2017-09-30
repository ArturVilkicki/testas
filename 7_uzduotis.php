<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$zodziai = ["labas rytas", "laba diena","good morning", "good afternoon", "labas vakaras"];
	print_r($zodziai);
	//$zodziai = array_map('strtolower', $zodziai);
	//print_r($zodziai);
	//foreach ($zodziai as $zodis) {
		//echo .strtoupper($zodis[0])
	//}
	array_change_key_case($zodziai,CASE_UPPER);
	return $zodziai;
	print_r($zodziai);
	?>
</body>
</html>