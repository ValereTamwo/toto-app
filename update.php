<?php
session_start();
    $bdd=NEW PDO('mysql:host=localhost;dbname=ma_base','root','');
    $description=$_POST['v_description'];
    $tt=$_POST['v_nom'];
    $tr=$_SESSION['idd'];
    $requete=$bdd->prepare('UPDATE todo SET description='$description',tache='$tt',WHERE id='$tr'');
    
    echo $tr;
    $requete->execute();
    echo "MISE A JOURS> REUSSI </br>";
	echo " <a href=\"/todo/index.php\">rentrer  a l`acceuille</a>";

?>