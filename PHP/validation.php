<?php include('filewriter.php');?>
<?php include('csv.php');?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ans = array();
    $count = 0;
    //$fh = fopen($filename, 'r');
    if (($handle = fopen("../data/animaux.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $count++;
            $ans[] = $data;
        }
    }
    fclose($handle);
    $countStr = (string)$count;
    $id = "X".$countStr;
    $name = $_POST["Animalname"];
    $type = $_POST["type"];
    $race = $_POST["race"];
    $age = $_POST["age"];
    $desc = trim(preg_replace('/\s\s+/', ' ', $_POST["desc"]));
    $email = $_POST["email"];
    $address = $_POST["civic"];
    $city = $_POST["city"];
    $cp = $_POST["post"];
    saveForm($id,$name,$type,$race,$age,$desc,$email,$address,$city,$cp);
    header("Location: ../html/confirmation.html?mise-en-adoption={$success}", true, 303);
}
?>