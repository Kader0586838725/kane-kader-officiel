<?php
if (isset($_POST['ok'])){
    $nom= $_POST['nom'];
    $prenom= $_POST['prenom'];
    $date_naiss= $_POST['date_naiss'];
    $taille= $_POST['taille'];
    $jour= $_POST['jour'];
    $mois= $_POST['mois'];
    $annee= $_POST['annee'];
    $photo= $_FILES['photo']['name'];
    $chemin=$_FILES['photo']['tmp_name'];
    move_uploaded_file($chemin,"image/$photo");
    //generons le matricule
    $standard= "CI00";
    $nombr=rand(1,1000000);
    $numCNI =$standard.''.$nombr;
    // calculons date d'expiration
    $jourEXp=$jour-1;
    $anneeEXp=$annee+10;
  //echo "$photo";   
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .div1{
             text-align: center;
        }
        .div2{
              float: left;
              padding: 5px;
             
        }
        

    </style>
</head>
<body>
    <!-- <img src="image/<?= $photo ?>" alt="photo"> -->
<div style="margin-right: auto; margin-top: 50px; margin-left: auto; width: 600px; border: 1px solid gray;">
    <div class="div1"><h3><u> REPUBLIQUE DE COTE D'IVOIRE</u> </h3> 
    <h4> <u> CARTE IDENTITE NATIONALE </u></h4>
    </div>
    <div class="div2"><img src="<?php echo 'image/$photo';?>" width="200">
    </div>
 <div class="div2">
  NUMERO CNI:<?php echo $standard.''.$nombr.'<br>';?>
 NOM:<?php echo $nom .'<br>';?>
 PRENOM:<?php echo $prenom .'<br>';?>
 DATE DE NAISSANCE:<?php echo $date_naiss .'<br>';?>
 TAILLE:<?php echo $taille.' cm <br>';?>
DATE D'EMISSION:<?php echo $jour.'/'.$mois.'/'.$annee .'<br>';?>
DATE D'EXPIRATION:<?php echo $jourEXp.'/'.$mois.'/'.$anneeEXp;?>
  </div>
</div>
</body>
</html>