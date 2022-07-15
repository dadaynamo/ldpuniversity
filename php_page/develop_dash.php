<?php

	if($pag=='dashboard' && $caso=='' && !isset($_SESSION["id"])){
	
	//query generali
	$printuser_query="SELECT * FROM user";
	$query=mysqli_query($conn,$printuser_query);
	$numrighe=mysqli_num_rows($query);
	
	
	begin_gen();
	navbar_gen();
	//Link Pagine importanti
	echo '<div class="container">';
	echo '<h3>Lista link</h3>';
	echo '<ul>';
	echo '<li><a href="http://localhost/ldpuniversity/index.php">home pubblica</a></li>';
	echo '<li><a href="http://localhost/ldpuniversity/index.php?pag=dashboard">Dashboard developer</a></li>';
	echo '<li></li>';
	echo '<li></li>';
	echo '</ul>';
	echo '</div>';

	//info Database
	echo '<div class="container">';
	echo '<h3>Info DB</h3>';

	echo '<table class="table-dark">';
	echo '<tr>';
	echo '<td>numero utenti</td>';
	echo '<td> '.$numrighe.' </td>';
	echo '</tr>';
	echo '</table>';
	echo '</div>';	


	footer_gen();
	ending_gen();
}


?>
