<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
background-image: url("bg.jpg");
height: 100%; 
background-repeat: no-repeat;
background-size: cover;
 background-position: center;
font-family: Arial, Helvetica, sans-serif;
}
.heading{
color:white;
 padding: 20px 40px;
 font-size:30px;
 font-family:arial black;
}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #008B8B;
  border:none;
  color: white;
  padding: 30px 60px;
   text-decoration: none;
  display: inline-block;
  margin: 30px 0;
  cursor: pointer;
  width: 100%;
  border-radius:12px;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 15%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.password {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<center>
<h2 class="heading"><i><b><u>Vendor Management System</i></b></u></h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">MASTER</button><br>
<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">ENTRY</button><br>
<button onclick="document.getElementById('id03').style.display='block'" style="width:auto;">REPORT</button>
<div id="id01" class="modal">
  
  <form class="modal-content animate" action="loginsession.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="Avatar.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="id"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="id" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
       
      <button type="submit">Login</button>
	 
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
<div id="id02" class="modal">
  
  <form action="vendor.php" method="POST">
    <button type="submit" name="info">Show vendor details</button>
	</form>
	  <form action="product.php" method="POST">
	<button type="submit" name="list">Show product details</button>
 </form>
</div>
<div id="id03" class="modal">
  
  <form action="reportinfo.php" method="POST">
    <button type="submit" name="info">Vendor Information</button>
	</form>
	  <form action="reportproduct.php" method="POST">
	<button type="submit" name="list">Product List</button>
 </form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</center>
</body>
</html>
<?php
session_destroy();
?>