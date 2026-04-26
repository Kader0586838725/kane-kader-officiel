
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carte d'identite</title>
</head>
<body>
   <div style="margin-left:auto ; margin-right:auto;margin: top 50px;width: 800px;"> 
<fieldset>
    <legend style="text-align:center">CREATION CARTE IDENTITE</legend>
    <form action="script.php" method="post" enctype="multipart/form-data">
        nom:<input type="text" name="nom"><br>
        prenom:<input type="text" name="prenom"><br>
        date naissance:<input type="date" name="date_naiss"><br>
        taille:<input type="number" name="taille"><br>
        date emission:<input type="number" name="jour" placeholder="jour"><input type="number" name="mois" placeholder="mois"><input type="number" name="annee" placeholder="annee"><br>
        photo:<input type="file" name="photo" ><br>
        <input type="submit" name="ok" value="valider"><input type="reset" value="annuler">
    </form>
</fieldset>
</div>
</body>
</html>