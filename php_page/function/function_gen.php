<?php

function begin_gen(){
$link = $_GET["pag"];
echo '<!DOCTYPE html>';	
echo "<html>";
echo '<head>';
echo '<title>';

//Title generator
//aggiungere un case per ogni nuova pagina gestita da $pag 
	switch ($link){
	case "": 
		echo 'Home pubblica';
	break;
	case "test":
		echo 'Test page'; 
	break;
	case "profilo":
		echo 'Profilo';
	break;
	}

echo '</title>';

echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />';
echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">';
echo '</head>';
echo '<link rel="stylesheet" href="asset/css/style.css">';
echo '<body>';

}

function begin_logpage(){
  echo '<html>';
  echo '<head>';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
  
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />';
echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">';
  echo '<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">';
  echo '<link rel="stylesheet" href="asset/css/log_page.css">';
  echo '<link rel="icon" href="img/favicon/favicon_12.png" type="image/png">';

  echo '<title>Login page</title>';

  echo '<meta charset="utf-8"/>';
  echo '<meta name ="description" content="Scrivere correttamente i meta tag, cioè quelle informazioni che vengono codificate per i browser e i motori di ricerca. Ma quali dati sono davvero importanti?"/>';
  echo '<meta name ="keywords" content="parola chiave 1, parola chiave 2, parola chiave 3"/>';
  echo '<meta name="author" content="nome dell’autore " />';
  echo '<meta name ="copyright" content="proprietario del sito " />';
  echo '<meta name="robots" content="index"/>';

  echo '</head>';
  echo '<body>';


}

function ending_logpage(){

  echo '<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>';
  echo ' <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>';
  echo '<script src="js/bootstrap.bundle.min.js"></script>';
  echo '<script src="asset/js/showpass.js"></script>';

  echo '</body>';
  echo '</html>';

}


function ending_gen(){

	echo '<script src="asset/js/script_gen.js"></script>';	
	echo '<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>';
	echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>';
	
	echo '</body>';
	echo '</html>';

}



 ?>
