<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />  
        <!-- May not be valid but it works -->
        <title>Mad About Heat -- Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="A very good admin theme" />
        <meta name="author" content="AHthemes" />
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="css/flexslider.css" />
        <link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.min.css" />
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/parallaxslider.css" />
        
        <link href="assets/img/favicon.ico" rel="icon" />
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
    </head>
    <body>
    <?php include "_/components/php/nav.php"; ?>
    <?php include "_/components/php/top_parallax_home.php"; ?>
        <article class="large-doc">
            <?php include "_/components/php/home_page.php"; ?>
            <footer>
                <?php include "_/components/php/footer.php"; ?>
            </footer>
        </article>
        <!--/.doc-->
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <script src="js/jquery.flexslider-min.js" type="text/javascript"></script>
        <script src="js/jquery.backstretch.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript">parallax(); large_navbar_change(); large_slider_top(); parallax_slider(); clients(); portfolio_effects();</script>
    </body>
</html>