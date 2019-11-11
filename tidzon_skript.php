<?php

include_once 'Klass/Tidzon.php';

function getTimezoneOffset($zon1, $zon2)
{
	$tidzon1 = new DateTimeZone($zon1);
	$tidzon2 = new DateTimeZone($zon2);
	
	$now1 = new DateTime('now', $tidzon1);
	$now2 = new DateTime('now', $tidzon2);
	$offset = $tidzon1->getOffset($now1) - $tidzon2->getOffset($now2);

	return $offset;
}

function getDatumSkillnad(Klass_Tidzon $zon1, Klass_Tidzon $zon2, $offset)
{
	$manad1 = (int) $zon1->getManad();
	$dag1 = (int) $zon1->getDag();
	$artal1 = (int) $zon1->getArtal();
	
	$manad2 = (int) $zon2->getManad();
	$dag2 = (int) $zon2->getDag();
	$artal2 = (int) $zon2->getArtal();
	
	$datum1 = gmmktime(0, 0, 0, $manad1, $dag1, $artal1);
	$datum2 = gmmktime(0, 0, 0, $manad2, $dag2, $artal2);
	
	return ($datum1 - $datum2) + $offset;
}

function sekTillTid($sek)
{
	$dag = floor(abs(($sek))/86400);
	$tim = floor(abs(($sek%86400))/3600);
	
	return $dag . ' dagar och ' . $tim . ' timmar';
	
}


if (isset ($_POST['submit']) && !empty ($_POST['timezone1']) && !empty ($_POST['timezone2']))
{
	$tidObjekt1 = new Klass_Tidzon($_POST['timezone1'], $_POST['artal1'], $_POST['manad1'], $_POST['dag1']);
	
	$tidObjekt2 = new Klass_Tidzon($_POST['timezone2'], $_POST['artal2'], $_POST['manad2'], $_POST['dag2']);
	
	echo '<b>Tidzon 1</b> <br>';
	$tidObjekt1->display();
	echo '<br> <b>Tidzon 2</b> <br>';
	$tidObjekt2->display();
	echo '<br>';
	
	$zonSkillnad = getTimezoneOffset($tidObjekt1->getTidzon(), $tidObjekt2->getTidzon());
	
	$timSkillnad = floor(abs($zonSkillnad)/60/60);
	
	echo '<br>';
	echo 'Skillnad mellan tidzoner är ' . $timSkillnad . ' timmar.';
	
	
	$datumSkillnad = getDatumSkillnad($tidObjekt1, $tidObjekt2, $zonSkillnad);

	echo '<br>';
	echo 'Skillnan mellan datum är ' . sekTillTid($datumSkillnad) . '.';
	echo '<br>';
	echo '<hr>';
}

?>