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
   <?php 
include('header.php')
    ?>

 

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">

            	<!-- panneau services-->
                <H3 class="lead">Professionels:</H3> 

                <div class="form-group">
					
                    <div class="ratings">
                            <label for="text">Date début:</label>

                             <input type="date" class="form-control wpcf7-text"  placeholder="Choisir date">
                               <label for="text">Date fin:</label>
                               <input type="date" class="form-control wpcf7-text"  placeholder="Choisir date">
                               
                            </div>
						
						<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
						<br>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp        
                         
						 <input type="submit" id="fil_pro" name="envoyer" value="OK">
						
				</div>
				

				<!-- liste des services pour la recherche en dur           -->
<H3 class="lead">Similaire</H3> 
				<div ng-init="services=[{servicename:'Plomberie', content:'Intervention d\'un plombier', localisation:'32 rue sébastopolis 51100 Reims',id:'1'},{servicename:'Traiteur', content:'commande de nourriture', localisation:'7 rue des moulinettes 51100 Reims',id:'2'},
			    {servicename:'service 3', content:'le troisième service', localisation:'paris', id:'3'}]">
			    	
			    	<div class="list-group" id="listeServices" ng-repeat="service in services | filter : {servicename:query}">

	                    <a id = "{{service.id}}" href="#" class="list-group-item">{{service.servicename|uppercase}}</a>
                   
	                    	                     
                	</div>
			    </div>
                
            </div>

<?php
if(empty($_POST['envoyer'])) {
    

?>
            <div class="col-md-9">
                <div class="row">

                    <div id='pro1' class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="" alt="">
                            <div class="caption" id ="sous-service1">
                                
								<h4 class="pull-right">24.99 €</h4>
                                <h4><a href="serviceEnLigne.php">professionnel 1</a>
                                </h4>
								
                                <p>32 rue sébastopolis 51100 Reims</p>
                                <p>Devis en ligne</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 vues</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    
                                
								</p>
								<input type="radio" name="1" value="oui" id="oui"  checked="checked" />
                            </div>
                        </div>
                    </div>

                   <div id='pro2' class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="" alt="">
                            <div class="caption" id="sous-service2">
                                <h4 class="pull-right">24.99 €</h4>
                                <h4><a href="serviceRDV.php">professionnel 2</a>
                                </h4>
                                <p>7 rue des moulinettes 51100 Reims</p>
                                  <p>Devis sur rendez-vous</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 vues</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
								<input type="radio" name="1" value="oui" id="oui"  checked="checked" />
                            </div>
                        </div>
						
                    </div>
<?php	}else { ?>     <div id='pro2' class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="" alt="">
                            <div class="caption" id="sous-service2">
                                <h4 class="pull-right">24.99 €</h4>
                                <h4><a href="serviceRDV.php">professionnel dispo</a>
                                </h4>
                                <p>7 rue des moulinettes 51100 Reims</p>
                                  <p>Devis sur rendez-vous</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 vues</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                
								</p>
								<input type="radio" name="1" value="oui" id="oui"  checked="checked" />
                            </div>
                        </div>
                    </div> 
					
					<?php	} ?> 
                    
                     <!-- affichage des services de la catégorie par animation -->
					<script type="text/javascript">

						function affichagePros(id) {
							for (var i = 1;i<3;i++){
								if (i != id){
									document.getElementById("pro"+i).style.display = 'none';
								}
							}
							document.getElementById("id").style.display = 'block';
						}

					</script>

                </div>
                                 
					<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
						<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp		
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	
                         
						 <input type="submit" id="fil_pro"  name="envoyer" value="suivant"> </form>	
				
            </div>

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
