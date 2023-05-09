<?php 
$Username = $_POST['Username'];
$Password = $_['Password'];
$Usertype = $_['Usertype'];
 

// Database connection here 
$con = new mysqli("localhost","root","Sign in");
if($con->connect_error) {
    die("Failed to connect :".$con->connect_error);
} else {
    $stmt = $con->prepare("select * from signin where Username = ? ");
    $stmt->bind_param("s",$username);
    $stmt->bind_param("s",$Password);
    $stmt->bind_param("s",$Usertype);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    {
        $data = $stmt_result->fetch_assoc();
    }
}
?>