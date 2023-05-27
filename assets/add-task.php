<?php
// connecting to db
session_start();
$conn=mysqli_connect("localhost:3307","root","","todoapp");
if(!$conn){
    echo "CONNECTION FAILED".mysqli_connect_error($conn);
}
// creating add feature
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['submit'])){
    $title=trim(htmlspecialchars(htmlentities($_POST['title'])));
    $sql = "INSERT INTO tasks (title) VALUES ('$title')";
    $result=mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn)==1){
        $_SESSION['task']="data inserted successfully";
    }
    echo mysqli_error($conn);
    mysqli_close($conn);
    header("location:../index.php");
}


