<?php
// connecting to db & creating delete feature
session_start();
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['update'])) {
    $conn = mysqli_connect("localhost:3307", "root", "", "todoapp");
    if(!$conn){
        echo "CONNECTION FAILED".mysqli_connect_error($conn);
    }
    $id=$_GET['id'];
    $title=$_POST['title'];
    $sql="UPDATE tasks SET title='$title' WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn)==1){
        $_SESSION['task']="data updated successfully";
    }
    header("location:../index.php");
}

