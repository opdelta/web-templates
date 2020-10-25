<?php
function saveForm() {
    $plainteData = fopen("../files/plainte.txt", "a") or die("Une erreur s'est produite: Impossible d'enregistrer les informations.");
    $nom = $_POST["nom"]."\n";
    fwrite($plainteData, $nom);

    $prenom = $_POST["prenom"]."\n";
    fwrite($plainteData, $prenom);

    $courriel = $_POST["courriel"]."\n";
    fwrite($plainteData, $courriel);

    $raison = $_POST["raison"]."\n";
    fwrite($plainteData, $raison);

    $plainte = $_POST["plainte"]."\n";
    fwrite($plainteData, $plainte);

    $end = "-----\n";
    fwrite($plainteData, $end);
    fclose($plainteData);
}

?>