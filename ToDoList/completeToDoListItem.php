<?php
      include '../database-info.php';
      include '../databaseFunctions.php';



$todoid = $_GET['completeItem'];
$sql = updateToDoListItem($todoid);
    $stmt = $pdo->prepare ($sql);
    $stmt->execute ();

//Success
header('Location:index.php');
/*session_start();
    $_SESSION ['ResultMessage'] = "Successfully updated list item!";
    exit ();*/



?>