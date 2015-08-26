<?php
include('../config/dbconnect.php');

$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM accounts WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

    // output data of each row
    $row = mysqli_fetch_assoc($result);
    $row["name"];
    $row["email"];
    $row["password"];
    echo "Name: " . $row["name"] . $row["email"] . $row["password"];

if($username=$row["email"] && $password=$row["password"]){

header('Location: profile');
include('../config/session.php');
}else{
header('Location: ../');
} 

mysqli_close($conn);

?>

