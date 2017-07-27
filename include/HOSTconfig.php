<?php
$server = "Localhost";
$db_user = "root";
$db_password = "tekken";
$database = "job";

$conn = mysqli_connect($server, $db_user, $db_password);

if(!$conn){
    die("Cannot connect to database");
}

$db = mysqli_select_db($conn,$database);
if(!$db){
    die("Cannot open  DB");
}
//-money format
function money($val) {
	return number_format (floatval($val), 2, '.', ',');
}
function db_quote($value) {
	//$connection = db_connect();
	return mysqli_real_escape_string($conn,$value);
}

// company details
// $company = array('fullname'=>'Mutual Benefits Assurance Plc', 'shortname'=>'MUTUAL', 'address'=>'Aret Adams House, 233 Ikorodu Road, Ilupeju - Lagos. P.O.Box 70986, Victoria Island, Lagos.', 'phone'=>'01-2793457-8', 'fax'=>'234-1-12793458, 01-2712985', 'email'=>'info@mbaplc.com', 'website'=>'http://www.mbaplc.com', 'rc_no'=>'RC 269837');


?>
