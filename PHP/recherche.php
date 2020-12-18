<?php
$file = fopen("../data/animaux.csv","r");
//explode permet de récupérer le contenu d'un fichier séparé par un délimiteur(fonctionne aussi pour les fichiers csv)
$animalsList = explode("\n",fread($file,filesize("../data/animaux.csv")));
fclose($file);
$shift = array_shift($animalsList);
//request récupère le paramètre envoyé. Sur votre page -> click droit -> inspect -> Network
//vous pourrez voir que le serveur envoi le contenu du input dans l'attribut q.
$q = $_REQUEST["q"];
$count = 0;
if($q != ""){
    $total = 0;
    $q = strtoupper($q);
    foreach ($animalsList as $animals) {
        if(stristr($animals, $q)){
            $found = 1;
            $count++;
            $array = explode(",", $animals);
            echo "<a class=\"portfolio-link\" data-toggle=\"modal\" href=\"#portfolioModalSearch" . $count . "\">";
            echo "<div class=\"portfolio-hover\">";
            echo "<div class=\"portfolio-hover-content\"><i class=\"fas fa-plus fa-3x\"></i></div>";
            echo "</div>";
            echo "<img class=\"img-fluid\" src=\"assets/img/portfolio/found.png\" alt=\"\" />";
            echo "</a>";
            echo "<div class=\"portfolio-caption\">";
            echo "<div class=\"portfolio-caption-heading\">" . $array[1] . "</div>";
            echo "<div class=\"portfolio-caption-subheading text-muted\">" . $array[2] . "</div>";
            echo "</div>\n</div>\n</div>";
            echo "<div class=\"portfolio-modal modal fade\" id=\"portfolioModalSearch" . $count . "\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">";
            echo "<div class=\"modal-dialog\">";
            echo "<div class=\"modal-content\">";
            echo "<div class=\"close-modal\" data-dismiss=\"modal\"><img src=\"assets/img/close-icon.svg\" alt=\"Close modal\" /></div>";
            echo "<div class=\"container\">";
            echo "<div class=\"row justify-content-center\">";
            echo "<div class=\"col-lg-8\">";
            echo "<div class=\"modal-body\">";
            echo "<h2 class=\"text-uppercase\">". $array[1] . "</h2>";
            echo "<p class=\"item-intro text-muted\">". $array[2] . " / " . $array[3] . "</p>";
            echo "<img class=\"img-fluid d-block mx-auto\" src=\"assets/img/portfolio/animal.png\" alt=\"\" />";
            echo "<p>" . $array[5] . "</p>";
            echo "<ul class=\"list-inline\">";
            echo "<li>&Acirc;ge: ". $array[4] . "</li>";
            echo "<li>Courriel: ". $array[6] ."</li>\n<li>Adresse: ". $array[7] ."</li>\n<li>Ville: ".$array[8] ."</li>\n<li>Code postal: ". $array[9] ."</li>";
            echo "</ul>\n<a href=\"mailto: ". $array[6] . "\" target=\"_blank\" class=\"btn btn-primary\">";
            echo "<i class=\"fas fa-times mr-1\"></i>";
            echo "Adopter\n</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    }
    if ($found == 0) {
        echo "Aucun animal n'a &eacute;t&eacute; trouv&eacute;!";
    }
}  

?>