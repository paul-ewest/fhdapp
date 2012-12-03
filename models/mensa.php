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
 * Mensaklasse
 */
class Mensa{

	public function __construct(){}

	public function insertPlan($post){
		try{
			// open database-connection
			$db = new mysqli();
            $db->connect($_SESSION['host'], $_SESSION['user'], $_SESSION['pwd'], $_SESSION['db']);


		} catch (Exception $e){
			echo $e->getMessage();
		}
	}

}


/* 
 POST-Array:

calenderweek:45
canteens:canteen_north
mon_meal_one:
tue_meal_one:
wed_meal_one:
thu_meal_one:
fri_meal_one:
mon_meal_two:
tue_meal_two:
wed_meal_two:
thu_meal_two:
fri_meal_two:
mon_side:
tue_side:
wed_side:
thu_side:
fri_side:
mon_hotpot:
tue_hotpot:
wed_hotpot:
thu_hotpot:
fri_hotpot:
mon_bbq:
price_stud_mon_bbq:
price_att_mon_bbq:
tue_bbq:
price_stud_tue_bbq:
price_att_tue_bbq:
wed_bbq:
price_stud_wed_bbq:
price_att_wed_bq:
thu_bbq:
price_stud_thu_bbq:
price_att_thu_bbq:
fri_bbq:
price_stud_fri_bbq:
price_att_fri_bbq:
mon_pan:
price_stud_mon_pan:
price_att_mon_pan:
tue_pan:
price_stud_tue_pan:
price_att_tue_pan:
wed_pan:
price_stud_wed_pan:
price_att_wed_pan:
thu_pan:
price_stud_thu_pan:
price_att_thu_pan:
fri_pan:
price_stud_fri_pan:
price_att_fri_pan:
mon_wok:
price_stud_mon_wok:
price_att_mon_wok:
tue_wok:
price_stud_tue_wok:
price_att_tue_wok:
wed_wok:
price_stud_wed_wok:
price_att_wed_wok:
thu_wok:
price_stud_thu_wok:
price_att_thu_wok:
fri_wok:
price_stud_fri_wok:
price_att_fri_wok:
mon_gratin:
price_stud_mon_gratin:
price_att_mon_gratin:
tue_gratin:
price_stud_tue_gratin:
price_att_tue_gratin:
wed_gratin:
price_stud_wed_gratin:
price_att_wed_gratin:
thu_gratin:
price_stud_thu_gratin:
price_att_thu_gratin:
fri_gratin:
price_stud_fri_gratin:
price_att_fri_gratin:
mon_weekoffer:
price_stud_mon_weekoffer:
price_att_mon_weekoffer:
tue_weekoffer:
price_stud_tue_weekoffer:
price_att_tue_weekoffer:
wed_weekoffer:
price_stud_wed_weekoffer:
price_att_wed_weekoffer:
thu_weekoffer:
price_stud_thu_weekoffer:
price_att_thu_weekoffer:
fri_weekoffer:
price_stud_fri_weekoffer:
price_att_fri_weekoffer:
mon_special:
price_stud_mon_special:
price_att_mon_special:
tue_special:
price_stud_tue_special:
price_att_tue_special:
wed_special:
price_stud_wed_special:
price_att_wed_special:
thu_special:
price_stud_thu_special:
price_att_thu_special:
fri_special:
price_stud_fri_special:
price_att_fri_special:
mon_action:
price_stud_mon_action:
price_att_mon_action:
tue_action:
price_stud_tue_action:
price_att_tue_action:
wed_action:
price_stud_wed_action:
price_att_wed_action:
thu_action:
price_stud_thu_action:
price_att_thu_action:
fri_action:
price_stud_fri_action:
price_att_fri_action:
mon_green_corner:
price_stud_mon_green_corner:
price_att_mon_green_corner:
tue_green_corner:
price_stud_tue_green_corner:
price_att_tue_green_corner:
wed_green_corner:
price_stud_wed_green_corner:
price_att_wed_green_corner:
thu_green_corner:
price_stud_thu_green_corner:
price_att_thu_green_corner:
fri_green_corner:
price_stud_fri_green_corner:
price_att_fri_green_corner:
*/

 
/* End of file mensa.php */
/* Location: ./models/mensa.php */