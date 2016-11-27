<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="TP1GL">
    <meta name="author" content="BOUDI ABDERRAHIM">

    <title>Geoserv</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body ng-app>

    <!-- import jquery ajax pour la recherche -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.0-rc.2/angular.min.js"></script>


    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
    
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>

                        <a href="#">Acceuil</a>
                    </li>
                    <li>
                        <a href="#">A propos </a>
                    </li>
                    <li>
                        <a href="services.php">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">

                <!-- panneau retour-->
                <a href="services.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Retour</a>
                
            </div>
            <div class="col-md 9">
            <p>DEVIS</p>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped">
            <thead>
              <tr>
                <th>Référence</th>
                <th>désignation</th>
                <th>quantité</th>
                <th>prix HT</th>
                <th>prix TTC</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>REF001</td>
                <td>déplacement</td>
                <td>1</td>
                <td>20</td>
                <td>20</td>

              </tr>
              <tr>
                <td>REF025</td>
                <td>intervention d'urgence sur plomberie</td>
                <td>1</td>
                <td>250,7</td>
                <td>300</td>

              </tr>
              <tr>
                <td>TOTAL</td>
                <td>-</td>
                <td>-</td>
                <td>270,7</td>
                <td>320</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="row">
            <a class="btn btn-default" href="serviceRDV" role="button">Prendre rendez-vous avec ce devis</a>         
        </div>
    </div>

    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; URCA</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
