<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Bastian Janusz">
		
		<title>Auswertung für ein Quiz mit 3 Fragen</title>
		
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<?php
			$antwort1 = $POST["frage-1-antwort"];
			$antwort2 = $POST["frage-2-antwort"];
			$antwort3 = $POST["frage-3-antwort"];
		
			$richtige = 0;
		
			if ($antwort1 == "A") { $richtige++; }
			if ($antwort2 == "B") { $richtige++; }
			if ($antwort3 == "C") { $richtige++; }
		
			echo "$richtige / 3 Richtigen !";
		?>

	</body>
</html>