
<?php
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');

function connect_database() {
	$fetchType = "array";
	$dbHost = "localhost";
	$dbLogin = "u223771646_upi";
	$dbPwd = "Raushan7x@@@";
	$dbName = "u223771646_upi";
	$con = mysqli_connect($dbHost, $dbLogin, $dbPwd, $dbName);
	if (!$con) {
		die("Database Connection failed: " . mysqli_connect_errno());
	}
	return ($con);
}

// Database configuration
define('ADMIN_TOKEN', '4f4f2d5860edb2ee76ba899d3b63bd02');
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'u223771646_upi');
define('DB_PASSWORD', 'Raushan7x@@@');
define('DB_NAME', 'u223771646_upi');
?>