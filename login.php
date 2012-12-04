<?php

/**
 * FHD-App
 *
 * @version 0.0.1
 * @copyright Fachhochschule Duesseldorf, 2012
 * @link http://www.fh-duesseldorf.de
 * @author Fabian Martinovic (FM), <fabian.martinovic@fh-duesseldorf.de>
 */

// Falls beim Login Fehler passiert ist, diesen ausgeben
if(isset($_SESSION['loginfailure'])){
	echo '<div id="failure">'.$_SESSION['loginfailure'].'</div>';
}

?>

<form name="login" method="post" action="">
	<table>
		<tr><td>Benutzername</td><td><input type="textfield" id="username" name="username" /></td></tr>
		<tr><td>Passwort</td><td><input type="password" id="password" name="password" /></td></tr>
		<tr><td>&nbsp;</td><td><input type="submit" id="login" name="login" value="Login"/></td></tr>
	</table>
</form>

<?php

if(isset($_POST['login'])){
	require_once 'controllers/loginController.php';
	new LoginController($_POST);
}


/* End of file login.php */
/* Location: ./login.php */