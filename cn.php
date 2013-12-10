<?php

/** --------------------------------------------------- **\
| ********* DO NOT REMOVE THIS COPYRIGHT NOTICE ********* |
+---------------------------------------------------------+
| Credits:     All the developers including the leaders:  |
|              Advocaite & Dzoki & Donnchadh              |
|                                                         |
| Copyright:   TravianX Project All rights reserved       |
\** --------------------------------------------------- **/

set_time_limit(0); 
        include_once ("GameEngine/Session.php");
        include_once ("GameEngine/config.php");

        mysql_connect(SQL_SERVER, SQL_USER, SQL_PASS);
        mysql_select_db(SQL_DB);

/**
 * If user is not administrator, access is denied!
 */
        if($session->access < ADMIN)
        	die("Access Denied: You are not Admin!");

/**
 * Functions
 */
        function generateBase($kid, $uid, $username) {
        	global $database, $message;
        	if($kid == 0) {
        		$kid = rand(1, 4);
        	} else {
        		$kid = $_POST['kid'];
        	}

        	$wid = $database->generateBase($kid);
        	$database->setFieldTaken($wid);
        	$database->addVillage($wid, $uid, $username, 1);
        	$database->addResourceFields($wid, $database->getVillageType($wid));
        	$database->addUnits($wid);
        	$database->addTech($wid);
        	$database->addABTech($wid);
        	$database->updateUserField($uid, "access", USER, 1);
        	$message->sendWelcome($uid, $username);
        }

/**
 * Creating account & capital village
 */
        $username = "Natars";
        $password = md5('013ab00e4' . rand(999999999999, 9999999999999999999999999) . 'f248588ed');
        $email = "natars@travianx.com";
        $tribe = 5;
        $desc = "[#natars]";

        $q = "INSERT INTO " . TB_PREFIX . "users (id,username,password,access,email,timestamp,tribe,location,act,protect) VALUES (3, '$username', '$password', " . USER . ", '$email', ".time().", $tribe, '', '', 0)";
        mysql_query($q);
        unset($q);
        $uid = $database->getUserField($username, 'id', 1);
        generateBase(0, $uid, $username);
        $wid = mysql_fetch_assoc(mysql_query("SELECT * FROM " . TB_PREFIX . "vdata WHERE owner = $uid"));
        $q = "UPDATE " . TB_PREFIX . "vdata SET pop = " . rand(700, 950) . " WHERE owner = $uid";
        mysql_query($q) or die(mysql_error());
        $q2 = "UPDATE " . TB_PREFIX . "users SET access = 0 WHERE id = $uid";
        mysql_query($q2) or die(mysql_error());
        if(SPEED > 3) {
        	$speed = 5;
        } else {
        	$speed = SPEED;
        }
        $q3 = "UPDATE " . TB_PREFIX . "units SET u41 = " . (64700 * $speed) . ", u42 = " . (295231 * $speed) . ", u43 = " . (180747 * $speed) . ", u44 = " . (7 * $speed) . ", u45 = " . (364401 * $speed) . ", u46 = " . (217602 * $speed) . ", u47 = " . (2034 * $speed) . ", u48 = " . (1040 * $speed) . " , u49 = " . (1 * $speed) . ", u50 = " . (9 * $speed) . " WHERE vref = " . $wid['wref'] . "";
        mysql_query($q3) or die(mysql_error());
        $q4 = "UPDATE " . TB_PREFIX . "users SET desc2 = '$desc' WHERE id = $uid";
        mysql_query($q4) or die(mysql_error());


/**
 * SMALL ARTEFACTS
 */
        function Artefact($uid, $type, $size, $art_name, $village_name, $desc, $effect, $img) {
        	global $database;
        	$kid = rand(1, 4);
        	$wid = $database->generateBase($kid);
        	$database->addArtefact($wid, $uid, $type, $size, $art_name, $desc, $effect, $img);
        	$database->setFieldTaken($wid);
        	$database->addVillage($wid, $uid, $village_name, '0');
        	$database->addResourceFields($wid, $database->getVillageType($wid));
        	$database->addUnits($wid);
        	$database->addTech($wid);
        	$database->addABTech($wid);
        	mysql_query("UPDATE " . TB_PREFIX . "vdata SET pop = " . rand(10, 200) . " WHERE wref = $wid");
        	mysql_query("UPDATE " . TB_PREFIX . "vdata SET name = '$village_name' WHERE wref = $wid");
        	if(SPEED > 3) {
        		$speed = 5;
        	} else {
        		$speed = SPEED;
        	}
        	if($size == 1) {
        		mysql_query("UPDATE " . TB_PREFIX . "units SET u41 = " . (rand(1000, 2000) * $speed) . ", u42 = " . (rand(1500, 2000) * $speed) . ", u43 = " . (rand(2300, 2800) * $speed) . ", u44 = " . (rand(25, 75) * $speed) . ", u45 = " . (rand(1200, 1900) * $speed) . ", u46 = " . (rand(1500, 2000) * $speed) . ", u47 = " . (rand(500, 900) * $speed) . ", u48 = " . (rand(100, 300) * $speed) . " , u49 = " . (rand(1, 5) * $speed) . ", u50 = " . (rand(1, 5) * $speed) . " WHERE vref = " . $wid . "");
        		mysql_query("UPDATE " . TB_PREFIX . "fdata SET f22t = 27, f22 = 10, f28t = 25, f28 = 10, f19t = 23, f19 = 10, f32t = 23, f32 = 10 WHERE vref = $wid");
        	} elseif($size == 2) {
        		mysql_query("UPDATE " . TB_PREFIX . "units SET u41 = " . (rand(2000, 4000) * $speed) . ", u42 = " . (rand(3000, 4000) * $speed) . ", u43 = " . (rand(4600, 5600) * $speed) . ", u44 = " . (rand(50, 150) * $speed) . ", u45 = " . (rand(2400, 3800) * $speed) . ", u46 = " . (rand(3000, 4000) * $speed) . ", u47 = " . (rand(1000, 1800) * $speed) . ", u48 = " . (rand(200, 600) * $speed) . " , u49 = " . (rand(2, 10) * $speed) . ", u50 = " . (rand(2, 10) * $speed) . " WHERE vref = " . $wid . "");
        		mysql_query("UPDATE " . TB_PREFIX . "fdata SET f22t = 27, f22 = 10, f28t = 25, f28 = 20, f19t = 23, f19 = 10, f32t = 23, f32 = 10 WHERE vref = $wid");
        	} elseif($size == 3) {
        		mysql_query("UPDATE " . TB_PREFIX . "units SET u41 = " . (rand(4000, 8000) * $speed) . ", u42 = " . (rand(6000, 8000) * $speed) . ", u43 = " . (rand(9200, 11200) * $speed) . ", u44 = " . (rand(100, 300) * $speed) . ", u45 = " . (rand(4800, 7600) * $speed) . ", u46 = " . (rand(6000, 8000) * $speed) . ", u47 = " . (rand(2000, 3600) * $speed) . ", u48 = " . (rand(400, 1200) * $speed) . " , u49 = " . (rand(4, 20) * $speed) . ", u50 = " . (rand(4, 20) * $speed) . " WHERE vref = " . $wid . "");
        		mysql_query("UPDATE " . TB_PREFIX . "fdata SET f22t = 27, f22 = 10, f28t = 25, f28 = 20, f19t = 23, f19 = 10, f32t = 23, f32 = 10 WHERE vref = $wid");
        	}
        }

/**
 * THE ARCHITECTS
 */

        $desc = 'Peta tutorial menunjukkan untuk anda mewujudkan dunia tersendiri termasuk NATAR. Menaik taraf ke tahap 50 adalah tertinggi untuk peta. Untuk menaik taraf dari tahap 50 dan seterusnya, anda digalakan untuk memasukan Mana-mana Kesatuan ( Clans / Ally ).';
        
        
        $vname = 'WW BuildingPlan';
        $effect = '';
        for($i > 1; $i < 10; $i++) {
        	Artefact($uid, 1, 1, 'Keajaiban Peta pembinaan dunia', '' . $vname . '', '' . $desc . '', '' . $effect . '', 'type1.gif');
        }


/**
 * MILITARY HASTE
 */
		
        $desc = "This inscription makes your village against catapults and rams resistant .";

        unset($i);
        unset($vname);
        unset($effect);
        $vname = 'Secret Scrolls of Architecture';
        $effect = '4x';
        for($i > 1; $i < 6; $i++) {
        	Artefact($uid, 2, 1, 'Secret Architecture of small', '' . $vname . '', '' . $desc . '', '' . $effect . '', 'type2.gif');
        }

        unset($i);
        unset($vname);
        unset($effect);
        $vname = 'Secret Scrolls of Architecture';
        $effect = '3x';
        for($i > 1; $i < 4; $i++) {
        	Artefact($uid, 2, 2, 'The secret of great architecture', '' . $vname . '', '' . $desc . '', '' . $effect . '', 'type2.gif');
        }

        unset($i);
        unset($vname);
        unset($effect);
        $vname = 'Secret Scrolls of Architecture';
        $effect = '5x';
        for($i > 1; $i < 1; $i++) {
        	Artefact($uid, 2, 3, 'The secret of the unique architecture', '' . $vname . '', '' . $desc . '', '' . $effect . '', 'type2.gif');
        }


/**
 * THE DIET
 */


        $desc = "This inscription provides faster speed of your troops .";

        unset($i);
        unset($vname);
        unset($effect);
        $vname = 'Boots inscription Gods';
        $effect = '2x';
        for($i > 1; $i < 6; $i++) {
        	Artefact($uid, 4, 1, 'Small Gods boots', '' . $vname . '', '' . $desc . '', '' . $effect . '', 'type4.gif');
        }

        unset($i);
        unset($vname);
        unset($effect);
        $vname = 'Boots inscription Gods';
        $effect = '1.5x';
        for($i > 1; $i < 4; $i++) {
        	Artefact($uid, 4, 2, 'God boots', '' . $vname . '', '' . $desc . '', '' . $effect . '', 'type4.gif');
        }

        unset($i);
        unset($vname);
        unset($effect);
        $vname = 'Boots inscription Gods';
        $effect = '3x';
        for($i > 1; $i < 1; $i++) {
        	Artefact($uid, 4, 3, 'The unique boots Gods', '' . $vname . '', '' . $desc . '', '' . $effect . '', 'type4.gif');
        }


/**
 * ACADEMIC ADVANCEMENT
 */


        $desc = "The inscription spies makes you stronger. The village is located in the spy act stronger than before. You can also type the troops that are attacking you can recognize them in the camps, but they are not able to identify the number.";

        unset($i);
        unset($vname);
        unset($effect);
        $vname = 'Scrolls eagle eyes';
        $effect = '5x';
        for($i > 1; $i < 5; $i++) {
        	Artefact($uid, 5, 1, 'Small eagle eyes', '' . $vname . '', '' . $desc . '', '' . $effect . '', 'type5.gif');
        }

        unset($i);
        unset($vname);
        unset($effect);
        $vname = 'Scrolls eagle eyes';
        $effect = '3x';
        for($i > 1; $i < 4; $i++) {
        	Artefact($uid, 5, 2, 'Large eagle eyes', '' . $vname . '', '' . $desc . '', '' . $effect . '', 'type5.gif');
        }

        unset($i);
        unset($vname);
        unset($effect);
        $vname = 'Scrolls eagle eyes';
        $effect = '10x';
        for($i > 1; $i < 1; $i++) {
        	Artefact($uid, 5, 3, 'The unique eagle eyes', '' . $vname . '', '' . $desc . '', '' . $effect . '', 'type5.gif');
        }


/**
 * STORAGE MASTER PLAN
 */


        $desc = "The inscription of wheat consumption soldier stationed in the village, the village and also reduces the soldier's aid.";

        unset($i);
        unset($vname);
        unset($effect);;
        $vname = 'Inscription ascetic';
        $effect = '1/2';
        for($i > 1; $i < 6; $i++) {
        	Artefact($uid, 6, 1, 'Inscriptions small college', '' . $vname . '', '' . $desc . '', '' . $effect . '', 'type6.gif');
        }

        unset($i);
        unset($vname);
        unset($effect);
        $vname = 'Inscription ascetic';
        $effect = '3/4';
        for($i > 1; $i < 4; $i++) {
        	Artefact($uid, 6, 2, 'Greater Inscription of college', '' . $vname . '', '' . $desc . '', '' . $effect . '', 'type6.gif');
        }


/**
 * ARTEFACT OF THE FOOL
 */


        $desc = 'The inscription quickly build your troops in the barracks, stables, workshops increases.
The soldiers of the garrison to quickly build a large and spacious stalls will also be affected.';

        unset($i);
        unset($vname);
        unset($effect);
        $vname = 'Scrolls the student';
		$effect = '1/2';
        for($i > 1; $i < 6; $i++) {
        	Artefact($uid, 8, 1, 'The young student', '' . $vname . '', '' . $desc . '', '' . $effect . '', 'type8.gif');
        }

        unset($i);
        unset($vname);
        unset($effect);
        $vname = 'Scrolls the student';
		$effect = '3/4';
        for($i > 1; $i < 4; $i++) {
        	Artefact($uid, 8, 2, 'Great School Wars', '' . $vname . '', '' . $desc . '', '' . $effect . '', 'type8.gif');
        }

        unset($i);
        unset($vname);
        unset($effect);
        $vname = 'Scrolls the student';
		$effect = '1/2';
        for($i > 1; $i < 1; $i++) {
        	Artefact($uid, 8, 3, 'The students unique', '' . $vname . '', '' . $desc . '', '' . $effect . '', 'type8.gif');
        }


/**
 * RIVAL'S CONFUSION
 */


        $desc = 'You can increase the cache capacity of the inscription . 

Owners inscription only catapult will be targeted by chance ، 

The Treasury and the wonders of the world will be selectively targeted and if the inscription is a unique type of selective targeting of the Treasury is not possible .';

        unset($i);
        unset($vname);
        unset($effect);
        $vname = 'Scrolls confusing';
        $effect = '200x';
        for($i > 1; $i < 6; $i++) {
        	Artefact($uid, 7, 1, 'Small confusing', '' . $vname . '', '' . $desc . '', '' . $effect . '', 'type7.gif');
        }

        unset($i);
        unset($vname);
        unset($effect);
        $vname = 'Scrolls confusing';
        $effect = '100x';
        for($i > 1; $i < 4; $i++) {
        	Artefact($uid, 7, 2, 'Great confusing', '' . $vname . '', '' . $desc . '', '' . $effect . '', 'type7.gif');
        }

        unset($i);
        unset($vname);
        unset($effect);
        $vname = 'Scrolls confusing';
        $effect = '500x';
        for($i > 1; $i < 1; $i++) {
        	Artefact($uid, 7, 3, 'Unique confusing', '' . $vname . '', '' . $desc . '', '' . $effect . '', 'type7.gif');
        }


/**
 * WAREHOUSE CONFUSION
 */


        $desc = 'The plan to build a large barn and a large granary provides training . 
You also will need to raise the building above the map.';

        unset($i);
        unset($vname);
        unset($effect);
        $vname = 'Storage Scrolls top';
        $effect = '';
        for($i > 1; $i < 6; $i++) {
        	Artefact($uid, 9, 1, 'Superior storage for small', '' . $vname . '', '' . $desc . '', '' . $effect . '', 'type9.gif');
        }

        unset($i);
        unset($vname);
        unset($effect);
        $vname = 'کتیبه انبار برتر';
        $effect = '';
        for($i > 1; $i < 4; $i++) {
        	Artefact($uid, 9, 2, 'Large top storage', '' . $vname . '', '' . $desc . '', '' . $effect . '', 'type9.gif');
        }


/**
 * HAWK'S EYESIGHT
 */


        $desc = "The inscription protective effect against the village walls reduces .";

        unset($i);
        unset($vname);
        unset($effect);
        $vname = 'Scrolls village idiot';
        $effect = '2x';
        for($i > 1; $i < 6; $i++) {
        	Artefact($uid, 3, 1, 'The small village of fools', '' . $vname . '', '' . $desc . '', '' . $effect . '', 'type3.gif');
        }

        unset($i);
        unset($vname);
        unset($effect);
        $vname = 'Scrolls village fools';
        $effect = '5x';
        for($i > 1; $i < 1; $i++) {
        	Artefact($uid, 3, 3, 'A unique village idiot', '' . $vname . '', '' . $desc . '', '' . $effect . '', 'type3.gif');
        }
header("Location: dorf1.php");
