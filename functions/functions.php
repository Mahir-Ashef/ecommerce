<?php
$con = mysqli_connect("localhost","root","","obosor");

function getPro(){

if(!isset($_GET['cat'])) {
  if(!isset($_GET['brand']))
  global $con;

  $get_pro = "select * from products order by RAND() LIMIT 0,6";

  $run_pro = mysqli_query($con, $get_pro);

  while($row_pro = mysqli_fetch_array($run_pro)){

    $pro_id = $row_pro['product_id'];
    $pro_title = $row_pro['product_title'];
    $pro_writer = $row_pro['product_writer'];
    $pro_cat = $row_pro['product_cat'];
    $pro_price = $row_pro['product_price'];
    $pro_image = $row_pro['product_image'];

    echo "

      <div id='single_product'>

      <img src='admin_area/product_images/$pro_image' width='120' height='150' >
            <p><b>$pro_title</b></p>
            <p id='price'><b> $pro_price Tk. </b></p>

            <a href='details.php?pro_id=$pro_id' style='float:left;'> Details </a>
            <a href='index.php?pro_id=$pro_id'><button style='float:right;'>Add to Cart </button></a>

      </div>

    ";

  }
 }
}

?>
