<?php

/**
 * FHD-App
 *
 * @version 0.0.1
 * @copyright Fachhochschule Duesseldorf, 2012
 * @link http://www.fh-duesseldorf.de
 * @author Fabian Martinovic (FM), <fabian.martinovic@fh-duesseldorf.de>
 */

// Ausgabe des Logins
try{
    // Session starten
    session_start();
    
    // Wenn noch nicht auf den Login-Button geklcikt wurde dann
    if(!isset($_POST['login'])){  
        // Loginformular einbinden
        require_once 'views/login.php';
    } else {
        // den Controller einbinden
        require_once 'controllers/loginController.php';
        // Controller-Instanz erstellen und das Data-Objekt übergeben
        new LoginController();
    }
    
} catch(Exception $error){
    // Errormessage ausgeben
    echo $error->getMessage();
}

/* End of file index.php */
/* Location: ./index.php */