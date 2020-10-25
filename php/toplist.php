<?php
    include 'table.php';
?>
<!DOCTYPE html>
<html lang='fr'>

<head>
    <title>Wikiplane - Top 10</title>
    <meta charset="utf-8">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="../images/logo.ico" />
</head>

<body>
    <div class="main">
        <div class="header">
            <div class="nav">
                <a href="../index.php" class="home">Accueil</a>
                <a class=active href="toplist.php">Top 10</a>
                <a href="../html/contact.html" class="contact">Contactez-nous</a>
                <a href="../html/about.html" class="about">&Agrave; propos</a>
                <a href="../html/sources.html" class="sources">Sources</a>
            </div>
        </div>
        <br><br><br>
        <h1>Top 10 des avions les plus produits encore en production</h1>
        <br><br><br><br>
        <div class="content">
            <div class="submain_list">
            <?php createTopList("Cessna 172 Skyhawk (44,000+)",
                                "Piper PA-28 Series (32,778+)",
                                "Cessna 182 (23,237+)",
                                "Antonovx An-2 / An-3 (18,000+)",
                                "Mil Mi-8/Mi-17 (17,000+)",
                                "Beechcraft Bonanza (17,000+)",
                                "Chotia Weedhopper (13,000+)",
                                "Boeing 737 (10,550+)",
                                "Airbus A320 Family (9,273+)",
                                "Cessna 206 (8,509+)");?>
            </div>
        </div>
    </div>

</body>

</html>