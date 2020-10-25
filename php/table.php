<?php

function createHeader() {
    $entetes = array("Vitesse", "Altitude maximale", "Endurance", "Portée");
    echo "<table class=\"borders\">";
    echo "<thead>";
    echo "<tr>";
    foreach ($entetes as $entete) {
        echo "<th>" . $entete . "</th>";
    }
    echo "</tr>";
    echo "</thead>";
}

function createTable($speed, $altitude, $endurance, $range) {
    $element = array($speed, $altitude, $endurance, $range);
    createHeader();
    echo "<tbody>";
    echo "<tr>";
    $counter = 0;
    $unit;
    foreach ($element as $td) {
        switch ($counter) {
            case 0: $unit = " KTAS"; break;
            case 1: $unit = " pi"; break;
            case 2: $unit = " Hr"; break;
            case 3: $unit = " NM"; break;
            }
        echo "<td>" . $td . $unit . "</td>";
        ++$counter;
    }
    echo "</tr>";
    echo "</tbody>";
    echo "</table>";
}

function createTopList() {
    $args = func_get_args();
    echo "<ol>";
    foreach($args as $top) {
        echo "<li>". $top . "</li>";
    }
    echo "</ol>";
}

?>