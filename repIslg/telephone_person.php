<?php 
include 'fonctions.php';
$person = getPersonById($_GET['id']);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHONE-PERSON</title>
	<!-- lien css -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    <div class="new-person">
        <a href="#"><?= @$person["nom"].' '. @$person["prenom"] ?></a>
       </div>
    <div class="list-person">
        <h2>Liste des numéros&nbsp;&nbsp;
                <a href="add_numero.php?id=<?= @$person["id"]?>">
                Nouveau numéro
                </a>
        </h2>
        <table border="1" cellpadding="10" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Téléphone</th>
                    <th>Réseau</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                       $i = 0;
                    $listNum =  getNumeroByIdp($person["id"]);
                    foreach ($listNum as $numero) {
                        $i++;
                ?>
                 <tr>
                    <td><?= $i?></td>
                    <td><?= $numero['libelle']?></td>
                    <td><?= $numero['designation']?></td>
                    <td>
                      <a href="modify_numero.php?id=<?=$numero['id']?>">Modifier</a>    
                      <a href="delete_numero.php?id=<?=$numero['id']?>">Supprimer</a>  
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