<?php
	class AppointmentController
	{
		public function __construct()
		{
			//appointmentModel instanziieren
			require_once '/models/termineModel.php';
			$this->appointmentModel = new AppointmentModel();
		}
				
		//array aller semester mit ihren terminen
		public function semestersWithAppointments()
		{
			$allSemesters = $this->appointmentModel->getSemesters();

			//den semesterblöcken jeweils die termine hinzufügen
			for($i = 0; $i < count($allSemesters); $i++)
			{
				$ownAppointments = $this->appointmentModel->getAppointments($allSemesters[$i]->id);
				for($j = 0; $j < count($ownAppointments); $j++)
				{
					$allSemesters[$i]->addAppointment($ownAppointments[$j]);
				}
			}
			return $allSemesters;
		}
	}

	class Semester
	{
		public function __construct($id, $name)
		{
			$this->id = $id;
			$this->name = $name;
		}

		public function addAppointment($appointment)
		{
			$this->appointments[] = $appointment;
		}
	}
?>