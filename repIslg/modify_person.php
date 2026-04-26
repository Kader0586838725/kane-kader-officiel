<?php 
include 'fonctions.php';
$person = getPersonById($_GET['id']);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADD-PERSON</title>
	<!-- lien css -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include 'menu.php'; ?>
    <div class="form-add">
    	<h3>Modification de personne</h3>
    	<hr>
    	<form action="" method="post">
    		<label>Nom :</label>
    		<input type="text" name="nom" value="<?= @$person['nom']?>" required>
    		<label>Prénoms :</label>
    		<input type="text" name="prenom" value="<?= @$person['prenom']?>" required>
    		<label>Date naissance :</label>
    		<input type="date" name="date_naiss" value="<?= @$person['date_naiss']?>">
    		<input type="hidden" name="idp" value="<?= @$person['id']?>">
    		<hr>
    		<button type="submit" name="btnModif">Modifier</button>
    		<button type="reset" name="btnCancel">Annuler</button>
    	</form>
    	<?php 
    	    if (isset($_POST['btnModif'])) {
    	    	 // recuperation des valeurs des champs
    	    	  $nom = $_POST['nom'];
    	    	  $prenom = $_POST['prenom'];
    	    	  $date_naiss = $_POST['date_naiss'];
    	    	  $id = $_POST['idp'];

    	    	  //verification des champs 
    	    	  if (empty($nom) || empty($prenom)|| empty($date_naiss)) {
    	    	   	echo "Veuillez remplir tous les champs .";
    	    	  }else{
	    	    	  	if (updatePerson($id,$nom,$prenom,$date_naiss)) {
	    	    	  		
	    	    	  			echo "<script>
	    	    	  				alert('Personne modifiée avec succès. ');
	    	    	  				window.location.href='index.php';
	    	    	  			</script> ";
	    	    	  		
	    	    	  	}else{
	    	    	  		echo " Aucune modification n'a été apportée.  ";
	    	    	  	}
    	    	  }


    	    }
    	 ?>

    </div>
</body>
</html>