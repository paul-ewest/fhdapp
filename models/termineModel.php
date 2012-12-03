<?php
	class AppointmentModel
	{
		public function getSemesters()
		{
			try
			{
				$db = new mysqli($_SESSION['host'], $_SESSION['user'], $_SESSION['pwd'], $_SESSION['db']);

				$result = $db->query("SELECT * FROM semester");
				while($row = $result->fetch_assoc())
				{
					$resultSet[] = new Semester($row["id"], $row["name"]);
				}
				return $resultSet;
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
		}
		
		public function getAppointments($semester_id)
		{
			try
			{
				$db = new mysqli($_SESSION['host'], $_SESSION['user'], $_SESSION['pwd'], $_SESSION['db']);
				
				$result = $db->query("SELECT * FROM appointments WHERE semester_id = $semester_id");
				while($row = $result->fetch_assoc())
				{
					$resultSet[] = $row;
				}
				return $resultSet;
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
		}
	}
?>