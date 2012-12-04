<?php

/**
 * FHD-App
 *
 * @version 0.0.1
 * @copyright Fachhochschule Duesseldorf, 2012
 * @link http://www.fh-duesseldorf.de
 * @author Fabian Martinovic (FM), <fabian.martinovic@fh-duesseldorf.de>
 */
	ob_start();
	require_once 'layout/frontend/header.php';
	
	require_once 'controllers/veranstaltungenController.php';
	$Controller = new VeranstaltungenController();
	
	$ergebnis =  $Controller->getInformation(1,1);
	
	
	


	foreach($ergebnis as $details)
	{
		//echo $details;
		$zeile = explode(';',$details);
		
		echo'
			<table id="table_veranstaltung_frontend" border="1">
				<thead>
				<tr>
				  <th colspan="2">'.$zeile[0].'</th>
				</tr>
				</thead>
				<tbody>
					
				<tr>
					<td>Datum:</td>
					<td>
						'.$zeile[1].'
					</td>
				</tr>
					
				<tr>
					<td>Beschreibung:</td>
					<td>
						'.$zeile[2].'
					</td>
				</tr>	
				</tbody>
			</table>';
	}
	
	require_once 'layout/frontend/footer.php';
	ob_end_flush();
	/* End of file veranstaltungen.php */
	/* Location: ./views/veranstaltungen/veranstaltungen.php */
?>