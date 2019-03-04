<?php
    if(isset($_POST['getMenu']))
    {
        if($_POST['getMenu'] =="theClub") include_once("pages/theclub.php");
        //if($_POST['getMenu'] =="mediaGallery") include_once("pages/mediagallery.php");
        if($_POST['getMenu'] =="facilities") include_once("pages/facilities.php"); 
        if($_POST['getMenu'] =="contactUs") include_once("pages/contactus.php"); 
        if($_POST['getMenu'] =="aboutus") include_once("pages/aboutus.php"); 
    }
?>