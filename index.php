<?php
session_start();

//connessione database
$user = "root";
$pass = "s5608188h";
$host = "localhost";
$dbdb = "ldpuniversity";
$url_gen="http://localhost/ldpuniversity/";

$conn = new mysqli($host, $user, $pass, $dbdb);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$pag=filter_input(INPUT_GET,'pag',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$caso=filter_input(INPUT_POST,'caso',FILTER_SANITIZE_FULL_SPECIAL_CHARS);


//echo $pag;
//echo $caso;


//php function require
include('php_page/function/function_gen.php');
include('php_page/function/navbar_gen.php');
include('php_page/function/footer_gen.php');
include('php_page/function/session_gest.php');

//php page get_required_
include('php_page/home_pub.php');
include('php_page/develop_dash.php');
include('php_page/home_priv.php'); 
include('php_page/log_page.php');
include('php_page/reg_page.php');


?>
