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
		 try{
            // neue Datenbankverbindung herstellen
            $db = new mysqli();
            $db->connect($_SESSION['host'], $_SESSION['user'], $_SESSION['pwd'], $_SESSION['db']);
            
            // Abfrage
            $query = $db->query("SELECT username, password 
                                 FROM personen ");
			// Abfrage ausführen
            while($row = $query->fetch_assoc()){
                echo $row;
            }
            
            // Wenn Abfrage richtig (nicht leer), dann Text "Eingeloggt" ausgeben
          
            
        } catch(Exception $e){
            echo $e->getMessage();
        }
	}
}
 
/* End of file veranstaltungen.php */
/* Location: ./models/veranstaltungen.php */