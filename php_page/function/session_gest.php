<?php

if($pag=="logout" && isset($_SESSION["id"])){
	

	session_destroy();
	header('Location: http://localhost/ldpuniversity');
 
}
 

//	$_SESSION["id"]=1;
//	header('Location: http://localhost/ldpuniversity/index.php?pag=test');


if($pag=='login' && $caso=="" && !isset($_SESSION["id"])){

	$_SESSION["id"]=1;
	header('Location: index.php');
}

?>
