<?php

/**
 * FHD-App
 *
 * @version 0.0.1
 * @copyright Fachhochschule Duesseldorf, 2012
 * @link http://www.fh-duesseldorf.de
 * @author Fabian Martinovic (FM), <fabian.martinovic@fh-duesseldorf.de>
 */

class Test extends Data{

    /**
     * Gibt alle Personen aus der Datenbank wieder
     * @return Array
     */
    public function getPerson(){
        try{
            // Verbindung aufbauen, Zugangsdaten kommmen aus dem Data-Objekt
            $db = new mysqli($this->getHostname(), $this->getUsername(), $this->getPassword(), $this->getDatabase());
            
            // Abfrage ausführen
            $result = $db->query("SELECT * FROM personen");
            
            // Ergebnis der Abfrage "durchwandern" und in Array schreiben
            while($row = $result->fetch_assoc()){
                $resultSet[] = $row;
            }
            
            return $resultSet;
            
        } catch(Exception $e){
            echo $e->getMessage();
        }
    }
}

/* End of file test.php */
/* Location: ./models/test.php */