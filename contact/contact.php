<?php
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$message = $_POST['message'];

//database connectivity

$conn = new mysqli('localhost','root','','registration');
 if($conn->connect_error){
    die('connection failed : ' .$conn->connect_errno);
 }else{
    $stmt = $conn->prepare("insert into contact (full_name,email ,message) values(?,?,?)");
    $stmt->bind_param("sss", $full_name,$email,$message);
    $stmt->execute();
    echo"registration successfully....";
    $stmt->close();
    $conn->close();
 }
?>