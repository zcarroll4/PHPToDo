<?php
require('../header.php');
require '../database-info.php';
require '../databaseFunctions.php';
/*
if(isset($_GET['editTaskItem'])){
   $id = $_GET['editTaskItem'];
   $sql = editTaskItem($id);
   $stmt = $pdo-prepare ($sql);
   $stmt->execute ();
  }
*/
if(isset($_GET['editTaskItem'])){
   $id = $_GET['editTaskItem'];
   $sql = selectToDoListItem($id);
   $stmt = $pdo-prepare ($sql);
   $stmt->execute ();
  }
?>

<form class="form">
<label>Name:</label>
<input type="text" value="<?=$row['ToDoName'];?>"/>
<label>Description:</label>
<input type="text" value="<?=$row['ToDoName'];?>"/>

<input type="submit" value="Update"/>
</form>