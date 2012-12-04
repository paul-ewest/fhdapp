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
	
	if(isset($_GET['id']))
	{
		require_once 'views/veranstaltungen/'.$_GET['id'].'.php';
	}
	else
	{
		echo '
		<a href="?id=backend_veranstaltungen">Veranstaltungen Backend</a><br />
		<a href="?id=veranstaltungen">Veranstaltungen</a>';
	}
}
catch(Exception $error)
{
    // Errormessage ausgeben
    echo $error->getMessage();
}

/* End of file index.php */
/* Location: ./index.php */