<?php

/**
 * FHD-App
 *
 * @version 0.0.1
 * @copyright Fachhochschule Duesseldorf, 2012
 * @link http://www.fh-duesseldorf.de
 * @author Fabian Martinovic (FM), <fabian.martinovic@fh-duesseldorf.de>
 */

/**
 * Diese Klasse stellt persistente Daten bereit
 */
class Data{
    
    /**
     * Array mit Datenbankverbindungen
     * @var Array 
     */
    private $dbConnection;
    
    /**
     * Datenbankobjekt
     * @var Object 
     */
    private $Database;
    
    
    public function __construct() {
        require_once '/system/database.php';
        $this->Database = new Database();
        $this->createDbConnection();
    }

        
    /**
     * Generiert die Datenbankverbindung
     */
    private function createDbConnection(){
        $this->dbConnection = array();
        
        try{
            $this->dbConnection['host'] = $this->Database->getHostname(); //$_SESSION['host'];
            $this->dbConnection['db'] = $this->Database->getDatabase(); //$_SESSION['db'];
            $this->dbConnection['user'] = $this->Database->getUsername(); //$_SESSION['user'];
            $this->dbConnection['pwd'] = $this->Database->getPassword(); //$_SESSION['pwd'];
            
        } catch(Exception $error){
            echo $error->getMessage();
        }
    }
    
    
    /**
     * Liefert den Hostnamen
     * @return String
     */
    public function getHostname(){
        return $this->dbConnection['host'];
    }
    
    
    /**
     * Liefert den Hostnamen
     * @return String
     */
    public function getDatabase(){
        return $this->dbConnection['db'];
    }
    
    
    /**
     * Liefert den Hostnamen
     * @return String
     */
    public function getUsername(){
        return $this->dbConnection['user'];
    }
    
    
    /**
     * Liefert den Hostnamen
     * @return String
     */
    public function getPassword(){
        return $this->dbConnection['pwd'];
    }
}

?>
