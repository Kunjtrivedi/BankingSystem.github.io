<?php include 'connect.php';?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <!-- bootstrap css link-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

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

	
      <!--   <div class="card">
  <div class="card-body">
    <blockquote class="blockquote mb-0">
        <form action="connect.php" method="post">
            <p><input type="text" name="recieverName"></p>
            <p> <input type="text" name="amount"></p>
            <p><input type="datetime-local" name="day"></p>
            <p><input type="hidden" id="customername" name="customername"></p>
            <p><input type="hidden" id="customerac" name="customerac"></p>
            <p><input type="hidden" id="customerbalance" name="customerbalance"></p>
            <p><button type="submit" name="save" class="btn btn-primary">Done</button></p>
        </form>
    </blockquote>
  </div>
</div> -->

   <div>
      <div>
        <form action="connect.php" method="post" enctype="multipart/form-data" style="background-color: #FFFFFF" >
          <h3>SELECT CUSTOMER TO TRANSFER</h3><br>
          <!-- SUbject SELECTION OPTIONS-->
 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">SENDER NAME</label>
  </div>
  <input type="text" id="sender">
</div>
 <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">TRANSFER TO</label>
  </div>
  <select class="custom-select" type="input" name="recieverName" id="validationServer04" required> 
    <option selected disabled value="">----Select CUSTOMER-----</option>
    <option value="KUNJ TRIVEDI">KUNJ TRIVEDI</option>
    <option value="HITESH TRIVEDI">HITESH TRIVEDI</option>
    <option value="JAINISH SHAH">JAINISH SHAH</option>
    <option value="AJAY KOTAK">AJAY KOTAK</option>
    <option value="MOKSHA SHAH">MOKSHA SHAH</option>
    <option value="HARSHI SHAH">HARSHI SHAH</option>
    <option value="SAURABH OZA">SAURABH OZA</option>
    <option value="PARAG JAIN">PARAG JAIN</option>
    <option value="MANTHAN KHIVASARA">MANTHAN KHIVASARA</option>
    <option value="PARUL TRIVEDI">PARUL TRIVEDI</option>
  </select>
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">ENTER AMOUNT TO BE SENT</label>
  </div>
  <input type="text" name="amount" placeholder="Amount In Rupees">
</div>
<input type="hidden" id="customername" name="customername">
<input type="hidden" id="customerbalance" name="customerbalance">
<input type="hidden" id="datetime" name="datetime">
 <button type="submit" name="save" class="btn btn-primary">Transfer Now!</button>
</form>
</div>
</div>
    <!--
     <form action="connect.php" method="post">
    
     <input type="text" name="recieverName">
     <input type="text" name="amount">
     <input type="datetime-local" name="day">
      <input type="hidden" id="customername" name="customername">
     <input type="hidden" id="customerac" name="customerac">
      <input type="hidden" id="customerbalance" name="customerbalance">
     <button type="submit" name="save" class="btn btn-primary">Done</button>
     </form> -->


<!--<form action="transfer.php" method="post" enctype="multipart/form-data" style="background-color: #FFFFFF" >-->
       <!--   <h3>Upload File</h3><br>-->
          <!-- SUbject SELECTION OPTIONS-->
<!-- <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Select Subjects</label>
  </div>-->
  <!--
  <select class="custom-select" type="input" name="SubjectName" id="validationServer04" required>--> 
<!--  <select class="custom-select" id="validationServer04" required> -->
 <!--   <option selected disabled value="">----Select-----</option>
    
  </select>-->

  <!--<input type="hidden" id="Name" name="Name">
  <input type="hidden" id="Account_number" name="Account_number">
  <a type="submit" name="save" class="btn btn-primary">Done</a>
</div>

</form>-->
 


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

 <!--   <script>
  var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
};
  $(document).ready(function(){
    debugger
  $('#customerac').val(getUrlParameter('customerac'))
  $('#customername').val(getUrlParameter('customername'))
  })
</script>-->
<script>
   // document.getElementById('customername').value = window.location.href;
    //document.getElementById('customerac').value = window.location.href;
    var url_string = window.location.href;
var url = new URL(url_string);
var customername = url.searchParams.get("customername");
var customerbalance = url.searchParams.get("customerbalance")
document.getElementById('customername').value= customername;
document.getElementById('customerbalance').value= customerbalance;
document.getElementById('sender').value= customername;
//n =  new Date();
//y = n.getFullYear();
//m = n.getMonth() + 1;
//d = n.getDate();
//minutes = n.getMinutes().toString().length == 1 ? '0'+n.getMinutes() : n.getMinutes();
//hours = n.getHours().toString().length == 1 ? '0'+n.getHours() : n.getHours();
//ampm = n.getHours() >= 12 ? 'pm' : 'am';
//document.getElementById("date").innerHTML = m + "/" + d + "/" + y;
var dt = new Date();
document.getElementById("datetime").value = (("0"+dt.getDate()).slice(-2)) +"/"+ (("0"+(dt.getMonth()+1)).slice(-2)) +"/"+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2)) +":"+ (("0"+dt.getSeconds()).slice(-2));
</script>
<!--<script type="text/javascript">
  var d = new Date();
  var hours = d.getHours();
    var mins = d.getMinutes();
    var seconds = d.getSeconds();

    // Set the value of the "date" field
    document.getElementById("datetime").value = d.toDateString() + hours + ":" + mins + ":" + seconds;

    // Set the value of the "time" field
    
    
</script>-->

</body>
</html>