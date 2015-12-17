<?php
//Get IP
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

//Load GEO Detect Scripts
require 'geo-database/geoip.inc';
require 'geo-database/vendor/autoload.php';

//Check IP against DB
$gi = geoip_open("/var/www/vhosts/jameswilsonjennings.com/tvdaily.com/geo-database/GeoIP.dat",GEOIP_STANDARD);
$country_code =  geoip_country_code_by_addr($gi, $ip) . "\t";
$country_code = preg_replace('/\s+/', '', $country_code);
geoip_close($gi);

//Redirects
if($country_code == "GB" && $_SERVER['HTTP_HOST'] != "news.tvguideus.com"){
	header( 'Location: http://news.tvguideus.com' ) ;
	die();
}elseif ($country_code != "GB" && $_SERVER['HTTP_HOST'] != "tvdaily.com.192-168-0-10.bosscomms.com"){
	header( 'Location: http://tvdaily.com.192-168-0-10.bosscomms.com' ) ;
	die();
}

//Session Var for Country Code
if(!isset($_SESSION['country_code'])) {
    $_SESSION['country_code'] = $country_code;
}

?>