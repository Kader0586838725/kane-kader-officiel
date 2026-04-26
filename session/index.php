<?php
if (isset($_POST["valider"])) {
 $login =$_POST['login'];
 $password =$_POS['password'];
 if ($login == kader && $password == 1234) { ?>
 <script type="text/javascript">
 	alert('login ou mot de passe incorrect')
 </script>
 <?php  
 header("location:script.php");	
 }
}

  ?>

<!DOCTYPE html>
<html>
<head>
	<title>session </title>
</head>
<body>
	<form action="" method="post">
		<fieldset>
			<legend><center>CONNEXION </center></legend>
			<label>login:</label>
			<input type="text" class="form-control"></input> <br>
			<label>MOT DE¨PASSE :</label>
			<input type="password" class="form-control"></input> <br>
			<button type="submit" class="btn btn-primary">valider</button> <br>
			<button type="reset" class="btn btn-danger">Annuler</button>


		</fieldset>
	</form>

</body>
</html>