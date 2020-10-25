<?php
    include 'php/table.php';
?>
<!DOCTYPE html>
<html lang='fr'>

<head>
    <title>Wikiplane</title>
    <meta charset="utf-8">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="images/logo.ico" />
</head>

<body>

    <div class="main">
        <div class="header">
            <div class="nav">
                <a class="active" href="index.php">Accueil</a>
                <a href="./php/toplist.php" class="toplist">Top 10</a>
                <a href="./html/contact.html" class="contact">Contactez-nous</a>
                <a href="./html/about.html" class="about">&Agrave; propos</a>
                <a href="./html/sources.html" class="sources">Sources</a>
            </div>
        </div>
        <br><br><br>
        <h1>Wikiplane</h1>
        <div class="sidebar">
            <a href="#">Cessna Skyhawk 172<br></a>
            <a href="#Beechcraft">Beechcraft Baron G58<br></a>
            <a href="#Airbus">Airbus 320 Neo<br></a>
            <a href="#Boeing">Boeing 747-8 Intercontinental<br></a>
</div>
    </div>
    <div class="content">
        <div class="submain">
            <br><br><br><br>
            <div class="article">
                <h2 id="Cessna"><span>Cessna 172 Skyhawk</span></h2>
                <img src="images/C172.jpg" class="thumbnail" alt="Un Cessna 172 dans les airs"/>
                <p class="article_content">Le Cessna Skyhawk 172 est l'avion monomoteur le plus populaire jamais construit. 
                <br> Avec des caract&eacute;ristiques de vol tol&eacute;rantes, une tr&egrave;s bonne visibilit&eacute;,
                <br> l'option d'avoir des avioniques sophistiqu&eacute; avec le mod&egrave;le G1000,
                <br> le Cessna Skyhawk est l'avion le plus populaire pour la formation au pilotage et est parfaitement adapt&eacute; aux &eacute;l&egrave;ves pilotes.</p>
                    <?php createTable(124,14000,5,640);?>
            </div>
            <br><br><br><br><br><br><br><br>
            <div class="article">
                <h2 id= "Beechcraft"><span>Beechcraft Baron G58</span></h2>
                <img src="images/BB58.jpg" class="thumbnail" alt="Un Beechcraft Baron G58 dans les airs" />
                <p class="article_content">Le Baron G58 est une variante plus longue de la s&eacute;rie Baron de Beechcraft.
                <br>Il peut accueillir jusqu'&agrave; six passagers, avec un vaste espace pour le fret, et am&eacute;lior&eacute; avec l'avionique G1000.
                <br> La s&eacute;rie a &eacute;t&eacute; introduite en 1961 et est encore en production aujourd'hui. Beechcraft fabrique principalement des avions
                <br> adapt&eacute; pour l'aviation civile, mais ils ont aussi une gamme pour l'aviation militaire.</p>
                    <?php createTable(176,20688,7,1480);?>
            </div>
            <br><br><br><br><br><br><br><br>
            <div class="article">
                <h2 id= "Airbus"><span>Airbus 320 Neo</span></h2>
                <img src="images/A320.jpg" class="thumbnail" alt="Un Lufthansa Airbus 320 Neo dans les airs" />
                <p class="article_content">La famille Airbus A320neo (n&eacute;o pour New Engine Option) est un d&eacute;veloppement de la famille A320 d'avions de ligne.
                <br> Lanc&eacute; le 1er d&eacute;cembre 2010, il a effectu&eacute; son premier vol le 25 septembre 2014
                <br> Une des raisons pour laquelle le Airbus 320 Neo est un des aeronefs les plus vendus au monde est gr&acirc;ce &agrave;
                <br> son syst&egrave;me de commande de vol &eacute;lectrique et ses syst&egrave;mes de bord &agrave; la fine pointe de la technologie rivalisant avec le fameux Boeing 737.</p>
                    <?php createTable(445,39800,7,3500);?>
            </div>
            <br><br><br><br><br><br><br><br>
            <div class="article">
                <h2 id="Boeing"><span>Boeing 747-8 Intercontinental</span></h2>
                <img src="images/B747.jpg" class="thumbnail" alt="Un Boeing 747-8 Intercontinental de Lufthansa dans les airs" />
                <p class="article_content">"The Queen of the Skies". Le surnom du Boeing 747 vient de leur derni&egrave;re it&eacute;ration de leur variante passag&egrave;re.
                <br> Le premier vol du mythique Boeing 747 a &eacute;t&eacute; fait le 9 f&eacute;vrier 1969. 
                <br> La production du Boeing 747 maintenant r&eacute;duite, Boeing a annonc&eacute; plus t&ocirc;t cette ann&eacute;e que le dernier aeronef produit sera livr&eacute; en 2022.
                <br> Une &eacute;norme baisse de demande a vu le jour en raison de la pand&eacute;mie de la COVID-19, ce qui a pouss&eacute; les dirigeants de Boeing &agrave; prendre cette d&eacute;cision.</p>
                    <?php createTable(493,43100,16,7730);?>
            </div>
        </div>
        <br><br><br><br>            
    </div>


</body>
</html>