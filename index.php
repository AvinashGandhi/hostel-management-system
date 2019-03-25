<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="style.css">
    
  
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">student checkin</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">student checkout</a>
      </li>
     
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="hostel2.png" class="d-block w-100" alt="image">
    </div>
    <div class="carousel-item">
      <img src="hostel1.png" class="d-block w-100" alt="image">
    </div>
    <div class="carousel-item">
      <img src="hostel3.png" class="d-block w-100" alt="image">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container" align="center">
	<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 offset-md-4">
            <h1 class="text-center login-title">Register</h1>
            <div class="account-wall">
                <img class="profile-img" src="user.png"
                    alt="">
                <form class="form-signin" method="POST" action="">
                <input type="text" name="name"  class="form-control" placeholder="Name" required>
                <input type="email" name="email"  class="form-control" placeholder="Email" required>
                <input type="text" name="phone_no"  class="form-control" placeholder="Phone no" required>
                <input type="text" name="address"  class="form-control" placeholder="Address" required>
                <input type="password"  name="password" class="form-control" placeholder="Password" required>
                <button name="submit" class="btn btn-lg btn-primary btn-block" type="submit">
                    Register</button>
                
                </form>
            </div>
            <a href="index.php" class="text-center new-account">Login Here ! </a>
        </div>
    </div>
</div>
	

</div>

<footer>
  <div class="footer">
  <div  align="center" >
    <p id="foot">© 2019<strong> AVINASH GANDHI</strong></p>
   <a href="https://www.facebook.com/avinash.gandhi.12"> <button class="btn btn-primary" type="button"><strong class="fa fa-facebook-official"></strong></button></a>
    <button class="btn btn-default" type="button"><strong class="fa fa-whatsapp" style="color: white;"></strong></button>
      
        
    
  
  </div>
  <div align="center">
    
  </div>
</div>
</footer>

<?php

require "config/db.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone_no = $_POST['phone_no'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = md5($_POST['password']);

      $stmt = $conn->prepare("SELECT * FROM user WHERE email = :email");
    $stmt->execute([':email' => $email]);

    
    if($stmt->rowCount() == 1){
        
        echo "<div class='mt20 alert alert-danger'>Email ID exists !</div>";
    
    }else{
        $stmt = $conn->prepare("INSERT INTO user VALUES (:id,:name,:email,:user_img, :phone_no,:address, :password, :signup_date)");
        
        $stmt->execute([':id' => NULL,':name' => $name,':email' => $email,':password' => $password, ':phone_no' => $phone_no,':address' => $address,':user_img' => 'img/user.png',':signup_date' => date('Y-m-d h:i:sa')]);

        if($stmt->rowCount() == 1){
            
            echo "<div class='mt20 alert alert-success'>Registration Successful :)</div>";
        }else{
            echo "<div class='mt20 alert alert-danger'>Failed :(</div>";
        }
    }
}
?>


    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>