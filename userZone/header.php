<?php
include_once('./processes/connection.php');
?>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="./assets/images/logo.png" />
    <link rel="stylesheet" type="text/css" href="./assets/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/index.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/login.css" />
    <link rel="stylesheet" href="./assets/css/feedbackcss.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/contntindex.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title> :: Welcome To Yummy Tummy ::</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <header>
                    <div class="row">

                        <div  class="col logo_section">
                            <img src="./assets/images/logo.png" height="100px" width="100px" />
                            <h5 class="site_title">
                                Yummy Tummy
                            </h5>
                        </div>
                        <div class="col-9">
                            <div class="row">
                                <div class="col-12 call_info_section">
                                    <span>Call Us : <i class="fa fa-phone-square"> 0522-236478</i></span>
                                    <!-- <input id="Lgn" type="button" style="width: 130px; cursor: hand;" onclick="show(this.id)" value="Log In/Sign Up" /> -->
                                    <button  class="btn btn-primary pull-right" type="button"  data-toggle="modal" data-target="#exampleModal">Log In/Sign Up</button>
                                    <button  class="btn btn-primary pull-right" type="button"  data-toggle="modal" data-target="#exampleModal">Feedback</button>
                                </div>
                                <div class="col-12 nav_bar" >
                                    <ul>
                                        <li onclick="location.href='index.php'">Home</li>
                                        <li onclick="location.href='MealPlan.php'">Meal Plan</li>
                                        <li onclick="location.href='review.php'">Review</li>
                                        <li onclick="location.href='WhyUs.php'">Why Us</li>
                                        <li onclick="location.href='orderNow.php'">Order Now</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>