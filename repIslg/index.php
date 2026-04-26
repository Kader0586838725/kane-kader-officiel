 <?php include 'fonctions.php';?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>G-REP</title>
	<!-- lien css -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
       <?php include 'menu.php'; ?>
       <div class="new-person">
       	<a href="add_person.php">Nouvelle personne</a>
       </div>

       <div class="list-person">
       	<h2>Liste des personnes</h2>
       	<table border="1" cellpadding="10" cellspacing="0" width="100%">
       		<thead>
       			<tr>
       				<th>N°</th>
       				<th>NOM</th>
       				<th>PRENOMS</th>
       				<th>DATE NAISSANCE</th>
       				<th>ACTIONS</th>
       			</tr>
       		</thead>
       		<tbody>
       			<?php 
       			       $i = 0;
       				$listPerson = getAll("personne");
       				foreach ($listPerson as $person) {
       					$i++;
       			?>
       			 <tr>
       			 	<td><?= $i?></td>
       			 	<td><?= $person['nom']?></td>
       			 	<td><?= $person['prenom']?></td>
       			 	<td><?= $person['date_naiss']?></td>
       			 	<td>
       			 	  <a href="modify_person.php?id=<?=$person['id']?>">Modifier</a>	
       			 	  <a href="delete_personne.php?id=<?=$person['id']?>">Supprimer</a>	
       			 	  <a href="telephone_person.php?id=<?=$person['id']?>">Numéros</a>	
       			 	</td>
       			 </tr>
       			<?php 		
       				}
       			 ?>
       		</tbody>
       	</table>
       </div>


</body>
</html>