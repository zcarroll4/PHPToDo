<?php
require('../header.php');
require '../database-info.php';
require '../databaseFunctions.php';
 if (isset($_GET['uncompleteAllTasks'])) {
    $sql = makeAllTasksIncomplete();
    $stmt = $pdo->prepare ($sql);
    $stmt->execute ();
  }
?>
<div class="container">
<!--<div class="row" style="display:none;" id="error-log-row">
<div class="col-lg-2"></div>
<div class="col-lg-8" margin:10px;">
<h4 id="resultMessage" style="padding:15px;">
<?php
        session_start();
        if (isset($_SESSION['ResultMessage'])){
            echo '<script type="text/javascript">';
            echo 'document.getElementById("error-log-row").style.display="block";';
            echo '</script>';   
	    echo $_SESSION['ResultMessage'];
	    echo '</h4>';
            exit ();
        }
?>
</div>
<div class="col-lg-2"></div>
</div>  -->
<div class="row">
    <?php 


    	$sql = selectToDoList();
        $result = $pdo->prepare ($sql);
        $result->execute();
	?>
<table class="table table-bordered table-striped text-center">
<thead class="">
	<th>ID</th>
	<th>Name</th>
	<th>Description</th>
	<th>Due Date</th>
	<th>Created Date</th>
	<th>Complete</th>
</thead>
<tbody>
	<?php  foreach($result as $row): ?>
        <tr style="background-color:white; text-align:center;">
            <td><?=$row['ToDoID'];?></td>
	    <td><?=$row['ToDoName'];?></td>
	    <td><?=$row['ToDoDescription'];?></td>
	    <td><?=$row['ToDoDueDate'];?></td>
	    <td><?=$row['ToDoCreateDate'];?></td>
            <td><a href="completeToDoListItem.php?completeItem=<?=$row['ToDoID'];?>"><img src="../images/complete_icon.png" width="27"/></a></td>
        </tr>
		<?php endforeach;?>
	</tr>
</tbody>
</table>
<a href="index.php?uncompleteAllTasks=true" class="btn btn-primary btn-lg">Reset Tasks</a>
</div>
</div>