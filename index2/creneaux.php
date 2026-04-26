
<?php
if (isset($_GET)) {
    if (!empty($_GET['Ho']) && !empty($_GET['Hf'])) {
        $ouvert = null;
        $fermer = null;
          $creneaux=[];
    $creneautrouve = false;
    $debut = $_GET['Ho'];
    $fin = $_GET['Hf'];
    if($debut >= $fin){
        echo "le creneaux ne pas etre enregistre car l'heure d'ouverture est ($debut) est superieur a l'heure de fermeture $fin";
        }else{
        $creneaux[] = [$debut,$fin];
    } 
 $heure = $_GET['visite'];
 foreach($creneaux as  $creneau) {
    if($heure >= $creneau[0] && $heure <= $creneau[1]) {
        $creneautrouve = true;
    }
    if($creneautrouve === true) {
     $ouvert = "le magazin est ouvert";
}else{
   $fermer = "desolé,le magazin sera fermé:";
}
}
    }

}
?><!DOCTYPE html>
<html>
<head>
    <title>crenneaux</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

          <h1>Horaire du magazin</h1> 
          <?php if($ouvert): ?>
            <div class="alert alert-success">
             <?= $ouvert ?>
             </div>
           <?php endif; ?>
<?php if($fermer): ?>
            <div class="alert alert-danger">
             <?= $fermer ?>
             </div>
           <?php endif; ?>

          <form method="get">
<label>Heure de debut</label><br>
<input type="number" name="Ho" class="form-control"> <br>
<label>Heure de fin</label><br>
<input type="number" name="Hf" class="form-control"><br>
<label> A qu'elle heure voulez vous visiter le magazin</label><br>
<input type="number" name="visite" class="form-control"><br>
<button type="submit" class="btn btn-primary">Valider</button>
</form>
</body>
</html>