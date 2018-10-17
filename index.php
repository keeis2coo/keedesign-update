<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="css/creative.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>

  </head>

  <body id="page-top" ng-app="portApp">

    <?php include('php/menu.php'); ?>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong></strong>
            </h1>
            <img src="images/logo-2.png" class="img-fluid">
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">In life you need to stay true to you, do what you love. <br> code is life. --Kee</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <div class="col-md-6 about"><h2 class="section-heading text-white">Who Am I?</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4"><p>Kenita Jarrett, pronounced like Kenitha, but since most find that to hard I also go by <b>Kee</b> lol. I’m a front-end web developer (working on becoming a Full Stack Developer) with just over two years of professional experience (over five freelancing) in the web industry. </p>
            <p>In the mist of becoming a developer (obviously you need to have an eye for design) I began to design posters, flyers, and tshirs, now I also screen print t-shirts creating a compay called F.I.T. Prints with my wonderful sister.
                <br><br>I also love working with kids, which I have been doing for the past eight years!</p>
                <p>You can view some of my screen prints here!</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#portfolio">See Print Work!</a>
          </div>
            <div class="col-md-5 cirDiv"> <img src="images/me.jpg" class="img-fluid circleImg"> </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-dark text-white" id="skills">
      <?php include("php/skills.php"); ?>
    </section>

    <section id="services">
      <?php include('php/services.php'); ?>
    </section>

    <section class="bg-primary" id="work">
      <?php include('php/relevant-work.php'); ?>
    </section>


    <section class="p-0" id="portfolio" ng-controller="portCtrl">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6 portImg" ng-repeat="portfolio in port | limitTo:6">
            <a class="portfolio-box" href="images/{{portfolio.images}}">
              <img class="img-fluid" src="images/{{portfolio.images}}" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    {{portfolio.category}}
                  </div>
                  <div class="project-name">
                    {{portfolio.name}}
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="bg-dark text-white more"><p> Want to see more design work? No worries check out my full portfolio <a href="php/portfolio.php">here</a> </p></div>
      </div>
    </section>


    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">Ready to start your next project with me? That's great! Send me an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p>816-810-8162</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="mailto:kjarr88@gmail.com">kjarr88@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts -->
    <script src="js/creative.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/controllers.js"></script>

  </body>

</html>
