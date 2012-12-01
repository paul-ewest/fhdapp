<?php

/**
 * FHD-App
 *
 * @version 0.0.1
 * @copyright Fachhochschule Duesseldorf, 2012
 * @link http://www.fh-duesseldorf.de
 * @author Fabian Martinovic (FM), <fabian.martinovic@fh-duesseldorf.de>
 */

// include layout
require_once '../../layout/frontend/header.php';

?>

<form name="mensa" method="post" action="">
	<table>
		<tr>
			<td>Kalenderwoche:</td><td><input type="textfield" id="calenderweek" name="calenderweek" value="" /></td>
			<td>
				<input type="radio" id="canteen_north" name="canteens" />Mensa Nord
				<input type="radio" id="canteen_south" name="canteens" />Mensa Universit&auml;tsstrasse
			</td>
		</tr>
	</table>
	<table>
		<tr>
			<th>&nbsp;</th>
			<th class="weekday">Montag</th>
			<th class="weekday">Dienstag</th>
			<th class="weekday">Mittwoch</th>
			<th class="weekday">Donnerstag</th>
			<th class="weekday">Freitag</th>
		</tr>
		<tr id="meal_one" class="both_campus">
			<td>Essen 1</td>
			<td><input type="textarea" name="mon_meal_one"/></td>
			<td><input type="textarea" name="tue_meal_one"/></td>
			<td><input type="textarea" name="wed_meal_one"/></td>
			<td><input type="textarea" name="thu_meal_one"/></td>
			<td><input type="textarea" name="fri_meal_one"/></td>
		</tr>
		<tr id="meal_two" class="both_campus">
			<td>Essen 2</td>
			<td><input type="textarea" name="mon_meal_two"/></td>
			<td><input type="textarea" name="tue_meal_two"/></td>
			<td><input type="textarea" name="wed_meal_two"/></td>
			<td><input type="textarea" name="thu_meal_two"/></td>
			<td><input type="textarea" name="fri_meal_two"/></td>
		</tr>
		<tr id="side" class="both_campus">
			<td>Beilagen</td>
			<td><input type="textarea" name="mon_side"/></td>
			<td><input type="textarea" name="tue_side"/></td>
			<td><input type="textarea" name="wed_side"/></td>
			<td><input type="textarea" name="thu_side"/></td>
			<td><input type="textarea" name="fri_side"/></td>
		</tr>
		<tr id="hotpot" class="both_campus">
			<td>Eint&ouml;pfe</td>
			<td><input type="textarea" name="mon_hotpot"/></td>
			<td><input type="textarea" name="tue_hotpot"/></td>
			<td><input type="textarea" name="wed_hotpot"/></td>
			<td><input type="textarea" name="thu_hotpot"/></td>
			<td><input type="textarea" name="fri_hotpot"/></td>
		</tr>
		<tr id="bbq" class="uni_campus">
			<td>Grill</td>
			<td><input type="textarea" name="mon_bbq"/></td>
			<td><input type="textarea" name="tue_bbq"/></td>
			<td><input type="textarea" name="wed_bbq"/></td>
			<td><input type="textarea" name="thu_bbq"/></td>
			<td><input type="textarea" name="fri_bbq"/></td>
		</tr>
		<tr id="pan" class="uni_campus">
			<td>Pfanne</td>
			<td><input type="textarea" name="mon_pan"/></td>
			<td><input type="textarea" name="tue_pan"/></td>
			<td><input type="textarea" name="wed_pan"/></td>
			<td><input type="textarea" name="thu_pan"/></td>
			<td><input type="textarea" name="fri_pan"/></td>
		</tr>
		<tr id="wok" class="uni_campus">
			<td>Wok</td>
			<td><input type="textarea" name="mon_wok"/></td>
			<td><input type="textarea" name="tue_wok"/></td>
			<td><input type="textarea" name="wed_wok"/></td>
			<td><input type="textarea" name="thu_wok"/></td>
			<td><input type="textarea" name="fri_wok"/></td>
		</tr>
		<tr id="gratin" class="uni_campus">
			<td>Wok</td>
			<td><input type="textarea" name="mon_gratin"/></td>
			<td><input type="textarea" name="tue_gratin"/></td>
			<td><input type="textarea" name="wed_gratin"/></td>
			<td><input type="textarea" name="thu_gratin"/></td>
			<td><input type="textarea" name="fri_gratin"/></td>
		</tr>
		<tr id="weekoffer" class="uni_campus">
			<td>Wochenangebot</td>
			<td><input type="textarea" name="mon_weekoffer"/></td>
			<td><input type="textarea" name="tue_weekoffer"/></td>
			<td><input type="textarea" name="wed_weekoffer"/></td>
			<td><input type="textarea" name="thu_weekoffer"/></td>
			<td><input type="textarea" name="fri_weekoffer"/></td>
		</tr>
		<tr id="special" class="both_campus">
			<td>Spezial</td>
			<td><input type="textarea" name="mon_special"/></td>
			<td><input type="textarea" name="tue_special"/></td>
			<td><input type="textarea" name="wed_special"/></td>
			<td><input type="textarea" name="thu_special"/></td>
			<td><input type="textarea" name="fri_special"/></td>
		</tr>
		<tr id="action" class="uni_campus">
			<td>Aktion</td>
			<td><input type="textarea" name="mon_action"/></td>
			<td><input type="textarea" name="tue_action"/></td>
			<td><input type="textarea" name="wed_action"/></td>
			<td><input type="textarea" name="thu_action"/></td>
			<td><input type="textarea" name="fri_action"/></td>
		</tr>
		<tr id="green_corner" class="uni_campus">
			<td>Green Corner</td>
			<td><input type="textarea" name="mon_green_corner"/></td>
			<td><input type="textarea" name="tue_green_corner"/></td>
			<td><input type="textarea" name="wed_green_corner"/></td>
			<td><input type="textarea" name="thu_green_corner"/></td>
			<td><input type="textarea" name="fri_green_corner"/></td>
		</tr>
		<tr><td><input type="submit" name="speichern" value="Speichern"/></td></tr>
	</table>
</form>


<?php
require_once '../../layout/frontend/footer.php';
?>


<script href="../../sources/customjs/mensa.js"></script>


<?php
/* End of file backend_mensa.php */
/* Location: ./views/mensa/backend_mensa.php */