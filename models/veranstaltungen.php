<?php

/**
 * FHD-App
 *
 * @version 0.0.1
 * @copyright Fachhochschule Duesseldorf, 2012
 * @link http://www.fh-duesseldorf.de
 * @author Fabian Martinovic (FM), <fabian.martinovic@fh-duesseldorf.de>
 */
 
class Veranstaltungen{

	public function __construct(){
			//Konstruktor
	}
	
	public function addDatensatz()
	{
		//$lang = $_GET['veranstaltung_language'];
		$lang = 1;
		$name = $_GET['veranstaltung_name'];
		$datum = $_GET['veranstaltung_datum_jahr'].'-'.$_GET['veranstaltung_datum_monat'].'-'.$_GET['veranstaltung_datum_tag'];
		$beschreibung = $_GET['veranstaltung_beschreibung'];
		
		try
		{
			$_SESSION['connection']->query("INSERT INTO events (language_id,name,date,description) VALUES ('".$lang."', '".$name."', '".$datum." 00:00:00', '".$beschreibung."');");
		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
	}
	
	public function getInformation($usertype, $fachbereich)
	{
		try
		{
			$result = $_SESSION['connection']->query("SELECT * FROM events");
			
			while($row = $result->fetch_assoc())
			{
				$resultSet[] = ($row['name'].';'.$row['date'].';'.$row['description']);
			}
			return $resultSet;
		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
	}
}
 
/* End of file veranstaltungen.php */
/* Location: ./models/veranstaltungen.php */
