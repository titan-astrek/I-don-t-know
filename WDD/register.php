<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="velvet.Css">
        <title>Register</title>
    </head>
    <body class="register">
        <div class="box">
            <div class="box1 col-12"><h1>VELVET VOGUE</h1></div>
            <div class="box2 col-12"><h2><a href="WDD.php"> Home</a></h2></div>
            <div class="box3 col-12"><h2><a href="contact.php">📞</a></h2></div>
            <div class="box4 col-12"><h2><a href="products.php">Products</a></h2></div>
            <div class="box5 col-12"><h2><a href="cart.php">🛒</a></h2></div>
            <div class="box6 col-12"><h2><a href="login.php">Login</a></h2></div>
        </div>
        <form class="registering" method="POST" action="register.php">
            <h2>Sign up</h2>
            <input type="text" name="name" placeholder="Full Name">
            <label for="name">Full Name </label>
            <input type="number" name="id" placeholder="ID">
            <label for="id">ID</label>
            <input type="password" name="password" placeholder="Password">
            <label for="password">Password</label>
            <input type="email" name="email" placeholder="E-Mail">
            <label for="email">E-Mail</label>
            <input type="text" name="address" placeholder="Home Address">
            <label for="address">Home Address</label>
            <input type="number" name="pnumber" placeholder="Phone Number">
            <label for="number">Phone Number</label>
            <input type="submit" id="button-reg" value="Sign Up" name="submit">
            <h3>Already have an account? <a class="regi" href="login.php"> Login</a></h3>
        </form>

        <?php
        $host="localhost";
        $user="root";
        $pass="";
        $db="wdd users";

        $conn = mysqli_connect($host,$user,$pass,$db);

        if(!$conn){
            die("Connection failed!:".mysqli_connect_error());
        }
        echo "<br>"."connected succesfully";

        if(isset($_POST['submit'])){
                   
        $Full_Name = $_POST['name'];
        $ID = $_POST['id'];
        $Password = $_POST['password'];
        $E_mail = $_POST['email'];
        $Address = $_POST['address'];
        $Phone_Number = $_POST['pnumber'];

        $sql = "INSERT INTO registration(Full_Name,ID,Password,E_Mail,Address,Phone_Number)
                VALUES ('$Full_Name' , '$ID' , '$Password' , '$E_mail' , '$Address' , '$Phone_Number')";
        if($conn->query($sql)===TRUE){
            echo"<script> alert('Data Added');
            window.location.href = 'register.php';
             </script>";
        }else{
            echo"<script> alert('Accound alrady exisustes!');
            window.location.href = 'register.php';
             </script>";
        }
        }

           

        ?>





    </body>










</html>