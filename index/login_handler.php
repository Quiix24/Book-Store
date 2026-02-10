<?php
$fistname = $_POST["fistname"];
$password = $_POST["password"];

include "config.php";

$login = "SELECT fistname,password FROM users WHERE fistname='$fistname' and password='$password'";

$result = mysqli_query($con,$login);
$count = mysqli_num_rows($result);

if ($count) {
    
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $insertUsers . "<br>" . mysqli_error($con);
}

	
?>