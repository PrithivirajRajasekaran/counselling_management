<?php 
$fstuname=$_POST['firstname'];
$lstuname=$_POST['lastname'];

$grname=$_POST['guardianname'];
$gocc=$_POST['guardianoccupation'];
$dob=$_POST['dob'];
$address1=$_POST['address'];
$state=$_POST['state'];
$city=$_POST['city'];
$pincode=$_POST['pincode'];
$concode=$_POST['concode'];
$ph=$_POST['phoneno'];
$sslc=$_POST['sslcmark'];
$hsc=$_POST['hscmark'];
$cutoff=$_POST['cutoff'];
$opinion=$_POST['opinion'];



$servername ="localhost";
$username="root";
$password ="";
$dbname="studentadmission";

$conn= new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
else
{
    
    echo '<script>alert("Connected successfully")</script>';

}

    
    $ins="INSERT INTO  studentinfo (fstuname,lstuname,grname,gocc,dob,address1,state,city,pincode,concode,ph,sslc,hsc,cutoff,opinion) values ('$fstuname','$lstuname','$grname','$gocc',$dob,'$address1','$state','$city',$pincode,$concode,$ph,$sslc,$hsc,$cutoff,'$opinion')";
$rr=mysqli_query($conn,$ins);
if ( $rr==
TRUE) {
  echo '<script>alert("New record created successfully")</script>';
} else {
  echo "Error: " . $ins. "<br>" . $conn->error;
}

$conn->close();
?>



