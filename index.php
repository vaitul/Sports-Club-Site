<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jayate Sports Club</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"> 
    <link rel="stylesheet" href="assets/js/JQueryUi/jquery-ui.css">
    <link rel="stylesheet" href="assets/js/jquery-ui.structure.css">
    <link rel="stylesheet" href="assets/js/jquery-ui.theme.css">

    <script src="assets/js/JQueryUi/jquery-ui.js"></script>
    
    <link rel="stylesheet" href="assets/css/index-style.css">
    <link rel="stylesheet" href="assets/css/pages-style.css">
    <script src="assets/js/index-script.js"></script>
</head>
<body>
    <div id="main-page">
        <div id="nav-bar">
            <img id="sec-logo" src="assets/images/logo.jpg" alt="Jayate Sport Club">
            <h1 id="head-text">Vaitul Da Sports Club</h1>
            <div id="menu">
                <ul>
                <center>
                    <li class="menu-item menu-state-active">The Club</li>
                    <li class="menu-item">Media Gallery</li>
                    <li class="menu-item">Facilities</li>
                    <li class="menu-item">Contact Us</li>
                    <li class="menu-item">About Us</li>
                </center>
                </ul>
            </div>
            <div id="menubar">
                <i class="fa fa-chevron-down"></i>
            </div>
        </div>
        <div id="loader" style="display:none;">
            <center>
            <br><br><br><br>
                <img src="assets/images/loader.gif" width="100px" alt="Loading">
            </center>      
        </div>
        <div class="row">
            <div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
        </div>
    </div>
    <footer>
        <center> &copy; ALL RIGHTS RESERVED BY <b>JAYATE SPORTS CLUB RAJKOT</b>; &nbsp; Developed By Vaitul :)</center>
    </footer>
</body>
</html>
<?php
    if(isset($_GET['scrl']))
    {
        if($_GET['scrl']=='yes')
        {
            echo " <script>
            if($(document).width()>767)
            {
                var tid = setInterval( function () {
                    if ( document.readyState !== 'complete' ) return;
                    clearInterval( tid );       
                    var el = document.querySelector('html');            
                    el.scrollTop = 300; 
                }, 100 );
            }
            </script> ";

        }
    }
?>