<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
 
	<title>TODO TASK</title>
</head>
<body>
<div class="container">
  <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
    <div class="col">
      <div class="p-4 border bg-light">id</div>
    </div>
    <div class="col">
      <div class="p-4 border bg-light">nom</div>
    </div>
    <div class="col">
      <div class="p-4 border bg-light">description</div>
    </div>
<?php 
	//connectio a la base de donnees 

	$Bdd=NEW PDO('mysql:host=localhost;dbname=ma_base','root','');
	$req1=$Bdd->query('SELECT * FROM Todo');
	while ($donnees=$req1->fetch()) {

		?>
		<!--insertion des donnees dans un tableau-->
	<div class="container">
  <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
    <div class="col">
      <div class="p-4 border bg-light">
		  <a href="/todo/passage.php?idd=<?php
		echo $donnees['id'];
		?>">
			<?php
		echo $donnees['id'];
		?>
		</a>
	</div>
    </div>
    <div class="col">
      <div class="p-4 border bg-light">
	  <?php
		echo $donnees['description'];
		?>
	  </div>
    </div>
    <div class="col">
      <div class="p-4 border bg-light">
	  <?php
		echo $donnees['tache'];
		?>
	  </div>
    </div>

  
  </div>
</div>

	<?php 
	};
	?>
		
<button>
<a href="register.php">
			<u>
			Ajouter
			</u>.
</a>
</button>


</body>
</html>


   
