<?php 
$Projectid = $_POST['Projectid'];
$Projecttitle = $_['Projecttitle'];
$Username = $_['Username'];
$Expectedamount =$_['Expectedamount'];
$Projectdetails =$_['Projectdetails'];

// Database connection here 
$con = new mysqli("localhost","root","place tender");
if($con->connect_error) {
    die("Failed to connect :".$con->connect_error);
} else {
    $stmt->bind_param("s",$Projectid);
    $stmt->bind_param("s",$Projecttitle);
    $stmt->bind_param("s",$Username);
    $stmt->bind_param("i",$Expectedamount);
    $stmt->bind_param("s",$Projectdetails);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    {
        $data = $stmt_result->fetch_assoc();
    }
}
?>