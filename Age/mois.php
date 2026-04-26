<?php 

if(isset($_POST['valider'])){
    $jours=$_POST['valider'];
    $jours=$_POST['jours'];
    $mois=$_POST['mois'];
    $annee=$_POST['annee'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];  

}
function calcule_Age($annee){
$date = date('Y');
$age = $date-$annee;
return $age;
}
?> 