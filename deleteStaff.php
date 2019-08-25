<?php

if(isset($_POST['sid'])){
    session_start();
if(!isset($_SESSION["bid"])){
    header('Location:index.php');
}
    include 'connect.php';
    $staffId = $_POST['sid'];
    $branchId = $_SESSION["bid"];
    $sql = "delete from staff where id = '$staffId' and branch = '$branchId'";
    
    if ($conn->query($sql) === TRUE) {
    header("Location:AddStaff.php");
}else{
        echo 'error deleting staff';
    }
    
    
}
