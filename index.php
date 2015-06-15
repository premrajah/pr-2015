<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Prem Rajah</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicons -->
        <?php include 'favicon.php'; ?>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
            <img alt="Prem Rajah" class="img-responsive brand-img" src="img/logo-40.png">
          </a>

          <!-- <a class="navbar-brand" href="#">Prem Rajah</a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav" id="top-nav">
            <li class="home-btn"><a href="#">Home</a></li>
            <li><a href="#section-1">About</a></li>
            <li><a href="#section-2">Portfolio</a></li>
            <li><a href="#section-3">Resume</a></li>
            <li><a href="#section-4">Links</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    
    
    <!-- Home Area -->
    <?php include 'home.php'; ?>




     <!-- container -->
    <div class="container">
          

      <!-- About Area -->
      <?php include 'about.php' ?>  
            

      <!-- Portfolio Area -->
      <?php include 'portfolio.php' ?>  
            

      <!-- Resume Area -->
      <?php include 'resume.php' ?>


      <!-- Links -->
      <?php include 'links.php' ?>


      <!-- Footer Area -->
      <?php include 'footer.php' ?>
      


    </div> 
    <!-- end container -->        


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        
        
        <!-- page scrolling -->
        <script>
             $('#top-nav').onePageNav({
                 currentClass: 'active',
                 changeHash: true,
                 scrollSpeed: 1200
            });
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

        

        <!-- for SlipHover gallery -->
        <script src="js/jquery.sliphover.min.js"></script>

        

        <!-- My Script -->
        <script src="js/main.js"></script>

    </body>
</html>
