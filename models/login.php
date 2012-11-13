<?php

/**
 * FHD-App
 *
 * @version 0.0.1
 * @copyright Fachhochschule Duesseldorf, 2012
 * @link http://www.fh-duesseldorf.de
 * @author Fabian Martinovic (FM), <fabian.martinovic@fh-duesseldorf.de>
 */

class Login{
    
    /**
     * Benutzername
     * @var String 
     */
    private $username;
    
    /**
     * Passwort (MD5)
     * @var String 
     */
    private $password;
    
    /**
     * Konstruktor der den Loginvorgang durchführt
     * @param Object $Data
     */
    public function __construct($Data){
        
        // Eingaben aus dem Formular
        $this->setUsername($_POST['username']);
        $this->setPassword(md5($_POST['password']));exit();
        
        try{
            // neue Datenbankverbindung herstellen
            $db = new mysqli();
            $db->connect($Data->getHostname(), $Data->getUsername(), $Data->getPassword(), $Data->getDatabase());
            
            // Abfrage
            $query = $db->query("SELECT username, password 
                                    FROM personen 
                                    WHERE username = '".$this->username."'
                                    AND password = '".$this->password."'");
            
            // Abfrage ausführen
            while($row = $query->fetch_assoc()){
                $resultSet[] = $row;
            }
            
            // Wenn Abfrage richtig (nicht leer), dann Text "Eingeloggt" ausgeben
            if(!empty($resultSet)){
                echo 'Eingeloggt';
            } else {
                // ansonsten "Login falsch" ausgeben
                echo 'Login falsch';
            }
            
        } catch(Exception $e){
            echo $e->getMessage();
        }
    }
    
    
    /**
     * Username setzen
     * @param String $username
     */
    public function setUsername($username) {
        $this->username = $username;
    }

    /**
     * Passwort setzen
     * @param String $password
     */
    public function setPassword($password) {
        $this->password = $password;
    }


}

 
/* End of file login.php */
/* Location: ./models/login.php */