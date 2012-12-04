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
		try
		{
			$result = $_SESSION['connection']->query("SELECT * FROM user");
			while($row = $result->fetch_assoc())
			{
					echo ($row['username']);
			}
			
		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}
	}
	
}
 
/* End of file veranstaltungen.php */
/* Location: ./models/veranstaltungen.php */