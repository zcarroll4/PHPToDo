<?php
//Display PHP Errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Database Information
$db_password = 'root';
$db_user     = 'root';
$db_name     = 'studycenterdatabase';
try {
    $pdo = new PDO("mysql:host=localhost;dbname=$db_name", $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e) {
	include'header.php';
	echo '<br/><br/><br/><br/><br/><div class="container"><div class="col-12 text-center" style="color:rgba(219,10,91,1.0)">';
    echo '<h3 class="text-left">Could not connect to database<br>';
    echo $e->getMessage();
	echo '</h3></div><div class="col-12 text-center"style="margin-top:75px;"><a href="admin.php" class="btn-lg btn-magenta">Return To Login</a></div>';
    exit();
}
?>