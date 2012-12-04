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
	
}
 
/* End of file veranstaltungen.php */
/* Location: ./models/veranstaltungen.php */