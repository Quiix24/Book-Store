<?php
$fistname = $_POST["fistname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];
$age = $_POST["age"];

include "config.php";

$insertUsers = "INSERT INTO users(fistname,lastname,email,password,age)values('$fistname','$lastname','$email','$password','$age')";

$result = mysqli_query($con,$insertUsers);

if ($result) {
    header("Location: login.php");
    exit();
} else {
    echo "Error: " . $insertUsers . "<br>" . mysqli_error($con);
}

	
?>