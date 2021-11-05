<?php
require ('../database-info.php');
require ('../databaseFunctions.php');
try {
    $id = $_POST['toDoID'];
    $name = $_POST['itemName'];
    $description = $_POST['itemDescription'];
    $dueDate = $_POST['itemDueDate'];
    $sql = editTaskItem($id);
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue (':name', $name);
    $stmt->bindValue (':description', $description);
    $stmt->bindValue (':date', $dueDate);
    $stmt->execute ();    
} catch(Exception $e){
    echo "Error while updating data " . $e->getMessage() , "\n";
}
echo "Successfully updated item! <script>window.close();</script>";
header('Location:/ToDoList');

?>
