<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="../img/th(1).jpg" />
        <title>Toy House</title>


    </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">

        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
      
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
     
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Kiddie Kingdom</h1>
                       <p>Flat 10% OFF on all exciting toys.</p>
                       <a href="products.php" class="btn btn-danger">Toytopia</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                                <img src="img/toy1.jpg" alt="Toy 1">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Hot wheels</p>
                                        <p>Discover the fun with our exciting new Hotwheels.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/toy2.jpg" alt="Toy 2">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Miniso</p>
                                    <p>Enjoy endless playtime with plushies.</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/toy3.jpg" alt="Toy 3">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Marvel</p>
                                   <p>Our exquisite collection of Action figures of Marvel.</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
            <footer class="footer"> 
               <div class="container">
               <center>
                   <p>This website is developed by Kritika Gupta</p>
                   <p>Roll no.-221030038</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>
