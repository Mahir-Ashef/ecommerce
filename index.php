<!DOCTYPE html>
<?php

include("functions/functions.php");

 ?>
<html>
  <head>
    <title>Obosor Books</title>
    <link rel="stylesheet" href="styles/style.css" media="all">
  </head>
  <body>

    <div class="main_wrapper">

    <header class="header_wrapper">

      <img id="logo" src="images/web1.jpg" alt="The logo">
      <img id="logo" src="images/web2.jpg" alt="The logo">

    </header>

    <form id="form" method="get" action="results.php" enctype="multipart/form-data">
      <input type="text" name="user_query" placeholder="Search a book">
      <input type="submit" name="search" value="search">
    </form>
                                                                 <!--- Menu bar starts-->
    <nav id="menu">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Request a book</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>



    </nav>                                                                     <!--- Menu bar ends-->

<div class="content_wrapper">

  <div class="content_area">

    <div id="shopping_cart">
      <span style="float:right"> Welcome Guest! <b style="color:yellow"> Shopping Cart </b> Total Items: Total Price: <a href="cart.php" style="color:yellow">go to cart </a>

      </span>
    </div>


    <div id="products_box">
      <?php getPro() ?>
    </div>
  </div>

    <div id="sidebar">

      <div id="sidebar_title"> Academic </div>

      <ul id="cats">

        <li><a href="#">Engineering</a></li>
        <li><a href="#">Accounting</a></li>
        <li><a href="#">Management</a></li>
        <li><a href="#">English</a></li>
        <li><a href="#">Physics</a></li>
        <li><a href="#">Chemistry</a></li>

      </ul>

      <div id="sidebar_title"> Non-Academic </div>

      <ul id="cats">
        <li><a href="#">Fiction</a></li>
        <li><a href="#">Non-Fiction</a></li>
        <li><a href="#">Poetry</a></li>
        <li><a href="#">Originals</a></li>
      </ul>

    </div>



  </div>

    <footer>
Developed by IQbator
    </footer>


    </div>

    </body>
</html>
