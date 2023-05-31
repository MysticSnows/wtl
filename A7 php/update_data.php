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
$query="UPDATE info_table SET name='Rohit',phone_no='88888',email='rohit@gmail.com' WHERE
id=2";
$result=mysqli_query($conn,$query) or die('Error: ' . mysqli_error($conn));
print("<br/>");
echo "Data Updated successfully";
$result=mysqli_query($conn,"SELECT * FROM info_table") or die('Error: ' . mysqli_error($conn));
print("<br/>");
echo "Updated data from table";
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