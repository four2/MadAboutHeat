<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <!-- May not be valid but it works -->
        <title>Mad About Heat -- Contact</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Mad About Heat" />
        <meta name="author" content="Peter Dent" />
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.min.css" />
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        
        <link href="assets/img/favicon.ico" rel="icon" />
        <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
    </head>
    <body>
    <?php include "_/components/php/nav.php"; ?>
    <?php include "_/components/php/contact_header.php"; ?>
        <article class="doc">
            <?php include "_/components/php/contact.php"; ?>
            <footer>
                <?php include "_/components/php/footer.php"; ?>
            </footer>
        </article>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <script src="js/jquery.backstretch.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/gmaps.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript">parallax(); navbar_change(); image_top(); map();</script>
    </body>
</html>