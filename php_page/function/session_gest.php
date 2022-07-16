<?php
//Non toccare funziona bene
if($pag=="logout" && isset($_SESSION["id"])){
	

	session_destroy();
	$link_header="Location: ".$url_gen;
	header($link_header);
 
}

if ($caso=="login1" && !isset($_SESSION["id"]))
{
	//submit in post
	//username
	//password
	//caso
	//echo $_POST["name"];
	//echo $_POST["password"];
	//echo $_POST["caso"];
	

	$stringa="SELECT * FROM user WHERE username='".$_POST["username"]."'";
	$q=mysqli_query($conn,$stringa) or die(mysqli_error($conn));
	$num=mysqli_num_rows($q);




	if($num==1){
		//username esiste
		$utente=mysqli_fetch_assoc($q);

		if(password_verify($_POST["password"],$utente["password"])){
			//echo "utente loggato bene";
			$_SESSION["id"]=$utente["id"];

			$link_header="Location: ".$url_gen."index.php";
			header($link_header);
	
		}
		else{
		
		}

/*	*/
	}	
	else{
		//username non esiste
		echo "Il nome o la password sono errati ".'<a href="index.php">riprovare</a>';
	}
}


?>
