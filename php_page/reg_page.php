<?php

if($pag=='registrazione' && $caso=='' && !isset($_SESSION["id"])){

echo "pagina di registrazione";
echo '<div class="container">';
echo '<h2>registrati qui</h2>';
echo '<form method="POST" action="index.php">';
echo '<p>Nome: <input type="text" name="name" placeholder="Inserisci nome"><br></p>';
echo '<p>Cognome: <input type="text" name="surname" placeholder="Inserisci cognome"><br></p>';
echo '<p>Username: <input type="text" name="username" placeholder="Inserisci username" required><br></p>';
echo '<p>Email: <input type="text" name="email" placeholder="Inserisci email"><br></p>';
echo '<p>Password: <input type="password" name="password" placeholder="Inserisci password"><br></p>';
echo '<p><input type="hidden" name="caso" value="registrazione1"></p>';
echo '<p><input type="submit" value="Registrati"></p>';
echo '</form>';
echo '</div>';
}









?>
