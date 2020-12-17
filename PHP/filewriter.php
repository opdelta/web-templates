<?php
function saveForm($id, $name, $type, $race, $age, $desc, $email, $address, $city, $cp) {
    $animal = fopen("../data/animaux.csv", "a") or die("Une erreur s'est produite: Impossible d'enregistrer les informations.");
    fwrite($animal, "\n".$id.",");
    fwrite($animal, $name.",");
    fwrite($animal, $type.",");
    fwrite($animal, $race.",");
    fwrite($animal, $age.",");
    fwrite($animal, $desc.",");
    fwrite($animal, $email.",");
    fwrite($animal, $address.",");
    fwrite($animal, $city.",");
    fwrite($animal, $cp);
    fclose($animal);
}
?>