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
echo "Connected successfully...";
}
mysqli_select_db($conn,"myPhpDB") or die(mysqli_error());
echo "Connected to Database";
//creating new table: execute this CREATE query only once
$query="CREATE TABLE info_table(id INT(4) NOT NULL AUTO_INCREMENT,PRIMARY
KEY(id),name VARCHAR(10),Phone_no INT,email VARCHAR(40))";
mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
print("<br/>");
echo "info_table Created successfully";
//Adding Data into Table
$query1="INSERT INTO info_table(name,Phone_no,email) VALUES
('Sachin',123456,'sachin@gmail.com')";
mysqli_query($conn,$query1) or die(mysqli_error());
$query1="INSERT INTO info_table(name,Phone_no,email) VALUES
('Dhoni',22222,'dhoni@gmail.com')";
mysqli_query($conn,$query1) or die(mysqli_error());
$query1="INSERT INTO info_table(name,Phone_no,email) VALUES
('Virat',55555,'virat@gmail.com')";
mysqli_query($conn,$query1) or die(mysqli_error());
print("<br/>");
echo "Data inserted in the table";
$result=mysqli_query($conn,"SELECT * FROM info_table") or die('Error: ' . mysqli_error($conn));
print("<br/>");
print("<b>User Database</b>");
echo "<table border='1'>";
echo "<tr><th>ID</th> <th>Name</th> <th>Phone Number</th> <th>Mail ID</th></tr>";
while ($row=mysqli_fetch_array($result)) {
//print the content of each row in the table
echo "<tr><td>";
echo $row['id'];
echo "</td><td>";
echo $row['name'];
echo "</td><td>";
echo $row['Phone_no'];
echo "</tc><td>";
echo $row['email'];
echo "</td></tr>";
}
echo "</table>";
mysqli_close($conn);
?>