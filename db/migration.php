<?php
// creating db & connecting
$conn=mysqli_connect("localhost:3307","root","");
if (!$conn){
    echo "CONNECTION FAILED".mysqli_connect_error();
}
$sql="CREATE DATABASE IF NOT EXISTS todoapp";
$result=mysqli_query($conn,$sql);
mysqli_close($conn);

// creating tables
$conn=mysqli_connect("localhost:3307","root","","todoapp");
$sql="CREATE TABLE tasks (
   id INT PRIMARY KEY AUTO_INCREMENT ,
   title VARCHAR(200) NOT NULL
)";
$result=mysqli_query($conn,$sql);
echo mysqli_error($conn);
mysqli_close($conn);
