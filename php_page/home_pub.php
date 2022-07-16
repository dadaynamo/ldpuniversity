<?php
/*
 * Lista query
 */

if($pag=='' && $caso=="" && !isset($_SESSION["id"])){
	//home pubblica senza Login
	begin_gen();
	navbar_gen();



echo '<a href="index.php?pag=test">Vai a test</a>';
		
			

				
	footer_gen();
	ending_gen();
}


if($pag=="test" && $caso=="" && !isset($_SESSION["id"])){
	begin_gen();
	navbar_gen();






	$pass="ciaociao";
	$hash=password_hash($pass, PASSWORD_DEFAULT);
	echo $hash;

	echo '<a class="btn btn-primary" href="'.$url_gen.'Appunti/index.html">VAI</a>';
	footer_gen();
	ending_gen();
}




?>
