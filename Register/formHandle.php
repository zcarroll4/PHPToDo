<?php
require '../database-info.php';
require '../databaseFunctions.php';
displayErrors();
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$encryptedPass = password_hash ($password, PASSWORD_BCRYPT);
$z = bin2hex(openssl_random_pseudo_bytes(16));

//Validation Checks
validationChecks();
function validationChecks(){
global $pdo;
global $uname;
global $email;
global $password;
global $password2;

//SELECT SQL - Check If Email Already Exists
$checkEmailExists = "SELECT * FROM Users WHERE Email = \"$email\";";
$stmt = $pdo->prepare ($checkEmailExists);
$stmt->execute();
$row = $stmt -> fetch();
if ($row['Email'] === $email) {
    header('Location:/todo/Register/');
        session_start();
        $_SESSION ['RegisterError1'] = "Email already exists, please try another Email Address.";
        exit ();
}
    
//SELECT SQL - Check If Email Already Exists
// $checkUserExists = "SELECT * FROM Users WHERE UserName = \"$uname\";";
// $stmt2 = $pdo->prepare ($checkUserExists);
// $stmt2->execute();
// $row2 = $stmt -> fetch();
// if ($row2['UserName'] === $uname) {
//     header('Location:/Register/');
//         session_start();
//         $_SESSION ['RegisterError1'] = "User Name already exists, please try another User Name.";
//         exit ();
// }


if($password != $password2){
    header('Location:/todo/Register/');
    session_start();
    $_SESSION ['RegisterError1'] = "Passwords don't match, try again.";
    exit ();
}
}

//INSERT SQL
try{
$sql = "INSERT INTO Users(UID,Email,Password) Values(\"$z\", :email, :password)";
$stmt = $pdo->prepare ($sql);
$stmt->bindValue (':email', $email);
$stmt->bindValue (':password', $encryptedPass);
$stmt->execute ();
} catch (Exception $e) {
    header('Location:/todo/Register/');
    session_start();
    $_SESSION ['RegisterError1'] = "An error occured when trying to register. ($e)";
    exit ();
}
session_start();
unset($_SESSION["RegisterError1"]);
session_unset($_SESSION["RegisterError1"]);
$_SESSION['Email'] = $_POST['email'];
header('Location:/todo/Dashboard/');
exit ();

?>