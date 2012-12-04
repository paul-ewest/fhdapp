<?php
	require_once 'layout/frontend/header.php';

	echo "<div data-role='collapsible-set'>";
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
	echo "</div>";

	require_once 'layout/frontend/footer.php';
?>