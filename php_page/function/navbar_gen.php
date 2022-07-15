<?php
function navbar_gen(){
	//echo '<div class="container">';
	//	echo '<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-left:114px; padding-right:114px; height:80px;">';
	//
	//
	//
	/*
		echo '<a class="navbar-brand" href="http://localhost/ldpuniversity">Ldpuniversity</a>';
		echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
			echo '<span class="navbar-toggler-icon"></span>';
		echo '</button>';

		echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
			echo '<ul class="navbar-nav mr-auto">';
				echo '<li class="nav-item active">';
					echo '<a class="nav-link" href="http://localhost/ldpuniversity">Home <span class="sr-only">(current)</span></a>';
				echo '</li>';
				echo '<li class="nav-item">';
					echo '<a class="nav-link" href="http://localhost/ldpuniversity/Blog">Blog</a>';
				echo '</li>';



				if(!isset($_SESSION["id"])){


				echo '<li class="nav-item">';
					echo '<a class="nav-link disabled" href="#">Appunti Informatica Unipi</a>';
				echo '</li>';
				echo '<li class="nav-item">';
					echo '<a class="nav-link disabled" href="#">Libretto</a>';
				echo '</li>';
				}else{
				echo '<li class="nav-item">';
					echo '<a class="nav-link" href="http://localhost/ldpuniversity/Appunti/index.php">Appunti Informatica Unipi</a>';
				echo '</li>';
				echo '<li class="nav-item">';
					echo '<a class="nav-link" href="http://localhost/ldpuniversity/Libretto/index.php">Libretto</a>';
				echo '</li>';
				}

			echo '</ul>';
	 */
//lato destro
//tasto login logout
			echo '<span class="nav-item my-2 my-lg-0">';
			echo '</span>';	
		echo '</div>';
	echo '</nav>';	
//echo '</div>';
	 




echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">';
	echo '<a class="navbar-brand" href="#">Navbar</a>';
	echo '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
		echo '<span class="navbar-toggler-icon"></span>';
	echo '</button>';

	echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">';
		echo '<ul class="navbar-nav mr-auto">';
			echo '<li class="nav-item active">';
				echo '<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>';
			echo '</li>';
			echo '<li class="nav-item">';
				echo '<a class="nav-link" href="#">Blog</a>';
			echo '</li>';
			
					
			echo '<li class="nav-item">';
				echo '<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>';
			echo '</li>';
			
			echo '<li class="nav-item">';
				echo '<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>';
			echo '</li>';
		
		echo '</ul>';
		echo '<span class="my-2 my-lg-0">';

			if(!isset($_SESSION["id"])){
				echo '<a href="index.php?pag=login" class="btn btn-outline-success my-2 my-sm-0">Login</a>';}
			else{
				echo '<a href="index.php?pag=logout" class="btn btn-outline-danger my-2 my-sm-0">Logout</a>';}

		echo '</span>';
	echo '</div>';
echo '</nav>';

}


?>
