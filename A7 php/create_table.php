<?php
//Make Sql connection
$uname="root";
$upwd="";
$url="localhost";
$conn=mysqli_connect($url,$uname,$upwd);
if(!$conn){
die("Error in connection..".mysqli_error());
}
else
{
echo "Connected successfully...";
}
mysqli_select_db($conn,"myPhpDB"); //before creating the table select the database
$query="CREATE TABLE my_table(id INT(4),name VARCHAR(10),marks VARCHAR(10))";
mysqli_query($conn,$query);
mysqli_close($conn);
?>