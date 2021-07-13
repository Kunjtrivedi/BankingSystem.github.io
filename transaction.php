<?php include 'connection.php';?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <!-- bootstrap css link-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- Project CSS file-->
	<link rel="stylesheet" type="text/css" href="homepage.css">
	<title>Customers List</title>
</head>
<body>

	<link href="css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 70px; 
        padding-left: 450px;
        padding-right: 450px;/* 60px to make the container go all the way to the bottom of the topbar */
         background-image: url('images/bank3.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
    </style>
<link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #D8DCD9;">
  <div class="container-fluid">
    <a class="navbar-brand" style="font-weight: bold;">
      <img src="images/logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
      The Sparks Foundation
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="homepage.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="customers.php">View Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="users.php">Users Account Details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transferlist.php">Transfer Details</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="money.php">Transfer Money</a>
        </li>
      </ul>
    </div>
  </div>
</nav>




<?php
$factid = $_REQUEST["cust"]; 
 $query = "SELECT * FROM customers where CustomerID=$factid";
  $query_run = mysqli_query($con,$query);
  while ($cust = mysqli_fetch_array($query_run)) {
     ?>
     
     <div class="class">
     <div class="card">
  <div class="card-body">
    <blockquote class="blockquote mb-0">
       <p>NAME:- <?php echo $cust['Name']; ?></p>
      <p>Email ID:- <?php echo $cust['email']; ?></p>
      <p>MOBILE NUMBER:- <?php echo $cust['mobile_no']; ?></p>
      <p>ACCOUNT NUMBER:- <?php echo $cust['Account_number']; ?></p>
      <p>CURRENT BALANCE:- <?php echo $cust['current_balance']; ?></p>
      <p>CITY:- <?php echo $cust['City']; ?></p>
      <p>STATE:- <?php echo $cust['State']; ?></p>
      <p>COUNTRY:- <?php echo $cust['Country']; ?></p>
      <a type="button" class=" btn btn-primary btn-lg text-center" href="transfer.php?customername=<?php echo $cust['Name']?>&customerbalance=<?php echo $cust['current_balance']?>">Transfer to</a>
    <!--<footer class="blockquote-footer">Rating Given By User is<?php echo $rating ?> <cite title="Source Title">Source Title</cite></footer>-->
    </blockquote>
  </div>
</div>
</div>

   <?php
}
 ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>