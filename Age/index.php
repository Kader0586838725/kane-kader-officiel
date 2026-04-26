<?php 
include ("mois.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1{
        text-align: center;
    }
    .container{
        margin-right: 50%;
    }
</style>
<body>
    <h1>Formulaire de calcule d'age </h1>
    <div class="container">
          <form action="" method="post">
<input type="text" placeholder="NOM" name="nom"> <br>
<input type="text" placeholder="Prenom" name="prenom"><br>
 <select name="jours" id="">
    <option value="">jours </option>
    <?php for($i=1;$i<=31;$i++ ){
     echo '<option value="'.$i.'">'.$i.'</option>';
    }
     ?> 
    
         
 </select>
 <select name="mois" id="">
    <option value="">mois</option>
    <?php for($i=1;$i<=12;$i++ ){
     echo '<option value="'.$i.'">'.$i.'</option>';
    }
     ?> 
 </select>
 <select name="annee" id="">
 <option value="">Annee </option>
    <?php for($i=1980;$i<=2024;$i++ ){
     echo '<option value="'.$i.'">'.$i.'</option>';
    }
     ?> 
 </select>
<br>
<button type="submit" name="Valider">Valider</button>
<button type="reset" name="Annuler">Annuler</button>
    </form> 
    </div>
    <?php if(!empty($annee)){
        echo $nom.' '.$prenom. ' vous avez '. calcule_Age($annee).' ans';
    } ?> 
</body>
</html>