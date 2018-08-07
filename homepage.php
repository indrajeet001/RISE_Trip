<?php 
session_start();

$connect= isset($_SESSION['display']) ? $_SESSION['display'] :array();

?>
<html>
<head>
    <meta name="viewport" content="width=deivce-width,initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    </head>
    
    <body>
        <div class="container-fluid">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <!--<nav class="nav navbar-default">!-->
            <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Tour A Trip</a>
                </div>
                <ul class="nav navbar-nav">
                <!--nav nav-pills-->
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="tripregisterform.php">Add Trip</a></li>
                    <li><a href="ourtrip.php">Trip Taken</a></li>
                    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tour Destinations<span class="caret"></span> </a>
                    <ul class="dropdown-menu">
                        <li><a class="japan.php">JAPAN</a></li>
                        <li><a class="goa.php">Goa</a></li>
                        <li><a class="paris.php">Paris</a></li>
                        <li><a class="italy.php">Italy</a></li>
                        <li><a class="australia.php">Australia</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Trip Expanse</a></li>
                    <li><a href="#">NEWS<span class="badge">10</span></a></li>
                    </ul>
                <ul class="nav navbar-nav navbar-right">
                <li><a href="loginform.php"><span class="glyphicon glyphicon-log-out"></span><?php echo $connect['name'];?> Log Out</a></li>
                </ul>
                </div>
            </nav>
            <br><br><br><br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!--indicators-->
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                
                <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                
                <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
                
                <li data-target="#myCarousel" data-slide-to="3" class="active"></li>
                
                <li data-target="#myCarousel" data-slide-to="4" class="active"></li>
            </ol>
            
            <!-- Wrapper for slides-->
            <div class="carousel-inner">
                
            <div class="item active">
            <img src="Img/Kyoto/KyotoJapan%20(1).jpg" alt="Japan" height="500" width="1500">
             </div>
                
                <div class="item">
                <img src="Img/Goa/Goa%201.jpg" alt="Goa" height="500" width="1500">
                </div>
                
                <div class="item">
                <img src="Img/Paris/Paris%20(1).jpg" alt="Paris" height="500" width="1500">
                </div>
                
                <div class="item">
                <img src="Img/Italy/Italy%20(4).jpg" alt="Italy" height="500" width="1500">
                </div>
                
                <div class="item">
                <img src="Img/Australia/Australia%20(4)%20Monaro%20Riverina.jpg" alt="Australia" height="500" width="1500">
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">

                <span class="glyphicon glyphicon-chevron-left"></span>

                <span class="sr-only">Previous</span>

                </a>

                <a class="right carousel-control" href="#myCarousel" data-slide="next">

                <span class="glyphicon glyphicon-chevron-right"></span>

                <span class="sr-only">Next</span>

                </a>

            </div>
            </div>
        </div>
    </body>
    </html>