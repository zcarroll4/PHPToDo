<?php
$Title = "Welcome";
require ('../header.php');
require ('../database-info.php');
require ('../databaseFunctions.php');
$Welcome=true;
?>
<div class="container mb-2 bg-light" style="padding:1rem 6rem; border:0px;">
<div class="row">
<div class="col-lg-12 text-primary text-center bg-dark  p-4">
<h1>Welcome</h1>
</div>
</div>
<div class="row mt-3">
<div class="col text-center bg-success p-5 m-3 rounded grow-element"><a class="text-white"  href="../LogIn/"><h2>Sign In</h2></a></div>
<div class="col text-center bg-primary p-5 m-3 rounded grow-element"><a class="text-white" href="../Register/"><h2>Register</h2></a></div>
</div>
</div>
<?php
    include ('../footer.php');
?>
