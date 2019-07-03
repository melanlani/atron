<?php
$p=isset($_GET['page']) ? $_GET['page'] : 'dashboard';
	if($p=='dashboard') include ('page/dashboard.php');
	if($p=='grafik4') include ('page/grafik.php');
	if($p=='grafik3') include ('page/grafik_week.php');
	if($p=='grafik2') include ('page/grafik_day.php');
	if($p=='grafik1') include ('page/grafik_hour.php');
	if($p=='alert1') include ('page/page_alert.php');
	if($p=='alert2') include ('page/page_alert2.php');
	if($p=='alert3') include ('page/page_alert3.php');
	if($p=='city_alert1') include ('page/city_alert.php');
	if($p=='city_alert2') include ('page/city_alert2.php');
	if($p=='city_alert3') include ('page/city_alert3.php');
?>