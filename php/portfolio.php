<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

    <!-- Custom fonts -->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="../css/creative.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/gallery.css">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>

  </head>

  <body id="page-top" ng-app="portApp">

    <?php include('../php/menu.php'); ?>


    <div class="container gallery-container">

        <h1>Portfolilo</h1>

        <p class="page-description text-center"></p>

        <div class="tz-gallery" ng-controller="imgCtrl">

            <div class="row">

                <div class="col-sm-6 col-md-4" ng-repeat="images in port | limitTo:11:0">
                    <div class="thumbnail">{{images.test.name}}
                        <a class="lightbox" href="../images/{{images.test.images}}">
                            <img src="../images/{{images.images}}" alt="Park">
                        </a>
                        <div class="caption">
                            <h3>{{images.name}}</h3>
                            <p>{{images.catagory}}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <h1>Portfolilo</h1>

        <p class="page-description text-center"></p>

        <div class="tz-gallery" ng-controller="imgCtrl">

            <div class="row">

                <div class="col-sm-6 col-md-4" ng-repeat="images in port | limitTo: 4:12">
                    <div class="thumbnail">
                        <a class="lightbox" href="../images/{{images.test2.images}}">
                            <img src="../images/{{images.images}}" alt="Park">
                        </a>
                        <div class="caption">
                            <h3>{{images.name}}</h3>
                            <p>{{images.catagory}}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </div>









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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts -->
    <script src="../js/creative.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/controllers.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>

  </body>

</html>
