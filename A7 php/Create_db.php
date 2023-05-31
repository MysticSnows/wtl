<?php
//make mySQL connection(execute this file only once)
$uname="root";
$upwd="";
$url="localhost";
$conn=mysqli_connect($url,$uname,$upwd);
if(!$conn){
die("Error in connection..".mysqli_error());
}
else
{
echo "Connected successfully";
}
//create Database
if (mysqli_query($conn,"CREATE DATABASE myPhpDB")) {
print "\nDatabase Created ";
}
else
{
print "Error in creating Database:".mysqli_error();
}
mysqli_close($conn);
?>