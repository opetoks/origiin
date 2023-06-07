<?php
$sql_db_host = "localhost";
// MySQL Database User
$sql_db_user = "root";
// MySQL Database Password
$sql_db_pass = "localhost";
// MySQL Database Name
$sql_db_name = "origiin_origiin";

$sqlConnect = mysqli_connect($sql_db_host, $sql_db_user, $sql_db_pass, $sql_db_name);

// Site URL
$site_url = "https://origiin.io"; // e.g (http://example.com)

// Purchase code
$purchase_code = "5c9f654c-e603-43fb-ade6-de2b571199ca"; // Your purchase code, don't give it to anyone.

//to use prepared statement
try {
    $db = new PDO('mysql:host='.$sql_db_host.';dbname='.$sql_db_name,$sql_db_user,$sql_db_pass);
    $db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET SESSION sql_mode = ''");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    //echo 'Connection Successfull';
} catch(PDOException $e) {
    die($e->getmessage());
}
?>