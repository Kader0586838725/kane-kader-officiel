<?php include 'fonctions.php';?>
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
    	<h3>Enregistrement de personne</h3>
    	<hr>
    	<form action="" method="post">
    		<label>Nom :</label>
    		<input type="text" name="nom" placeholder="Entrer un nom svp !" required>
    		<label>Prénoms :</label>
    		<input type="text" name="prenom" placeholder="Entrer un prénom svp !" required>
    		<label>Date naissance :</label>
    		<input type="date" name="date_naiss" >
    		<label>Resau :</label>
    		<select name="reseau" required>
    			<option value="">Veuillez choisir un reseau</option>
    			<?php 
    				foreach(getAll('reseau') as $reseau){ ?>
    					<option value="<?=$reseau['num']?>"><?=$reseau['designation']?></option>
    			<?php 	}
    			 ?>
    		</select>
    		<label>Numéro :</label>
    		<input type="number" name="numero" placeholder="Entrer un Numéro" requirede>
    		<hr>
    		<button type="submit" name="btnAdd">Ajouter</button>
    		<button type="reset" name="btnCancel">Annuler</button>
    	</form>
    	<?php 
    	    if (isset($_POST['btnAdd'])) {
    	    	 // recuperation des valeurs des champs
    	    	  $nom = $_POST['nom'];
    	    	  $prenom = $_POST['prenom'];
    	    	  $date_naiss = $_POST['date_naiss'];
    	    	  $reseau = $_POST['reseau'];
    	    	  $numero = $_POST['numero'];

    	    	 

    	    	  $prefix = substr($numero, 0,2);
    	    	  //verification des champs 
    	    	  if (empty($nom) || empty($prenom) || empty($reseau) || empty($numero)) {
    	    	   	echo "Veuillez remplir tous les champs .";
    	    	  }elseif (existeTel($numero)) {
    	    	  	echo " $numero existe déjà  ";
    	    	  }elseif (mb_strlen($numero) !=10 || !ctype_digit($numero)) {
    	    	  		echo " Veuillez entrer un numéro de 10 chiffres.  ";
    	    	  }elseif(correspondance($reseau,$prefix) == false){
    	    	  	echo " Le numéro entré ne correspond pas au reseau choisi.  ";
    	    	  }else{
    	    	     	$id = date('YmdHis');
	    	    	  	if (addPerson($id,$nom,$prenom,$date_naiss)) {
	    	    	  		if (addNumero($numero,$id,$reseau)) {
	    	    	  			echo " Personne enregistré avec succès.  ";
	    	    	  		}else{
	    	    	  			echo " Numéro non enregistré.  ";
	    	    	  		}
	    	    	  	}else{
	    	    	  		echo " Personne non enregistrée.  ";
	    	    	  	}
    	    	  }


    	    }
    	 ?>

    </div>
</body>
</html>