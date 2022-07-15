<?php
/*
 * Lista query
 */

if($pag=='' && $caso=="" && !isset($_SESSION["id"])){
	//home pubblica senza Login
	begin_gen();
	navbar_gen();




			
			

				
	footer_gen();
	ending_gen();
}


if($pag=="test" && $caso=="" && !isset($_SESSION["id"])){
	begin_gen();
	navbar_gen();

	echo '<a class="btn btn-primary" href="http://localhost/ldpuniversity/Appunti/index.html">VAI</a>';
	footer_gen();
	ending_gen();
}




?>
