<?php
/*
Message significatif pour chaque erreur
*/
include 'filewriter.php';

if(isDataValid()) {
    saveForm();
    header("Location: ../html/success.html", true, 302);
}

function isDataValid(){

    $fornameValid = $surnameValid = $emailValid = $commentValid = false;
    $dataValid = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){

            $surnameValid = isSurnameValid();
            $fornameValid = isFornameValid();
            $emailValid = isEmailValid();
            $commentValid = isCommentValid();
        
    }
    return $surnameValid && $fornameValid && $emailValid && $commentValid;
}

function isSurnameValid(){
    $surnameValid = true;
    if(!isset($_POST["nom"])){
        http_response_code(400);
        exit;
    }
    $surname = $_POST["nom"];

    if((empty($surname))){
        echo "<p>Le champ nom est obligatoire</p>";
        $surnameValid = false;
    }
    if(strlen($surname) > 40){
        echo "<p>Le champ nom ne doit pas dépasser 40 caract&egrave;res</p>";
        $surnameValid = false;
    }
    return $surnameValid;
}

function isFornameValid(){
    $fornameValid = true;
    if(!isset($_POST["prenom"])){
        http_response_code(400);
        exit;
    }
    $forname = $_POST["prenom"];

    if((empty($forname))){
        echo "<p>Le champ pr&eacute;nom est obligatoire</p>";
        $fornameValid = false;
    }
    if(strlen($forname) > 50){
        echo "<p>Le champ pr&eacute;nom ne doit pas dépasser 50 caract&egrave;res</p>";
        $fornameValid = false;
    }
    return $fornameValid;
}

function isEmailValid(){
    $emailValid = true;
    if(!isset($_POST["courriel"])){
        http_response_code(400);
        exit;
    }
    $email = $_POST["courriel"];

    if(empty($email)){
        echo "<p>Le champ courriel est obligatoire</p>";
        $emailValid = false;
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Le courriel doit &ecirc;tre du format: nom@courriel.com</p>";
        $emailValid = false;
   }
    return $emailValid;
}

function isCommentValid(){
    $commentValid = true;

    if(!isset($_POST["plainte"])){
        http_response_code(400);
        exit;
    }
    $comment = $_POST["plainte"];

    if(empty($comment)){
        echo "<p>Veuillez s'il vous pla&icirc;t entrer un commentaire.</p>";
        $commentValid = false;
    }
    return $commentValid;
}

?>
