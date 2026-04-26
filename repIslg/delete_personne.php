<?php include 'fonctions.php';
$person = getPersonById($_GET['id']);
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADD-NUMERO-PERONNE</title>
	<!-- lien css -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    <div class="form-add">
    	<h3>Suppression de :<?= @$person["nom"].' '. @$person["prenom"] ?> </h3>
    	<hr>
    	<form action="" method="post">
    	
    	
    	
    		<input type="hidden" name="id" value="<?= @$person['id']?>" >
    		<hr>
    		<button type="submit" name="btnDelete">Oui</button>
            <button class="delete">
        <a href="index.php">Non</a>         
            </button>
    	</form>
    	<?php 
    	    if (isset($_POST['btnDelete'])) {
    	    	 // recuperation des valeurs des champs
    	    	  $id = $_POST['id'];
    	    	  //verification des champs 
    	    	  if(deletePerson($id)){
                    echo "<script>
                                    alert('Personne supprimée avec succès. ');
                                    window.location.href='index.php';
                                </script> ";
                  }
    	    }
    	 ?>

    </div>
</body>
</html>