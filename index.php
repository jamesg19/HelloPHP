<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HELLO MARS</title>
        <!-- CSS only -->

        <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
        <link rel="stylesheet" href="resources/fonts/ionicons.min.css">
        <link rel="stylesheet" href="resources/css/gradient-navbar-1.css">
        <link rel="stylesheet" href="resources/css/gradient-navbar.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">

    </head>
    <body>
        <nav class="navbar navbar-dark navbar-expand-md" id="app-navbar">
            <div class="container-fluid"><a class="navbar-brand" href="#"><i class="icon ion-ios-infinite" id="brand-logo"></i></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link active" href="https://srlabs.a2hosted.com/rs-humhub/index.php?r=dashboard%2Fdashboard">Sr_labs</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://classroom.google.com/u/0/c/MzcxMTAzNzA0NjM1">TS Classroom</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://classroom.google.com/u/0/c/MzcxMTAzNzA0NjQy">Lab TS Classroom</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <form align="center" action="validar.php" method="post" target="ventana" >
            <br><!-- <br> -->
            <br><!-- comment -->
            <?php
            echo "Welcome to my first app in PHP"
            ?>
            
            <h3>Enter your information for to greet you</h3>
            
                <div class="row">
                     <div class="col"></div>
                    <div class="col">
                        <input type="text" name="firstname" required class="form-control" placeholder="First name">
                    </div>
                    <div class="col">
                        <input type="text" name="lastname" required class="form-control" placeholder="Last name">
                    </div>
                      <div class="col"></div>
                </div>
            
            <br><!-- comment -->
            <br>
            <input type="submit" name="boton1" value="Request greet :)" class="btn btn-warning">
            
            <br><!-- comment -->
            <br>
            <iframe name="ventana" src="/validar.php"></iframe>
        </form><!-- comment -->


    </body>
</html>
