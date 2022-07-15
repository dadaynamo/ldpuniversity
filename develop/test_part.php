<?php
//box 2 col image and text
	echo '<div class="container" style="border:solid; margin-top:10px; ">';
		echo '<div class="row">';
			//colonna sinistra
			echo '<div class="col-md-6">';
				echo '<img src="https://picsum.photos/1920/1080" class="img-fluid" alt="Responsive image">';
			echo '</div>';
			//colonna destra
			echo '<div class="col-md-6 text-center align-self-center">';
				echo '<h3>CIAO SONO MARIO</h3>';
				echo '<p class="text-left"> ure eius earum ut molestias architecto</p>';
			echo '</div>';	
		echo '</div>';
	echo '</div>';



//Lista link
	echo '<div class="container-full" style="border:solid; margin-top:20px; margin-bottom:20px;">';
		echo '<p>';
			echo '<a href="http://localhost/ldpuniversity/index.php?pag=test">Vai a pag test</a> ';
			echo '<br>';
			echo '<a href="http://localhost/ldpuniversity/Appunti/index.html">Vai a Appunti</a> ';
			echo '<br>';
			echo '<a href="http://localhost/ldpuniversity/index.php?pag=dashboard">Vai a Dashboard</a>';
		echo '<p>';		
	echo '</div>';

?>
