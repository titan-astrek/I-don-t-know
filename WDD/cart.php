       <link rel="stylesheet" href="WDD.Css">
   <div class="box">
        <div class="box1 col-12"><h1>VELVET VOGUE</h1></div>
        <div class="box2 col-12"><h2><a href="WDD.php"> Home</a></h2></div>
        <div class="box3 col-12"><h2><a href="contact.php">📞</a></h2></div>
        <div class="box4 col-12"><h2><a href="products.php">Products</a></h2></div>
        <div class="box5 col-12"><h2><a href="cart.php">🛒</a></h2></div>
        <div class="box6 col-12"><h2><a href="login.php">Login</a></h2></div>
    </div>

    <?php
$conn = new mysqli("localhost","root","","wdd users");
if($conn->connect_error) die("DB Error");
if(isset($_GET['remove'])){
  $rid = (int)$_GET['remove'];
  $conn->query("DELETE FROM cart WHERE id=$rid");
  header("Location: cart.php");
  exit;
}

$result = $conn->query("SELECT * FROM cart ORDER BY id DESC");
$total = 0;
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="Wdd.css">
  <title>Cart</title>
  <style>
    .cart-wrap{max-width:900px;margin:30px auto;background:#fff;padding:20px;border-radius:10px;}
    .cart-item{display:flex;gap:15px;align-items:center;border-bottom:1px solid #ddd;padding:12px 0;}
    .cart-item img{width:70px;height:70px;object-fit:cover;border-radius:10px;}
    .cart-info{flex:1;}
    .cart-price{font-weight:bold;}
    .remove-btn{background:#c0392b;color:#fff;padding:8px 12px;border-radius:6px;text-decoration:none;}
    .total{font-size:18px;font-weight:bold;text-align:right;margin-top:15px;}
  </style>
</head>
<body class="product">



  <div class="cart-wrap">
    <h2>My Cart</h2>

    <?php if($result->num_rows == 0): ?>
      <p>Your cart is empty.</p>
    <?php else: ?>
      <?php while($row = $result->fetch_assoc()): 
        $sub = (int)$row['Price'] * (int)$row['Qty'];
        $total += $sub;
      ?>
        <div class="cart-item">
          <img src="<?php echo htmlspecialchars($row['Image']); ?>" alt="">
          <div class="cart-info">
            <div><b><?php echo htmlspecialchars($row['Name']); ?></b></div>
            <div>Size: <?php echo htmlspecialchars($row['Size']); ?></div>
            <div>Qty: <?php echo (int)$row['Qty']; ?></div>
          </div>
          <div class="cart-price">Rs. <?php echo $sub; ?></div>
          <a class="remove-btn" href="cart.php?remove=<?php echo (int)$row['ID']; ?>">Remove</a>
        </div>
      <?php endwhile; ?>

      <div class="total">Total: Rs. <?php echo $total; ?></div>
    <?php endif; ?>
  </div>

</body>
</html>

  </div>

</body>
</html>
