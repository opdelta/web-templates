<?php
  require 'filewriter.php';
  $message = "";
  $parentName = "";
  $childName = "";
  $school = "";
  $age = "";
  $lundi = "";
  $mardi = "";
  $mercredi = "";
  $jeudi = "";
  $vendredi = "";
  $success = true;
  $validNb = 0;
  $validClass = "validEntry";
  $validClassChild = "validEntry";
  $validClassAge = "validEntry";
  $validClassSchool = "validEntry";
  $validClassL = "validEntry";
  $validClassMa = "validEntry";
  $validClassMe = "validEntry";
  $validClassJ = "validEntry";
  $validClassV = "validEntry";
  $pErr = ''; 
  $cErr = ''; 
  $scErr = '';
  $ageErr = '';
  $lunErr = '';
  $marErr = '';
  $merErr= ''; 
  $jeuErr = '';
  $venErr = '';
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_POST["parentName"]) || !isset($_POST["childName"]) || !isset($_POST["school"])
        || !isset($_POST["age"]) || !isset($_POST["lundi"]) || !isset($_POST["mardi"])
        || !isset($_POST["mercredi"]) || !isset($_POST["jeudi"]) || !isset($_POST["vendredi"])) {
      $success = false;
      http_response_code(400);
      exit;
    }
    
    $parentName = $_POST["parentName"];
    $childName = $_POST["childName"];
    $school = $_POST["school"];
    $age = $_POST["age"];
    $lundi = $_POST["lundi"];
    $mardi = $_POST["mardi"];
    $mercredi = $_POST["mercredi"];
    $jeudi = $_POST["jeudi"];
    $vendredi = $_POST["vendredi"];

    if ($parentName == "" || strpos($parentName, ',') !== false) {
      $pErr = "Le nom du parent est obligatoire et ne doit pas contenir de virgules.";
      $success = false;
      $validClass = "invalidEntry";
    }
    if ($childName == "" || strpos($childName, ',') !== false) {
        $cErr = "Le nom de l'enfant est obligatoire et ne doit pas contenir de virgules.";
        $success = false;
        $validClassChild = "invalidEntry";
    }
    if ($school == "" || strpos($school, ',') !== false) {
        $scErr = "Le nom de l'&eacute;cole est obligatoire et ne doit pas contenir de virgules.";
        $success = false;
        $validClassSchool = "invalidEntry";
    }
    if (empty($age) || $age == "0") {
      $ageErr = "L'&acirc;ge de l'enfant est obligatoire. Veuillez selectionner un choix.";
      $success = false;
      $validClassAge = "invalidEntry";
    }
    if (empty($lundi) || $lundi == "0") {
        $lunErr = "Le choix du plat de lundi est obligatoire. Veuillez selectionner un choix.";
        $success = false;
        $validClassL = "invalidEntry";
    }
    if (empty($mardi) || $mardi == "0") {
        $marErr = "Le choix du plat de mardi est obligatoire. Veuillez selectionner un choix.";
        $success = false;
        $validClassMa = "invalidEntry";
    }
    if (empty($mercredi) || $mercredi == "0") {
        $merErr = "Le choix du plat de mercredi est obligatoire. Veuillez selectionner un choix.";
        $success = false;
        $validClassMe = "invalidEntry";
    }
    if (empty($jeudi) || $jeudi == "0") {
        $jeuErr = "Le choix du plat de jeudi est obligatoire. Veuillez selectionner un choix.";
        $success = false;
        $validClassJ = "invalidEntry";
    }
    if (empty($vendredi) || $vendredi == "0") {
        $venErr = "Le choix du plat de vendredi est obligatoire. Veuillez selectionner un choix.";
        $success = false;
        $validClassV = "invalidEntry";
    }
    if ($success) {
        saveForm($parentName, $childName, $age, $school, $lundi, $mardi, $mercredi, $jeudi, $vendredi);
        header("Location: ../html/confirmation.html?commande={$success}", true, 303);
    }
  }
?>
<!DOCTYPE html>
<html lang='fr'>

<head>
    <title>Traiteur bonheur - Commande</title>
    <meta charset="utf-8">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="images/logo.ico" />
</head>

<body>
    <div class="navbar" id="navbar">
        <a href="commande.php" class = "active">Commande</a>
        <a href="../html/contact.html">Contact</a>
        <a href="../html/menu.html">Informations</a>
        <a href="../index.html">Accueil</a>
    </div>
    <div class="banner-order">
        <div class="banner-text">
            <h1>Formulaire de commande</h1>
        </div>
    </div>
     <br><br>
     <h2 class= "form-title">Veuillez remplir les champs suivants.</h2>
     <br>
    <form method="post" action="commande.php" class = "order-form">
      <div class ="parent-full-name">
      <?php echo "<label for='parentName' class='$validClass'>Nom complet du parent: </label>"; ?>
      <?php echo "<input type='text' name='parentName' id='parentName' value='{$parentName}'>"; ?>
      <?php echo "<span id = \"error-span\" class=\"error-span\">$pErr</span>"; ?>
      </div>
      <br>
      <div class ="child-full-name">
      <?php echo "<label for='childName' class='$validClassChild'>Nom complet de l'enfant: </label>"; ?>
      <?php echo "<input type='text' name='childName' id='childName' value='{$childName}'>"; ?>
      <?php echo "<span id = \"error-span\" class=\"error-span\">$cErr</span>"; ?>
      </div>
      <br>
      <div class="school-name">
        <?php echo "<label for='school' class='$validClassSchool'>Nom de l'&eacute;cole de l'enfant: </label>"; ?>
            <?php echo "<input type='text' name='school' id='school' value='{$school}'>"; ?>
            <?php echo "<span id = \"error-span\" class=\"error-span\">$scErr</span>"; ?>
        <br>
    </div>
    <br>
    <div class="child-age">
        <?php echo "<label for='age' class='$validClassAge'>&Acirc;ge de l'enfant: </label>"; ?>
            <select name="age" id="age">
            <option selected value = "0"> -- Choisissez une option -- </option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
      </select>
      <?php echo "<span id = \"error-span\" class=\"error-span\">$ageErr</span>"; ?>
    </div>
      <br>
      <div class="choice-lundi">
        <?php echo "<label for='lundi' class='$validClassL'>Choix du plat le lundi: </label>"; ?>
            <select name="lundi" id="lundi">
            <option selected value = "0"> -- Choisissez une option -- </option>
            <option value="Sous-marin en folie">Sous-marin en folie</option>
            <option value="Pate chinois vegetarien">P&acirc;t&eacute; chinois v&eacute;g&eacute;tarien</option>
            </select>
            <?php echo "<span id = \"error-span\" class=\"error-span\">$lunErr</span>"; ?>
      </div> 
        <br>
        <div class="choice-mardi">
        <?php echo "<label for='mardi' class='$validClassMa'>Choix du plat le mardi: </label>"; ?>
            <select name="mardi" id="mardi">
            <option selected value = "0"> -- Choisissez une option -- </option>
            <option value="Lasagne">Lasagne</option>
            <option value="Poke bol vegetarien">Poke bol v&eacute;g&eacute;tarien</option>
            </select>
            <?php echo "<span id = \"error-span\" class=\"error-span\">$marErr</span>"; ?>
      </div>  
        <br>
        <div class="choice-mercredi">
        <?php echo "<label for='mercredi' class='$validClassMe'>Choix du plat le mercredi: </label>"; ?>
            <select name="mercredi" id="mercredi">
            <option selected value = "0"> -- Choisissez une option -- </option>
            <option value="Macaroni chinois">Macaroni chinois</option>
            <option value="Salade de pates vegetarien">Salade de p&acirc;tes v&eacute;g&eacute;tarien</option>
            </select>
            <?php echo "<span id = \"error-span\" class=\"error-span\">$merErr</span>"; ?>
      </div>
        <br>
        <div class="choice-jeudi">
        <?php echo "<label for='jeudi' class='$validClassJ'>Choix du plat le jeudi: </label>"; ?>
            <select name="jeudi" id="jeudi">
            <option selected value = "0"> -- Choisissez une option -- </option>
            <option value="Pizza toute garnie">Pizza toute garnie</option>
            <option value="Poutine">Poutine</option>
            </select>
            <?php echo "<span id = \"error-span\" class=\"error-span\">$jeuErr</span>"; ?>
      </div> 
        <br>
        <div class="choice-vendredi">
        <?php echo "<label for='vendredi' class='$validClassV'>Choix du plat le vendredi: </label>"; ?>
            <select name="vendredi" id="vendredi">
            <option selected value = "0"> -- Choisissez une option -- </option>
            <option value="Hamburger">Hamburger</option>
            <option value="Hamburger vegetarien">Hamburger v&eacute;g&eacute;tarien</option>
            </select>
            <?php echo "<span id = \"error-span\" class=\"error-span\">$venErr</span>"; ?>
      </div> 
        <br> 
        <br>
      <input type="submit" value="Soumettre">
    </form>
    <br><br><br><br>
    <div id="copyright ">
        <div class="footer ">
            <p>Traiteur bonheur - Ziad Lteif 2020</p>
        </div>
    </div>
</div>
</body>

</html>