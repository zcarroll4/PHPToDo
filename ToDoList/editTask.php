<?php
require ('../header.php');
require ('../database-info.php');
require ('../databaseFunctions.php');

   $id = $_GET['id'];
   $sql = selectToDoListItem($id);
   $stmt = $pdo->prepare ($sql);
   $stmt->execute ();
   $row = $stmt -> fetch();

?>
<div class="container">
<form action="editTaskHandling.php" method="POST" class="form-inline justify-content-center">
<input type="hidden" value="<?=$id;?>" name="toDoID" />
<div class="form-group col-12">
<label class="text-center">Name:</label>
<input type="text" class="form-control" name="itemName" value="<?=$row['ToDoName'];?>"/>
</div>
<div class="form-group col-12">
<label>Description:</label>
<input type="text" class="form-control" name="itemDescription" value="<?=$row['ToDoDescription'];?>"/>
</div>
<div class="form-group col-12">
<label>Due Date:</label>
<input type="date" class="form-control" name="itemDueDate" value="<?=$row['ToDoDueDate'];?>"/>
</div>
<input type="submit" class="col bg-success btn text-white mt-2" value="Update Changes"/>
</form>
<a href="#" onclick="closeWindow()" class="btn col bg-primary text-white mb-3">Cancel Changes</a>

</div>
<script>
function closeWindow(){
  window.close();
}
</script>