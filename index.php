<?php
session_start()
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Chloé De Azevedo Mendes | Etudiante</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header" class="alt">
        <span class="logo"><img src="images/logo.jpg" alt="" /></span>
        <h1>Chloé De Azevedo Mendes</h1>
        <a href="images/CV-Chloé-De-Azevedo.pdf" target="_blank" class="button">Télécharger mon CV</a>
    </header>

    <!-- Nav -->
    <nav id="nav">
        <ul>
            <li><a href="#intro" class="active">Ma formation</a></li>
            <li><a href="#first">Mes compétences</a></li>
            <li><a href="#second">Mes expériences</a></li>
            <li><a href="#third">Mes centres d'intérêts</a></li>
            <li><a href="#cta">Contact</a></li>
        </ul>
    </nav>

    <!-- Main -->
    <div id="main">

        <!-- Introduction -->
        <section id="intro" class="main">
            <div class="spotlight">
                <div class="content">
                    <header class="major">
                        <h2>Ma formation</h2>
                    </header>
                    <p>Etudiante en 2ème année à ingésup YNOV Lyon. Recherche un stage ou alternance en développement Web.</p>
                    <ul class="actions">
                        <li><a href="https://www.ingesup.com/" target="_blank" class="button">Ingésup.com</a></li>
                    </ul>
                </div>
                <span class="image"><img src="images/ingesup.jpg" alt="" /></span>
            </div>
        </section>

        <!-- First Section -->
        <section id="first" class="main special">
            <header class="major">
                <h2>Mes compétences</h2>
            </header>
            <ul class="statistics">
                <li class="style1">
                    <span class="icon fa-html5"></span>
                    <strong>HTML CSS</strong>
                </li>
                   <li class="style2">
                    <span class="icon fa-code"></span>
                    <strong>JavaScript Java</strong>
                </li>
                <li class="style3">
                    <span class="icon fa-code"></span>
                    <strong>AngularJS NodeJS</strong>
                </li>
                <li class="style4">
                    <span class="icon fa-file-code-o"></span>
                    <strong>C++</strong>
                </li>
                <li class="style5">
                    <span class="icon fa-globe"></span>
                    <strong>Anglais Allemand</strong>
                </li>
               <li class="style1">
                    <span class="icon fa-laptop"></span>
                    <strong>Cordova</strong>
                </li>
            </ul>
        </section>

        <!-- Second Section -->
        <section id="second" class="main special">
            <header class="major">
                <h2>Mes expériences</h2>
            </header>
            <ul class="features">
                <li>
                    <div class="cti">
                        <img src="images/w3+.jpg">
                    </div>
                    <h3>Du 29 mai 2017 au 07 juillet 2017 </h3>
                    <p>W3+ est une Entreprise de Services du Numérique (ESN).
                        Elle se situe en région Auvergne-Rhône-Alpes à proximité de Vichy. J'étais Développeuse d’application mobile sur Android et Iphone. J'ai pu bénéficier d'une formation AgularJS, Json, NodeJS, Cordova et Media Queries. Utilisation de VisualStudio. Un Travail d'équipe très présent.</p>
                </li>
                <li>
                    <div class="cti">
                        <img src="images/walscape.jpg">
                    </div>
                    <h3>De mai 2017 à Aujourd’hui</h3>
                    <p>Wal’Scape Game, une assocation de 4 étudiants, création d'Escape Game Ephémères. Un projet de base créé dans le cadre d'YNOV puis repris personnellement.  Etant Co-présidente, mon rôle est Community manager, j'ai pour but de gérer les réseaux sociaux, de réalisation les logos, la création des énigmes… Représentation réalisées au salon Saint Chamond et dans les locaux d’Ynov Lyon.</p>
                </li>
                <li>
                    <div class="cti">
                        <img src="images/auto-ies.png">
                    </div>
                    <h3>De juillet 2014 à fin août 2014 </h3>
                    <p>Auto-ies est un mandataire automobile. Secteur du commerce. J'étais assistante administrative. Entreprise spécialisée dans la vente de voiture en ligne. Mon rôle etait de remplir des documents de ventes, vérifier des documents officiels, répondre au téléphone.</p>
                </li>
            </ul>
        </section>

          <!-- Third Section -->
        <section id="third" class="main special">
            <header class="major">
                <h2>Mes Centres d'intérêts</h2>
            </header>
            <p>Je suis passionnée de danse. J'ai fait 13 ans de danse classique et moderne. Aujourd'hui, je continue de maintenir physique en faisant du Fitness depuis 3 ans. J'adore jouer aux jeux vidéos les Sims depuis mon plus jeune âge. Lors de mon temps libre, je fais Montages vidéos de mes voyages ou pour des amis, ma famille.</p>
            <div class="cti">
                <img src="images/danse.jpg">
                <img src="images/media.jpg">
                <img src="images/sims4.jpg">
            </div>
        </section>

        <!-- Get Started -->
        <section id="cta" class="main special">
            <header class="major">

                <div class="container-fluid">
                    <div class="row-fluid" >
                        <div class="col-md-offset-4 col-md-4" id="box">
                            <h2>Contact</h2>

                            <?php if(array_key_exists('errors',$_SESSION)): ?>
                                <div class="alert alert-danger">
                                    <?= implode('<br>', $_SESSION['errors']); ?>
                                </div>
                                <?php unset($_SESSION['errors']); endif; ?>
                            <?php if(array_key_exists('success',$_SESSION)): ?>
                                <div class="alert alert-success">
                                    Votre email à bien été transmis !
                                </div>
                                <?php unset($_SESSION['success']); endif; ?>

                            <form class="form-horizontal" action="post_contact.php" method="post" id="contact_form">
                                <fieldset>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input name="name" id="name" placeholder="Nom" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">

                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                                <input name="email" id="email" placeholder="E-Mail" class="form-control" type="text">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Text input-->

                                    <div class="form-group">

                                        <div class="col-md-12 inputGroupContainer">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                                <textarea class="form-control" name="message" id="message" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-warning">Envoyer<span class="glyphicon glyphicon-send"></span></button>
                                        </div>
                                    </div>

                                </fieldset>
                            </form>
                        </div>
                    </div>
            </header>
        </section>

    </div>

    <!-- Footer -->
    <footer id="footer">
        <section>
            <h2>A ecrire</h2>
            <p>A ecrire </p>
            <ul class="actions">
                <li><a href="generic.html" class="button">En apprendre plus</a></li>
            </ul>
        </section>
        <section>
            <h2>Contactez-moi</h2>
            <dl class="alt">
                <dt>Téléphone</dt>
                <dd>0782127280</dd>
                <dt>Email</dt>
                <dd><a href="mailto:cdeazevedome@gmail.com">cdeazevedome@gmail.com</a></dd>
            </dl>
            <ul class="icons">
                <li><a href="https://www.linkedin.com/in/chlo%C3%A9-de-azevedo-mendes-a10b5a127/" class="icon fa-linkedin alt"><span class="label">Linkedin</span></a></li>
                <li><a href="mailto:cdeazevedome@gmail.com" class="icon fa-envelope alt"><span class="label">Mail</span></a></li>
            </ul>
        </section>
        <p class="copyright">&copy; Chloé De Azevedo Mendes. Tous droits réservés</p>
    </footer>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>
