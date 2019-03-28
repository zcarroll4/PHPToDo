<?php
require('../header.php');
require '../database-info.php';
require '../databaseFunctions.php';
?>
<div class="container">
<div class="row">
<div class="col-lg-12 text-primary bg-dark  p-4">
<h1>Dashboard</h1>
</div>
</div>
<div class="row">
<div class="col-lg-8 text-primary text-center p-4">
<div class="card text-white bg-primary mb-3">
  <div class="card-header">Graduation</div>
  <div class="card-body">
    <h4 class="card-title">Countdown:</h4>
    <p class="card-text" id="grad"></p>
  </div>
</div>
</div>
<div class="col-lg-4 text-right text-primary p-4">
<a href="AddNewItem" class="btn btn-success"><h2>Sign Out</h2></a>
</div>
</div>
<div class="row mt-3">
<div class="col text-center bg-primary p-5 m-3 rounded"><a href="AddNewItem"><h2>Add New Item</h2></a></div>
<div class="col text-center bg-warning p-5 m-3 rounded"><a href="../ToDoList"><h2>View All Items</h2></a></div>
<div class="col text-center bg-info p-5 m-3 rounded"><a href=""><h2>Share Items </h2></a></div>
</div>

<script>
var countDownDate = new Date("May 11, 2019 00:01:00").getTime();
var countDownDate2 = new Date("March 1, 2019 09:00:00").getTime();
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    var date = new Date();
    var z = date.toDateString();
    var n = date.toLocaleTimeString();
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    var distance2 = countDownDate2 - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    var days2 = Math.floor(distance2 / (1000 * 60 * 60 * 24));
    var hours2 = Math.floor((distance2 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes2 = Math.floor((distance2 % (1000 * 60 * 60)) / (1000 * 60));
    var seconds2 = Math.floor((distance2 % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="grad"
    document.getElementById("grad").innerHTML = days + " Days " + hours + " Hours "
    + minutes + " Minutes " + seconds + " Seconds ";
	
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("grad").innerHTML = "GRADUATION 2019 ?";
    }

 }, 1000);
</script>



</div>

