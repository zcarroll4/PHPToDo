<?php
require('../header.php');
?>
<div class="container">
<div class="row">
    <?php 
      include '../database-info.php';
      include '../databaseFunctions.php';

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


</div>