<?php 

	$Bdd=NEW PDO('mysql:host=localhost;dbname=ma_base','root' ,'');

	$insert=$Bdd->prepare('INSERT INTO todo (description,tache) values(?,?)');

	$insert->execute(array($_POST['v_nom'],$_POST['v_description']));
	echo " <a href=\"index\.php\">"."Enregistrement reussi"."</a>"."</br>";

 ?>


<?php
	echo"les donnees ci desous serons enregistrer";
?>

	<?php
	echo "nom : ".$_POST['v_nom'];
	echo "<br>";
	echo "description de la tache :".$_POST['v_description'];
	?>





