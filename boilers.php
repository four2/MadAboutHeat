<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <!-- May not be valid but it works -->
        <title>Mad About Heat -- Multifuel Boilers</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Mad About Heat" />
        <meta name="author" content="Peter Dent" />
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="css/colorbox.css" />
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
    <?php include "_/components/php/boilers_header.php"; ?>
        <article class="doc">
            <section class="container">
                <div class="row">
                    <div class="left_nav col-xs-12 col-sm-3 col-md-3 col-lg-3">
                        <?php include "_/components/php/boilers_left_nav.php"; ?>
                    </div><!--  End Left Nav Div  -->
                    <div id="content" class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                        <div id="wrapper">
                            <?php include "_/components/php/wb/wb5.php"; ?>
                        </div><!--  End Wrapper Div  -->
                    </div><!--  End Content Div  -->
                </div><!--  End Wrapper Div  -->
            </section><!--  End Container Section  -->
            <footer>
                <?php include "_/components/php/footer.php"; ?>
            </footer>
        </article>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <script src="js/jquery.photoset-grid.min.js" type="text/javascript"></script>
        <script src="js/jquery.colorbox.js" type="text/javascript"></script>
        <script src="js/jquery.backstretch.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript">parallax(); navbar_change(); image_top(); photo_grid();</script>
    </body>
</html>