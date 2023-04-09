<?php
session_start(); 
include('../../Model/model.php');
if(empty($_SESSION["adminuserid"]))
{
header("Location: ../../Login/View/adminlogin.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Molla's Book Gallery</title>
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="../Style/style.css">
    </head>
    <body>
    <header class="header">
        <div class="header-1">
        <a href="#" class="logo"> <i><img src="../../../Logo/logo.png"></i> </a>
        </div>
    </header>
    <hr class="line"></hr>
    <div class="sidebar">
        <a class="active" href="#profile">Profile</a>
        <a href="#news">Update Profile</a>
        <a href="#news">Buy Books</a>
        <a href="#contact">Cart</a>
        <a class="logout" href="../../Logout/logout.php">logout</a>
    </div>
    <div class="panel">
        <h2>Profile Dashboard</h2>
        
        
        <h5> Hi <p class ="font"></p></h5><br><br><br>
        <h7 class ="font1">E-mail: </h7><br>
        <h7 class ="font1">Gender: </h7><br>
        <h7 class ="font1">Location: </h7><br>
    </div>
    </body>
</html>
