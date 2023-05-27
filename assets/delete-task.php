<?php
// connecting to db & creating delete feature
session_start();
if($_SERVER['REQUEST_METHOD']=="GET" && isset($_GET['id'])) {
    $conn = mysqli_connect("localhost:3307", "root", "", "todoapp");
    if (!$conn) {
        echo "CONNECTION FAILED" . mysqli_connect_error($conn);
    }
    $id=$_GET['id'];
    $sql="DELETE FROM tasks WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if(mysqli_affected_rows($conn)==1){
        $_SESSION['task']="data deleted successfully";
    }
    echo mysqli_error($conn);
    mysqli_close($conn);
    header("location:../index.php");
}

