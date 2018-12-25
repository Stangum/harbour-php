<?php 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS\layout1.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="Include\bootstrap-4.2.1-dist\css\bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="Include\bootstrap-4.2.1-dist\css\bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" media="screen" href="Include\bootstrap-4.2.1-dist\css\bootstrap-reboot.css">
    <script src="JS\index.js"></script>
    <script src="Include\bootstrap-4.2.1-dist\js\bootstrap.bundle.js"></script>
    <link rel="stylesheet" type="text/css" href="Include\animate.css">
    <script> 
        function openNav() {
            document.getElementById("myNav").style.width = "100%";
        }
        function closeNav() {
            document.getElementById("myNav").style.width = "0%";
        }
    </script>
</head>
<body>
<div id="myNav" class="overlay animated zoomIn" style="z-index:2;">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                </div>
                <div class="col-sm">
                    <div>
                        <label class="t-mid hb-sign" style="margin-bottom:5%;">
                            Log In 
                        </label>
                    </div>
                    <form class="form-horizontal" action="/action_page.php">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="pwd" placeholder="Password">
                        </div>
                        <div class="form-group"> 
                            <div class="">
                                <button type="submit" class="hb-button btn btn-default">Log In</button>
                            </div>
                        </div>
                       
                    </form>
                    <a href="#" class="tmicro">Forgot Password</a>
                </div>
                <div class="col-sm">
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark " style="z-index:0!important">
<div class="container">
  <a class="navbar-brand title" href="#">
  <img src="Assets\Icons\harbour-logo.png" width="46" height="25" class="d-inline-block align-top" alt="">    
  Harbour</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <ul class="nav navbar navbar-right" id="navbarNavDropdown">
        <li><button class="btn btn-outline-success hb-button my-2 my-sm-0" onclick="openNav()">Log In</button></li>
    </ul>
</div>
</nav>
<div class="banner-cont">
<div class="row">
    <div class="col-sm">
        <h1 class="tbig">Meet Harbour</h1>
        <p class="tsmall">Harbour is an open source web based   E-learning CMS.</p>
        <p class="tmicro">To Use harbour Community Please Sign Up/Login</p>
        <button class=" hb-button2 btn" type="submit">Get Harbour</button>
    </div>
    <div class="col-sm">
    </div>
    <div class="col-sm log-panel">
        <div>
            <label class="t-mid hb-sign">
                Sign Up 
            </label>
        </div>
        <form class="form-horizontal" action="/action_page.php">
            <div class="row">
                <div class="form-group col-sm">
                    <input type="text" class="form-control " id="fname" placeholder="First Name">
                </div>
                <div class="form-group col-sm">
                    <input type="text" class="form-control" id="lname" placeholder="Last Name">
                </div>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="pwd" placeholder="Password">
            </div>
            <div class="form-group"> 
                <div class="">
                    <button type="submit" class="hb-button btn btn-default">Sign Up</button>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>
</body>
</html>
<script>
