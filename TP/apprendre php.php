<!DOCTYPE html>
<html lang ="en">
<head>
	<title>calcule de montant</title>
	<meta charset="UTF-8">
	<meta name ="viewport" content="width=device-width,initial-scale=1">
	<link href="css/style.css "rel="stylesheet">
</head>
<style type="">
	body{
		background-color:;
		color:red;
	}
	input{
		border-color:blue;
	}
	.ok{
		color:white;
		background-color:green;
		border-color:orange;
	}
	button{
		color:white;
		background-color:green;
	}
	.hr{
		width:100px;
		height:30px;
	}
</style>
<body>
	<fieldset>
		<legend>
			calcule de montant a paye
		</legend>
		<form action=""method="post">
			<label>entrez le nombre de metre<strong style="color: red;"></strong>
			</label>
			<input type="number" name="nbremetre" min="1">
			<hr class="hr">
			<button type="submit" name="btnvalider" class="ok">valider</button>
			<button type="reset" name="annuler" class="no">valider</button>
        </form> 
        <?php
            if (isset($_POST['btnvalider'])) {
            	//recuperation des valeur de champs
            	$montant =$_POST['nbremetre'];
            	//calcul du montant en fonction du nombre de metre
            	$montant = $nbremetre*5000;
            	//comparaison
            	if ($montant>=200000){
            		$montant = $montant*0.9;		
            	}
                	echo "<h3>le montant a payer est :$montant FRCFA </h3>";
                }
                ?>    
                
	</fieldset>
</body>
</html>