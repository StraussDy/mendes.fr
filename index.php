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
                    <p><p>Etudiante en 2ème année à ingésup YNOV Lyon. Recherche un stage ou alternance en développement Web.</p></p>
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
                    <span class="icon fa-code-fork"></span>
                    <strong>5,120</strong> Etiam
                </li>
                <li class="style2">
                    <span class="icon fa-folder-open-o"></span>
                    <strong>8,192</strong> Magna
                </li>
                <li class="style3">
                    <span class="icon fa-signal"></span>
                    <strong>2,048</strong> Tempus
                </li>
                <li class="style4">
                    <span class="icon fa-laptop"></span>
                    <strong>4,096</strong> Aliquam
                </li>
                <li class="style5">
                    <span class="icon fa-diamond"></span>
                    <strong>1,024</strong> Nullam
                </li>
            </ul>
        </section>

        <!-- Second Section -->
        <section id="second" class="main special">
            <header class="major">
                <h2>Mes expériences</h2>
                <p>Donec imperdiet consequat consequat. Suspendisse feugiat congue<br />
                    posuere. Nulla massa urna, fermentum eget quam aliquet.</p>
            </header>
            <ul class="features">
                <li>
                    <span class="icon major style1 fa-code"></span>
                    <h3>Ipsum consequat</h3>
                    <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
                </li>
                <li>
                    <span class="icon major style3 fa-copy"></span>
                    <h3>Amed sed feugiat</h3>
                    <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
                </li>
                <li>
                    <span class="icon major style5 fa-diamond"></span>
                    <h3>Dolor nullam</h3>
                    <p>Sed lorem amet ipsum dolor et amet nullam consequat a feugiat consequat tempus veroeros sed consequat.</p>
                </li>
            </ul>
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
            <h2>Aliquam sed mauris</h2>
            <p>Sed lorem ipsum dolor sit amet et nullam consequat feugiat consequat magna adipiscing tempus etiam dolore veroeros. eget dapibus mauris. Cras aliquet, nisl ut viverra sollicitudin, ligula erat egestas velit, vitae tincidunt odio.</p>
            <ul class="actions">
                <li><a href="generic.html" class="button">Learn More</a></li>
            </ul>
        </section>
        <section>
            <h2>Contactez-moi</h2>
            <dl class="alt">
                <dt>Téléphone</dt>
                <dd>0606060606</dd>
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
