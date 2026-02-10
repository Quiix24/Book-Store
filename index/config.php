<?php
$con = mysqli_connect("localhost","root","")or die ("Error : cant connect to server");
$db = mysqli_select_db($con,"projectdb") or die ("Error : cant connect to DateBase");
?>