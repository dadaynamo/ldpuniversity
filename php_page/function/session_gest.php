<?php

if($pag=="logout" && isset($_SESSION["id"])){
	

	session_destroy();
	header('Location: http://localhost/ldpuniversity');
 
}

if ($caso=="login1" && !isset($_SESSION["id"]))
{
	//submit in post
	//username
	//password
	//caso
		
	$user = filter_input(INPUT_POST,'username',FILTER_SANITIZE_FULL_SPECIAL_CHARS);	
	$q="Select * from user where name='".$user."'";
	$rq=mysqli_query($conn,$q);	


	if(mysqli_num_rows($rq)==1){
	//username esiste in DB
			
		$_SESSION["id"]=$rq["id"];
		header('Location: http://localhost/ldpuniversity/index.php');
	}
	else{
//		echo "Login non effettuato";
	}
 
}



//	$_SESSION["id"]=1;
//	header('Location: http://localhost/ldpuniversity/index.php?pag=test');

/*
if($pag=='login' && $caso=="" && !isset($_SESSION["id"])){

	$_SESSION["id"]=1;
	header('Location: index.php');
}
 */
?>
