<?php 
$Firstname = $_POST['Firstname'];
$Lastname = $_['Lastname'];
$Usertype = $_['Usertype'];
$Age = $_['Age'];
$Gender = $_['Gender'];
$Qualification = $_['Qualification'];
$Occupation = $_['Occupation'];
$Company = $_['Company'];
$Homeaddress =$_['Homeaddress'];
$Companyaddress = $_['Companyaddress'];
$Email =$_['Email'];
$Contactno =$_['Contactno'];
$Username =$_['Username'];
$Password =$_['Password'];
$Retypepassword =$_['Retypepassword']




// Database connection here 
. $con = new mysqli("localhost","root","Sign up");
if($con->connect_error) {
    die("Failed to connect :".$con->connect_error);
}else {
    $stmt = $con->prepare("select * from signup where Username = ? ");
    $stmt->bind_param("s",$Firstname);
    $stmt->bind_param("s",$Lastnamed);
    $stmt->bind_param("s",$Usertype);
    $stmt->bind_param("i",$Age);
    $stmt->bind_param("s",$Gender);
    $stmt->bind_param("S",$Qualification);
    $stmt->bind_param("s",$Occupation);
    $stmt->bind_param("s",$Company);
    $stmt->bind_param("s",$Homeaddress);
    $stmt->bind_param("s",$Companyaddress);
    $stmt->bind_param("s",$Email);
    $stmt->bind_param("i",$Contactno);
    
       
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    {
        $data = $stmt_result->fetch_assoc();
    }
}
?>