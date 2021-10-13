<?php
$num=$_GET['idd'];
session_start();
$_SESSION['idd']=$num;
?>
<form method="post" action="update.php">
	<input type="text" name="v_nom" required>
	<br>
	<input type="text" name="v_description" required>

	 <br>
	<input type="submit" name="valider" >
</form>
