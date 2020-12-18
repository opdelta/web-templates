<?php include('PHP/csv.php'); ?>
<?php $matrix = readAndRandomizeCSV("data/animaux.csv"); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Adoption - Accueil</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="vendor/css/bootstrap.css" rel="stylesheet" />
        <link href="CSS/style.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Adoption</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Mise en adoption</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Bienvenue dans notre refuge!</div>
                <div class="masthead-heading text-uppercase">Sauvez un animal</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">En savoir plus</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Voici ce que nous offrons pour tous nos animaux</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Micropuce</h4>
                        <p class="text-muted">Tous nos animaux sont micropuc&eacute;s. Ils seront facilement identifiable en cas de perte ou de fugue.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Vaccination</h4>
                        <p class="text-muted">Tous nos animaux sont vaccin&eacute;s, vermifug&eacute;s et st&eacute;lis&eacute;s. On garanti donc la meilleure qualit&eacute; de vie possible.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">V&eacute;t&eacute;rinaire</h4>
                        <p class="text-muted">Nous offrons un service de v&eacute;t&eacute; de 9 &agrave; 17h du lundi au vendredi gratuit pour les 30 jours suivant l'adoption d'un animal.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Animals Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Animaux</h2>
                    <h3 class="section-subheading text-muted">Voici les animaux disponibles en ce moment.</h3>
                </div>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Chercher un animal" id="animal">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" onclick="result()">Chercher</button>
                        <div class = "input-group-append">
                        </div>
                    </div>
                </div>
                  <br>
                <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <span></span>
                        <div class="portfolio-item">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <div class="portfolio-item" id = "suggestion">
                        
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <span></span>
                        <div class="portfolio-item">
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/paw.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $matrix[0][1]?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $matrix[0][2]?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/paw.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $matrix[1][1]?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $matrix[1][2]?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/paw.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $matrix[2][1]?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $matrix[2][2]?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/paw.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $matrix[3][1]?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $matrix[3][2]?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/paw.png" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $matrix[4][1]?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php echo $matrix[4][2]?></div>
                            </div>
                        </div>
                    </div>
                    
                    
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Mise en adoption</h2>
                </div>
                <form id="contactForm" name="form-adoption" method="post" action = "php/validation.php" onsubmit="return validerFormulaire();">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" name = "Animalname" id="Animalname" type="text" placeholder="Nom de l'animal *"/>
                                <span id="animal-error"></span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name = "type" id="type" type="text" placeholder="Type de l'animal *" />
                                <span id="type-error"></span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name = "race" id="race" type="text" placeholder="Race de l'animal *"/>
                                <span id="race-error"></span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name = "age" id="age" type="number" placeholder="&Acirc;ge de l'animal *" min="0" max="30" />
                                <span id="age-error"></span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name = "email" id="email" type="email" placeholder="Votre courriel *" />
                                <span id="email-error"></span>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" name = "civic" id="civic" type="text" placeholder="Adresse civique *" />
                                <span id="civic-error"></span>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" name = "city" id="city" type="text" placeholder="Ville *" />
                                <span id="city-error"></span>
                            </div>
                            <div class="form-group mb-md-0">
                                <input class="form-control" name = "post" id="post" type="text" placeholder="Code postal *" />
                                <span id="post-error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea class="form-control" name = "desc" id="description" placeholder="Description de l'animal*" ></textarea>
                                <span id="desc-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div id="success"></div>
                        <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Ziad Lteif - 2020</div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="vendor/js/jquery.min.js"></script>
        <script src="vendor/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/js/jquery.easing.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/fetch.js"></script>
        <script src="js/contact.js"></script>
        <!-- Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase"><?php echo $matrix[0][1] ?></h2>
                                    <p class="item-intro text-muted"><?php echo $matrix[0][2] . " / " . $matrix[0][3] ?></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/animal.png" alt="" />
                                    <p><?php echo $matrix[0][5] ?></p>
                                    <ul class="list-inline">
                                    <li>&Acirc;ge: <?php echo $matrix[0][4] ?></li>
                                        <li>Courriel: <?php echo $matrix[0][6] ?></li>
                                        <li>Adresse: <?php echo $matrix[0][7] ?></li>
                                        <li>Ville: <?php echo $matrix[0][8] ?></li>
                                        <li>Code postal: <?php echo $matrix[0][9] ?></li>
                                    </ul>
                                    <a href="mailto:<?php echo $matrix[0][6] ?>" target="_blank" class="btn btn-primary">
                                        <i class="fas fa-times mr-1"></i>
                                        Adopter
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase"><?php echo $matrix[1][1] ?></h2>
                                    <p class="item-intro text-muted"><?php echo $matrix[1][2] . " / " . $matrix[1][3] ?>.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/animal.png" alt="" />
                                    <p><?php echo $matrix[1][5] ?></p>
                                    <ul class="list-inline">
                                    <li>&Acirc;ge: <?php echo $matrix[1][4] ?></li>
                                        <li>Courriel: <?php echo $matrix[1][6] ?></li>
                                        <li>Adresse: <?php echo $matrix[1][7] ?></li>
                                        <li>Ville: <?php echo $matrix[1][8] ?></li>
                                        <li>Code postal: <?php echo $matrix[1][9] ?></li>
                                    </ul>
                                    <a href="mailto:<?php echo $matrix[1][6] ?>" target="_blank" class="btn btn-primary">
                                        <i class="fas fa-times mr-1"></i>
                                        Adopter
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase"><?php echo $matrix[2][1] ?></h2>
                                    <p class="item-intro text-muted"><?php echo $matrix[2][2] . " / " . $matrix[2][3] ?></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/animal.png" alt="" />
                                    <p><?php echo $matrix[2][5] ?></p>
                                    <ul class="list-inline">
                                    <li>&Acirc;ge: <?php echo $matrix[2][4] ?></li>
                                        <li>Courriel: <?php echo $matrix[2][6] ?></li>
                                        <li>Adresse: <?php echo $matrix[2][7] ?></li>
                                        <li>Ville: <?php echo $matrix[2][8] ?></li>
                                        <li>Code postal: <?php echo $matrix[2][9] ?></li>
                                    </ul>
                                    <a href="mailto:<?php echo $matrix[2][6] ?>" target="_blank" class="btn btn-primary">
                                        <i class="fas fa-times mr-1"></i>
                                        Adopter
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase"><?php echo $matrix[3][1] ?></h2>
                                    <p class="item-intro text-muted"><?php echo $matrix[3][2] . " / " . $matrix[3][3] ?></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/animal.png" alt="" />
                                    <p><?php echo $matrix[3][5] ?></p>
                                    <ul class="list-inline">
                                    <li>&Acirc;ge: <?php echo $matrix[3][4] ?></li>
                                        <li>Courriel: <?php echo $matrix[3][6] ?></li>
                                        <li>Adresse: <?php echo $matrix[3][7] ?></li>
                                        <li>Ville: <?php echo $matrix[3][8] ?></li>
                                        <li>Code postal: <?php echo $matrix[3][9] ?></li>
                                    </ul>
                                    <a href="mailto:<?php echo $matrix[3][6] ?>" target="_blank" class="btn btn-primary">
                                        <i class="fas fa-times mr-1"></i>
                                        Adopter
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase"><?php echo $matrix[4][1] ?></h2>
                                    <p class="item-intro text-muted"><?php echo $matrix[4][2] . " / " . $matrix[4][3]?></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/animal.png" alt="" />
                                    <p><?php echo $matrix[4][5] ?></p>
                                    <ul class="list-inline">
                                        <li>&Acirc;ge: <?php echo $matrix[4][4] ?></li>
                                        <li>Courriel: <?php echo $matrix[4][6] ?></li>
                                        <li>Adresse: <?php echo $matrix[4][7] ?></li>
                                        <li>Ville: <?php echo $matrix[4][8] ?></li>
                                        <li>Code postal: <?php echo $matrix[4][9] ?></li>
                                    </ul>
                                    <a href="mailto:<?php echo $matrix[4][6] ?>" target="_blank" class="btn btn-primary">
                                        <i class="fas fa-times mr-1"></i>
                                        Adopter
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
