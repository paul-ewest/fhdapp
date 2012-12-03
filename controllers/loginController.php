<?php

/**
 * FHD-App
 *
 * @version 0.0.1
 * @copyright Fachhochschule Duesseldorf, 2012
 * @link http://www.fh-duesseldorf.de
 * @author Fabian Martinovic (FM), <fabian.martinovic@fh-duesseldorf.de>
 */

class LoginController{
    
    /**
     * Konstruktor des Login-Controllers
     */
    public function __construct(){
        // Login-Modell einbinden
        require_once 'models/login.php';
        // und Objekt erstellen
        new Login();
    }
}

 
/* End of file lognController.php */
/* Location: ./controllers/loginController.php */