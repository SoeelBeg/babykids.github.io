<?php
$name = $_POST['Name'];
$surname = $_POST['Surname'];
$email = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

//database connectivity

$conn = new mysqli('localhost','root','','registration');
 if($conn->connect_error){
    die('connection failed : ' .$conn->connect_errno);
 }else{
    $stmt = $conn->prepare("insert into register (Name , Surname,Email ,Subject,Message) values(?,?,?,?,?)");
    $stmt->bind_param("sssss", $name,$surname,$email,$subject,$message);
    $stmt->execute();
    echo"registration successfully....";
    $stmt->close();
    $conn->close();
 }
?>