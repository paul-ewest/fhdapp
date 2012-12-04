<?php

/**
 * FHD-App
 *
 * @version 0.0.1
 * @copyright Fachhochschule Duesseldorf, 2012
 * @link http://www.fh-duesseldorf.de
 * @author Fabian Martinovic (FM), <fabian.martinovic@fh-duesseldorf.de>
 */

try
{
    
    if(!isset($_SESSION['connection']))
    {
        session_start();
        require_once 'system/database.php';
        new Database();
    }

    // Wenn noch nicht auf den Login-Button geklickt wurde dann
    /*if(!isset($_POST['login'])){  
        // Loginformular einbinden
        require_once 'views/login.php';
    } else {
        // den Controller einbinden
        require_once 'controllers/loginController.php';
        // Controller-Instanz erstellen
        new LoginController();
    }*/


    //get für deeplinks??
    if(isset($_GET['page']))
    {
        //terminezeugs
        require_once 'controllers/termineController.php';
        $appointmentController = new AppointmentController();
        $semestersWithAppointments = $appointmentController->semestersWithAppointments();
        require_once 'views/termine/termine.php';
    }
    else
    {
        echo "<a href='index.php?page=Termine'>Termine</a>";
    }
    
}
catch(Exception $error)
{
    // Errormessage ausgeben
    echo $error->getMessage();
}

/* End of file index.php */
/* Location: ./index.php */