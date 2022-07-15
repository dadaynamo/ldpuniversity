<?php


if($pag=='' && $caso=='' && isset($_SESSION["id"])){
	begin_gen();
	navbar_gen();
echo $_SESSION["id"];
	
	footer_gen();
	ending_gen();

}
 
?>
