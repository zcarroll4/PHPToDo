<?php
require('../header.php');
require '../database-info.php';
require '../databaseFunctions.php';
?>
<div class="container">
<div class="row">
<div class="col-lg-12 text-primary bg-dark  p-4">
<h1>Log In Screen</h1>
</div>
</div>
<div class="row mt-3 text-center" style="font-size:28px;">
<div class="col-12">
<form class="form" method="POST">
<div class="form-group">
<label for="name">Username: </label>
</div>
<input type="text" name="name" />
<div class="form-group">
<label for="password">Password: </label>
</div>
<input type="password" name="password" />

</div>
<input type="submit" value="Log In" class="btn btn-success btn-lg  mt-3 p-6 col"/>
</form>
<a href="../" class="btn btn-primary btn-lg mt-3 p-6 ml-3 col">Cancel</a>
</div>


</div>
</div>

</div>

</div>

</div>

