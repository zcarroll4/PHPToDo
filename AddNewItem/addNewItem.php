<?php
require '../database-info.php';
require '../databaseFunctions.php';

$name = $_POST['name'];
$description = $_POST['description'];
$dueDate = $_POST['duedate'] . " " . date("H:i:s");
$createDate = date("Y-m-d H:i:s");
$email = $_POST['Email'];
$sql   = "SELECT * FROM Users WHERE Email = :email;";
$stmt  = $pdo->prepare($sql);
$stmt->bindValue(':email', $email);
$stmt->execute();
$row = $stmt->fetch();
$ui = $row['UID'];
$sql = createToDoListItem();
$stmt = $pdo->prepare ($sql);

$stmt->bindValue (':todoname', $name);
$stmt->bindValue (':tododescription', $description);
$stmt->bindValue (':tododueduate', $dueDate);
$stmt->bindValue (':todocreatedate', $createDate);
$stmt->bindValue (':u', $ui);
$stmt->execute();

header('Location:/todo/ToDoList/');
return;
session_start();
$_SESSION ['ResultMessage1'] = "Sucessfully Added New Item!";
exit ();
?>