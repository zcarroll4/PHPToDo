
<head>
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/journal/bootstrap.min.css"/>-->
<link rel="stylesheet" href="/PHPToDo/css/bootstrap.css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<title>PHP To Do List Application - Zach Carroll</title>
<link rel="shortcut icon" type="image/png" href="/PHPToDo/images/fav.ico"/>

</head>
<div class="container-fluid text-center p-4 dark">
<div class="row bg-light">
<div class="col-4">
<a  href="/PHPToDo/Dashboard" class="fas fa-home fa-5x" width="100"></a>
</div>
<div class="col-4">
    <h2 class="col-12 mt-2">PHP To Do List</h2>    
    <i class="fab fa-php fa-4x" style="color:#EB6864;" ></i>
</div>
<div class="col-4">
<h4 id="date"></h4>
</div>
</div>



<script>
var x = setInterval(function() {
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();
var weekDay = today.getDay();
var time = today.toLocaleTimeString();

switch(weekDay) {
  case 0:
    weekDay = "Sunday";
    break;
  case 1:
    weekDay = "Monday";
    break;
 case 2:
    weekDay = "Tuesday";
    break;
 case 3:
    weekDay = "Wednesday";
    break;
 case 4:
    weekDay = "Thursday";
    break;
 case 5:
    weekDay = "Friday";
    break;
 case 6:
    weekDay = "Saturday";
    break;
}

today = mm + '/' + dd + '/' + yyyy;
document.getElementById('date').innerHTML = weekDay + "<br/>" + today + "<br/>" + time;
 }, 1000);
</script>
</div>