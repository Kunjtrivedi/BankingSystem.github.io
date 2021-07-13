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
       /* padding-left: 150px;
        padding-right: 450px;*//* 60px to make the container go all the way to the bottom of the topbar */
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
          <a class="nav-link active" aria-current="page" href="#">Users Account Details</a>
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


  <!-- Table to Display The List Of Customers-->
  <table class="table table-light table-striped table-hover" style="top: 0;">
  <thead>
    <tr class="td">
      <th scope="col">User ID</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Account Number</th>
      <th scope="col">Current Balance</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      
    </tr>
  </thead>
  <tbody>
   
  <?php 
   $conn = mysqli_connect('localhost','root','','banking');
   $query = "SELECT * FROM customers";
  $query_run = mysqli_query($conn,$query);
  while ($cust = mysqli_fetch_array($query_run)) {
    ?>
    <tr class="td">
      <td><?php echo $cust['CustomerID'] ;?></td>
       <td><?php echo $cust['Name'] ;?></td>
       <td><?php echo $cust['email'] ;?></td>
       <td><?php echo $cust['Account_number'] ;?></td>
       <td><?php echo $cust['current_balance'] ;?></td>
       <td><?php echo $cust['mobile_no'] ;?></td>
       <td><?php echo $cust['City'] ;?></td>
       <td><?php echo $cust['State'] ;?></td>
    </tr>
    <?php  
  }
  ?>


</tbody>
</table>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>