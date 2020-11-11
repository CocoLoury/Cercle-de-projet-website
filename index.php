<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bob | Mascotte G4</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/animate.min.css" rel="stylesheet" />
        <link href="css/font-awesome.min.css" rel="stylesheet" />
        <link href="css/lightbox.css" rel="stylesheet" />
        <link href="css/main.css" rel="stylesheet" />
        <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet" />
        <link href="css/responsive.css" rel="stylesheet" />
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="images/favicon.ico" />
    </head>

    <body>
        <header id="home">
            <?php include("partials/header.html"); ?>
        </header>
        <nav>
            <?php include("partials/nav.html"); ?>
        </nav>
        <main>         
            <section id="about-us" class="parallax">
                <?php include("views/about-us.html"); ?>
            </section>
            <section id="team">
                <?php include("views/team.html"); ?>
            </section>
        </main>
        <footer id="footer">
            <?php include("partials/footer.html"); ?>
        </footer>

        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript" src="js/jquery.inview.min.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
        <script type="text/javascript" src="js/mousescroll.js"></script>
        <script type="text/javascript" src="js/smoothscroll.js"></script>
        <script type="text/javascript" src="js/jquery.countTo.js"></script>
        <script type="text/javascript" src="js/lightbox.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>