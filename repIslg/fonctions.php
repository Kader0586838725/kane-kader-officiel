<?php 

 $tabResau = [
 	"1"=>"07",
    "2"=>"05",
  	"3"=>"01"
 ];
// connexion a la base de donnees
function db(){
	$con = null;
	$url  = "mysql:host=localhost;dbname=db_repertoire";
	$username = "root";
	$password = "";
	try {
		$con = new PDO($url,$username,$password);
	} catch (Exception $e) {
		echo "Erreur de connexion : ".$e->getMessage();
	}

	return $con;
}
 // Tous les enregistrements de la table passe en parametre
function getAll($table){
	$sql = "SELECT * FROM $table";
	$query = db()->prepare($sql);
    $query->execute();
    
    if ($query->rowCount() >  0) {
    	return $query->fetchAll(PDO::FETCH_ASSOC);
    }else{
    	return [];
    }

}
function getNumeroByIdp($idP){
	$sql = "SELECT * FROM personne p,reseau r,numero n WHERE 
	p.id = n.person_id AND r.num = n.reseau_num AND id = ? ";
	$query = db()->prepare($sql);
    $query->execute([$idP]);
    
    if ($query->rowCount() >  0) {
    	return $query->fetchAll(PDO::FETCH_ASSOC);
    }else{
    	return [];
    }

}

// Enreigistrement de personne
function addPerson($id,$nom,$prenom,$date_naiss){
	$sql = "INSERT INTO personne(id,nom,prenom,date_naiss) VALUES(?,?,?,?)";
	$query = db()->prepare($sql);
	$query->execute([$id,$nom,$prenom,$date_naiss]);
	$nbr = $query->rowCount();
	if ($nbr > 0) {
		return true;
	}else{
		return false;
	}

}

function updatePerson($id,$nom,$prenom,$date_naiss){
	$sql = "UPDATE personne SET nom = ?,prenom = ?,date_naiss = ? WHERE id = ?";
	$query = db()->prepare($sql);
	$query->execute([$nom,$prenom,$date_naiss,$id]);
	$nbr = $query->rowCount();
	if ($nbr > 0) {
		return true;
	}else{
		return false;
	}

}

// Enreigistrement de numero
function addNumero($libelle,$person_id,$reseau_num){
	$sql = "INSERT INTO numero(libelle,person_id,reseau_num) VALUES(?,?,?)";
	$query = db()->prepare($sql);
	$query->execute([$libelle,$person_id,$reseau_num]);
	$nbr = $query->rowCount();
	if ($nbr > 0) {
		return true;
	}else{
		return false;
	}

}

function existeTel($libelle){
	$sql = "SELECT * FROM numero WHERE libelle = ? ";
	$query = db()->prepare($sql);
    $query->execute([$libelle]);
    
    if ($query->rowCount() >  0) {
    	return true;
    }else{
    	return false;
    }

}

function correspondance($reseau,$prefix){
	global $tabResau;

	$result = false;

	foreach ($tabResau as $key => $value) {
		if ($key == $reseau && $prefix == $value) {
			$result = true;
			break;
		}
	}

	return $result;
}

function getPersonById($id){
	$sql = "SELECT * FROM personne WHERE id = ?";
	$query = db()->prepare($sql);
    $query->execute([$id]);
    
    if ($query->rowCount() >  0) {
    	return $query->fetch(PDO::FETCH_ASSOC);
    }else{
    	return [];
    }
}

// Suppression de personne 
function deletePerson($id){
	$sql = "DELETE FROM personne WHERE id = ?";
	$query = db()->prepare($sql);
	$query->execute([$id]);
	$nbr = $query->rowCount();
	if ($nbr > 0) {
		return true;
	}else{
		return false;
	}

} 


?>