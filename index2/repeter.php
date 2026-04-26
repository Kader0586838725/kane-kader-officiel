
<?php
$creneaux =[];

while(true){
    $debut=(int)readline('heure d\'ouverture :');
    $fin=(int)readline('heure de fermeture:');
    if($debut >= $fin) {
        echo "le creneaux ne pas etre enregistre car l'heure d'ouverture est ($debut) est superieur a l'heure de fermeture";
    }else{
        $creneaux[] = [$debut,$fin];
        $action =readline('voulez vous enregistrer un nouveau creneau (o/n):');
        if ($action === 'n'){
            break;
        }
    }
    }

$heure = (int)readline("A quelle heure voulez vous visiter le magazin");
$creneautrouve =false;
foreach ($creneaux as  $creneau) {
    if($heure >= $creneau[0] && $heure <= $creneau[1]) {
        $creneautrouve = true;
        break;
    }
}
if ($creneautrouve) {
    echo "le magazin est ouvert";
}else{
    echo "desolé,le magazin sera fermé:";
}









/* 
$notes = [10,15,16];
$eleves =[
    'CM2'=>['jean','mark','jean','marion'],
    'CM1'=> ['mark','marcelin']
];
foreach ($eleves as $classe => $listEleves) {
    echo "la classe $classe:\n";
    foreach ($listEleves as  $eleve) {
        echo"- $eleve\n" ;
    }
    echo "\n";
}
*/
?>