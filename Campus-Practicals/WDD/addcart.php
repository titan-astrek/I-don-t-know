<?php
$conn = new mysqli("localhost","root","","wdd users");
if($conn->connect_error) die("DB Error");

$name  = $_POST['name']  ?? '';
$price = (int)($_POST['price'] ?? 0);
$image = $_POST['image'] ?? '';
$size  = $_POST['size']  ?? '';
$qty   = (int)($_POST['qty'] ?? 1);

if($name=='' || $price<=0 || $image=='' || $size=='' || $qty<1){
  die("Invalid data");
}

$sql = "INSERT INTO cart(Name,price,image,size,qty)
        VALUES('$name','$price','$image','$size','$qty')";

if($conn->query($sql)){
  echo "<script>alert('Added to cart'); window.location='cart.php';</script>";
} else {
  echo "DB Error: " . $conn->error;
}
