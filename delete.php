<?php 
	$bdd=NEW PDO('mysql:host=localhost;dbname=ma_base','root','');

	$requette=$bdd->prepare('DELETE FROM todo WHERE id=(?)');
	$requette->execute(array($_GET['idd']));
	echo "supression reussi .   </br>";
	echo "SUPRESSION REUSSI "."</br>";
	echo " <a href=\"/todo/index.php\">rentrer  a l`acceuille</a>";
 ?>

<?php 
	
 ?>