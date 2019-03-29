<?php
require '../database-info.php';
require '../databaseFunctions.php';




$name = $_POST['name'];
$description = $_POST['description'];
$dueDate = $_POST['duedate'] . " " . date("H:i:s");
$createDate = date("Y-m-d H:i:s");

//echo $name . " " . $description . " " . $dueDate . " " . $createDate;

$sql = createToDoListItem();
$stmt = $pdo->prepare ($sql);

$stmt->bindValue (':todoname', $name);
$stmt->bindValue (':tododescription', $description);
$stmt->bindValue (':tododueduate', $dueDate);
$stmt->bindValue (':todocreatedate', $createDate);
$stmt->execute();

header('Location:index.php');
session_start();
$_SESSION ['ResultMessage1'] = "Sucessfully Added New Item!";
exit ();
?>