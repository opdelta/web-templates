<?php

function readAndRandomizeCSV($filename) { 
    $matrix = array();
    //$fh = fopen($filename, 'r');
    if (($handle = fopen($filename, "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $matrix[] = $data;
        }
    }
    fclose($handle);
    $shift = array_shift($matrix);
    shuffle($matrix);
    return $matrix;
}

?>