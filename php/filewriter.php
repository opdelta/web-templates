<?php
function saveForm($parentName, $childName, $age, $school, $lundi, $mardi, $mercredi, $jeudi, $vendredi) {
    $order = fopen("../files/commande.txt", "a") or die("Une erreur s'est produite: Impossible d'enregistrer les informations.");
    fwrite($order, "Parent:".$parentName.", ");
    fwrite($order,"Enfant:".$childName.", ");
    fwrite($order,"Age:".$age.", ");
    fwrite($order,"Ecole:".$school.", ");
    fwrite($order,"Lundi:".$lundi.", ");
    fwrite($order,"mardi:".$mardi.", ");
    fwrite($order,"mercredi:".$mercredi.", ");
    fwrite($order,"jeudi:".$jeudi.", ");
    fwrite($order,"vendredi:".$vendredi."\n");
    fclose($order);
}
?>