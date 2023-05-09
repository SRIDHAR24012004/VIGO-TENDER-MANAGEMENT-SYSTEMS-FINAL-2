<?php 
$Enteryourtenderamounmt = $_POST['Enteryourtenderamount'];
// Database connection here 
$con = new mysqli("localhost","root","Buyer placer");
if($con->connect_error) {
    die("Failed to connect :".$con->connect_error);
} else {
    $stmt->bind_param("i",$Enteryourtenderamount);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    {
        $data = $stmt_result->fetch_assoc();
    }
}
?>