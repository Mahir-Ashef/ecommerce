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

      <img id="logo" src="images/logo.png" alt="The logo">

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


      <?php
      if(isset($_GET['pro_id'])){

        $product_id = $_GET['pro_id'];

      $get_pro = "select * from products where product_id = '$product_id'";

      $run_pro = mysqli_query($con, $get_pro);

      while($row_pro = mysqli_fetch_array($run_pro)){

        $pro_id = $row_pro['product_id'];
        $pro_title = $row_pro['product_title'];
        $pro_writer = $row_pro['product_writer'];
        $pro_cat = $row_pro['product_cat'];
        $pro_price = $row_pro['product_price'];
        $pro_image = $row_pro['product_image'];
        $product_desc = $row_pro['product_desc'];

        echo "

          <div id='single_product_desc'>

          <img src='admin_area/product_images/$pro_image' width='240' height='300' >
                <p><b>$pro_title</b></p>
                <p><b>$pro_writer</b></p>
                <p id='price'><b> $pro_price Tk. </b></p>

                <p>$product_desc </p>


                <a href='index.php?pro_id=$pro_id' style='float:left;'> Go Back </a>
                <a href='index.php?pro_id=$pro_id'><button style='float:right;'>Add to Cart </button></a>

          </div>

        ";

      }
    }
      ?>

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
