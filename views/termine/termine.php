<!DOCTYPE html>
<html>
	<head>
		<title>Termine</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="sources/css/jquery.mobile-1.2.0.css"/>
		<link rel="stylesheet" href="sources/css/jquery.mobile-fhd.css"/>
		<link rel="stylesheet" href="sources/css/style.css"/>
		<script type="text/javascript" src="sources/js/jquery-1.8.2.min.js"></script>
		<script type="text/javascript" src="sources/js/jquery.mobile-1.2.0.min.js"></script>
	</head>
	<body>
		<div data-role="page">
			<div data-role="header">
				<h1>Termine</h1>
			</div>
			<div data-role="content">
				
				<!-- akkordionmenü -->
				<div data-role="collapsible-set">
				
					<?php
						for($i = 0; $i < count($semestersWithAppointments); $i++)
						{
							//header mit namen erstellen, ersten ausklappen
							$name = $semestersWithAppointments[$i]->name;
							if($i == 0)
								echo "<div data-role='collapsible' data-theme='a' data-collapsed='false'><h3>$name</h3><p>";
							else
								echo "<div data-role='collapsible' data-theme='a'><h3>$name</h3><p>";
							
							//termine in block einfügen
							$temp = $semestersWithAppointments[$i]->appointments;

							foreach($temp as $appointment)
							{
								echo "{$appointment['name']}: {$appointment['date_from']} - {$appointment['date_to']}<br>";
							}
							echo "</p></div>";
						}
					?>
				</div>
				
			</div>
		</div> 
	</body>
</html>