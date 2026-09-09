<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Wdd.css">
        <title>Products</title>
    </head>
    <body class="product">
    <div class="box">
        <div class="box1 col-12"><h1>VELVET VOGUE</h1></div>
        <div class="box2 col-12"><h2><a href="WDD.php"> Home</a></h2></div>
        <div class="box3 col-12"><h2><a href="contact.php">📞</a></h2></div>
        <div class="box4 col-12"><h2><a href="products.php">Products</a></h2></div>
        <div class="box5 col-12"><h2><a href="cart.php">🛒</a></h2></div>
        <div class="box6 col-12"><h2><a href="login.php">Login</a></h2></div>
    </div>

<img id="womend1" src="wd1.jpg">
<img id="womend2" src="wd2.jpg">
<img id="womend3" src="wd3.jpg">
<img id="womend4" src="wd4.jpg">
<img id="womend5" src="wd5.jpg">

<div id="popup" style="display:none; position:fixed; left:0; top:0;
width:100%; height:100%; background:rgba(0,0,0,0.7);">

  <div style="background:white; width:330px; margin:80px auto; padding:20px; border-radius:10px;">
    
    <span onclick="closePopup()" style="float:right; font-size:22px; cursor:pointer;">X</span>

    <img id="pimg" src="" width="100%">
    <h3 id="pname"></h3>
    <p id="pprice"></p>

    <form action="addcart.php" method="POST">
        <input type="hidden" name="name" id="formName">
        <input type="hidden" name="price" id="formPrice">
        <input type="hidden" name="image" id="formImg">

        <label>Size</label>
        <select name="size" required>
          <option value="">Select size</option>
          <option>S</option>
          <option>M</option>
          <option>L</option>
          <option>XL</option>
        </select>

        <label>Quantity</label>
        <input type="number" name="qty" value="1" min="1">

        <button type="submit">Add to Cart</button>
    </form>

  </div>
</div>

<script>
function openPopup(name,price,img){
  document.getElementById("popup").style.display="block";

  document.getElementById("pimg").src = img;
  document.getElementById("pname").innerText = name;
  document.getElementById("pprice").innerText = price;

  document.getElementById("formName").value = name;
  document.getElementById("formPrice").value = price;
  document.getElementById("formImg").value = img;
}

function closePopup(){
  document.getElementById("popup").style.display="none";
}
document.getElementById("womend1").onclick = () => openPopup("Red Dress",2500,"wd1.jpg");
document.getElementById("womend2").onclick = () => openPopup("Black Dress",3000,"wd2.jpg");
document.getElementById("womend3").onclick = () => openPopup("Blue Dress",2800,"wd3.jpg");
document.getElementById("womend4").onclick = () => openPopup("Green Dress",2600,"wd4.jpg");
document.getElementById("womend5").onclick = () => openPopup("White Dress",3500,"wd5.jpg");
</script>









    </body>
</html>