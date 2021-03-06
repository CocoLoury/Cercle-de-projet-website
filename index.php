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
        <link href="css/main.css" rel="stylesheet" />
        <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet" />
        <link href="css/responsive.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css" />
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
            <section id="presentation" >
                <?php include("views/presentation.html"); ?>
            </section>
            <section id="portfolio" >
                <?php include("views/snapchat.html"); ?>
            </section>
            <section id="visite" class="parallax" >
                <?php include("views/visite.html"); ?>
            </section>
            <section id="evenements">
                <?php include("views/evenements.html"); ?>
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
        <script type="text/javascript" src="js/jquery.inview.min.js"></script>
        <script type="text/javascript" src="js/wow.min.js"></script>
       
        <script type="text/javascript" src="js/jquery.countTo.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
