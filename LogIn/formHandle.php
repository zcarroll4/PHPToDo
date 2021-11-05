<?php
require '../database-info.php';
require '../databaseFunctions.php';
 displayErrors();
$email = $_POST['email'];
$sql   = "SELECT * FROM Users WHERE Email = :email;";
$stmt  = $pdo->prepare($sql);
$stmt->bindValue(':email', $email);
$stmt->execute();
if ($stmt->rowCount() == 0) {
    header('Location:/todo/LogIn/');
    session_start();
    $_SESSION['LoginError1'] = "Incorrect Login Information! Either your Email or Password is incorrect!";
    exit();
}
echo "here";
if ($stmt->rowCount() == 1) {
    $row = $stmt->fetch();
    $password = $_POST['password'];
    $encryptedPass = $row['Password'];
    if (password_verify($password, $encryptedPass)) {
         session_start();
        unset($_SESSION["LoginError1"]);
        session_unset($_SESSION["LoginError1"]);
        session_regenerate_id(true);
        $_SESSION['Email'] = $_POST['email'];
        header('Location:/todo/Dashboard/');
        exit();
    } else {
        header('Location:/todo/LogIn/');
        session_start();
            $_SESSION['LoginError1'] = "Incorrect Login Information! Either your Email or Password is incorrect!";
        exit();
    }   
} else {
    header('Location:/todo/LogIn/');
        session_start();
            $_SESSION['LoginError1'] = "Incorrect Login Information! Either your Email or Password is incorrect!";
        exit();
}
?>