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
    	<h3>Enregistrement de Numéro de :<?= @$person["nom"].' '. @$person["prenom"] ?> </h3>
    	<hr>
    	<form action="" method="post">
    	
    	
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
            <input type="number" name="numero" placeholder="Entrer un Numéro" required>
    		<input type="hidden" name="id" value="<?= @$person['id']?>" >
    		<hr>
    		<button type="submit" name="btnAdd">Ajouter</button>
            <button type="reset" name="btnCancel">Annuler</button>
    		<button type="button" >
        <a href="telephone_person.php?id=<?=$person['id']?>">Retour</a>         
            </button>
    	</form>
    	<?php 
    	    if (isset($_POST['btnAdd'])) {
    	    	 // recuperation des valeurs des champs
    	 
    	    	  $reseau = $_POST['reseau'];
                  $numero = $_POST['numero'];
    	    	  $id = $_POST['id'];


    	    	  $prefix = substr($numero, 0,2);
    	    	  //verification des champs 
    	    	  if ( empty($reseau) || empty($numero)) {
    	    	   	echo "Veuillez remplir tous les champs .";
    	    	  }elseif (existeTel($numero)) {
    	    	  	echo " $numero existe déjà  ";
    	    	  }elseif (mb_strlen($numero) !=10 || !ctype_digit($numero)) {
    	    	  		echo " Veuillez entrer un numéro de 10 chiffres.  ";
    	    	  }elseif(correspondance($reseau,$prefix) == false){
    	    	  	echo " Le numéro entré ne correspond pas au reseau choisi.  ";
    	    	  }else{
    	    	     	
	    	    	  		if (addNumero($numero,$id,$reseau)) {
	    	    	  			echo " Numéro enregistré avec succès.  ";
	    	    	  		}else{
	    	    	  			echo " Numéro non enregistré.  ";
	    	    	  		}
    	    	  }


    	    }
    	 ?>

    </div>
</body>
</html>