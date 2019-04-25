<?php
require('../header.php');
require '../database-info.php';
require '../databaseFunctions.php';
 if (isset($_GET['uncompleteAllTasks'])) {
    $sql = makeAllTasksIncomplete();
    $stmt = $pdo->prepare ($sql);
    $stmt->execute ();
  }
if (isset($_GET['completeAllTasks'])) {
    $sql = makeAllTasksComplete();
    $stmt = $pdo->prepare ($sql);
    $stmt->execute ();
  }
if (isset($_GET['deleteTaskItem'])) {
    $item = $_GET['deleteTaskItem'];    
    $sql = deleteTaskItem($item);
    $stmt = $pdo->prepare ($sql);
    $stmt->execute ();
  }
/*if(isset($_GET['editTaskItem'])){
   $id = $_GET['editTaskItem'];
   $sql = editTaskItem($id);
   $stmt = $pdo->prepare ($sql);
   $stmt->execute ();
  }*/
?>
<head>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
</head>
<div class="container">
<div class="row">
<div class="col">
    <a href="../Dashboard" class="fas fa-angle-left col fa-2x mb-3"> Return To Dashboard</a>
    <?php 
    	$sql = selectToDoList();
        $result = $pdo->prepare ($sql);
        $result->execute();
	  ?>
  </div>
    <a href="#" onclick="addNewItem();" class="fa fa-plus fa-3x m-2 p-1"></a>
<table class="table table-bordered table-striped text-center" id="myTable">
<thead class="bg-primary">
    <th>Edit</th>
	<!--<th class="sorting">ID</th>-->
	<th class="sorting">Name</th>
	<th class="sorting">Description</th>
	<th class="sorting">Due Date</th>
	<!--<th>Created Date</th>-->
	<th>Complete</th>
    <th>Delete</th>
</thead>
<tbody>
	<?php  foreach($result as $row): ?>
        <tr style="background-color:white; text-align:center;">
        <td><a class="far fa-edit fa-2x" href="#" onclick="editItem()" ></a></td>
        <!--<td><?=$row['ToDoID'];?></td>-->
            <input type="hidden" value="<?=$row['ToDoID'];?>"/>
	    <td><?=$row['ToDoName'];?></td>
	    <td><?=$row['ToDoDescription'];?></td>
	    <td><?=$row['ToDoDueDate'];?></td>        
	    <!--<td><?=$row['ToDoCreateDate'];?></td>-->
        <td><a class="fas fa-check-square fa-2x" style="color:#25b345;" href="completeToDoListItem.php?completeItem=<?=$row['ToDoID'];?>"></a></td>
        <td><a class="fa fa-trash fa-2x" href="index.php?deleteTaskItem=<?=$row['ToDoID'];?>" onclick="return confirm('Are you sure you want to delete this item?');"></a></td>
        </tr>
		<?php endforeach;?>
	</tr>
</tbody>
</table>
<a href="index.php?uncompleteAllTasks=true" class="btn btn-primary btn-lg col m-5">Reset Tasks</a>
<a href="index.php?completeAllTasks=true" class="btn btn-success btn-lg col m-5">Complete All Tasks</a>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<script>
function editItem(){
let params = `scrollbars=yes,resizable=no,status=no,location=no,toolbar=no,menubar=no,
width=500,height=500,left=0,top=0`;

open("/PHPToDo/ToDoList/editTask.php?id=<?=$row['ToDoID'];?>", 'test', params);
}

function addNewItem(){
let params = `scrollbars=yes,resizable=yes,status=no,location=no,toolbar=no,menubar=no,
width=500,height=650,left=0,top=0`;

open('/PHPToDo/AddNewItem', 'test', params);
}
</script>
</div>