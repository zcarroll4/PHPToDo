<?php
$Title = "Add New Item";
require ('../header.php');
require ('../database-info.php');
require ('../databaseFunctions.php');
?>
<div class="container mb-5 mt-3">
    <div class="row bg-primary text-white">
        
    </div>
<div class="row">
<div class="col-lg-2 text-center"></div>
<div class="col-lg-8 p-4">
<h1>Add New Item</h1>
    <div class="col-12 bg-primary">
            <?php
                if(isset($_SESSION['ResultMessage1'])){
                    echo $_SESSION['ResultMessage1'];
                 }
            ?>
        </div>
<form class="text-center" style="font-size:18px;" action="addNewItem.php" method="POST">
<div class="form-group">
<label for="name">Name: </label>
</div>
<input type="hidden" name="Email" value="<?=$_SESSION['Email'];?>"/>
<input type="text" name="name" />
<div class="form-group">
<label for="description">Description: </label>
</div>
<textarea name="description" style="width:100%;" rows="3"></textarea>
<div class="form-group">
<label for="DueDate">Due Date: </label>
</div>
<input type="date" name="duedate" value="12-31-2021" class="mb-2" />
<input type="submit" value="Submit" class="btn btn-success btn-lg col-lg-12 mt-3"/>
</form>
<a href="../Dashboard" class="btn btn-primary btn-lg col-lg-12">Cancel</a>
</div>
<div class="col-lg-2 text-center"></div>
</div>

</div>
</div>

<?php
    include ('../footer.php');
?>
