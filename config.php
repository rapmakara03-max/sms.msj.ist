<?php

session_start();

date_default_timezone_set('Europe/Istanbul');

$config_database = array 
(
	'hostname' => "localhost",
	'dbname' => "msj_sms",
	'username' => "msj_sms",
	'password' => "km,6!Kisg*3^"
);



//////////////////////////////////////////////////////////////////////////////////


$charset = "utf8mb4";

$db = "null";
$dsn = "mysql:host=".$config_database['hostname'].";dbname=".$config_database['dbname'].";charset=".$charset;
$options = [
	PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
	$db = new PDO($dsn, $config_database['username'], $config_database['password'], $options);
} catch (\PDOException $e) {
	throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

if ($_POST) {

	foreach ($_POST as $key => $value) {
		$p[$key] = strip_tags(htmlspecialchars($value));
	}

}

if ($_GET) {

	foreach ($_GET as $key => $value) {
		$g[$key] = strip_tags(htmlspecialchars($value));
	}

}


function baseurl() {
	$currentPath = $_SERVER['PHP_SELF'];
	$pathInfo = pathinfo($currentPath);
	$hostName = $_SERVER['HTTP_HOST'];
	if (isset($_SERVER['HTTPS']) &&
		($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
		isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
		$_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
		$site_protocol = 'https';
}
else {
	$site_protocol = 'http';
}
$datatwo = $site_protocol.'://'.$hostName.$pathInfo['dirname']."/";
$soniki = substr($datatwo, -2);
if ($soniki == "//") {
	return $site_protocol.'://'.$hostName.$pathInfo['dirname'];
} else {
	return $site_protocol.'://'.$hostName.$pathInfo['dirname']."/";
}
}