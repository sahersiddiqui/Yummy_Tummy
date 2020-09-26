<?php
include_once('./processes/connection.php');
?>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="icon" href="./assets/images/logo.png" />
    <link rel="stylesheet" href="./assets/css/index.css" type="text/css" />
    <link href="./assets/css/login.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="./assets/css/feedbackcss.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/contntindex.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title> :: Welcome To Yummy Tummy ::</title>
</head>

<body id="body">
    <div id="outer">
        <div id="header">
            <div id="left">
                <img src="./assets/images/logo.png" height="100px" width="100px" align="center" />
            </div>
            <div id="center">
                <p>
                    Yummy Tummy
                </p>
            </div>
            <div id="right">
                <div id="up_right">

                    <h2>Call Us :</h2>
                    <i class="fa fa-phone-square" style="color:gray; font-size: 25px; padding: 8px; margin-left: -5%;"> 0522-236478</i>
                    <input id="Lgn" type="button" style="width: 130px; cursor: hand;" onclick="show(this.id)" value="Log In/Sign Up" />

                </div>
                <div id="down_right">
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