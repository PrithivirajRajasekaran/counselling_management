<?php 

$servername ="localhost";
$username="root";
$password ="";
$dbname="studentadmission";

$conn= new mysqli($servername,$username,$password,$dbname);
if($conn)
{
    echo '<script>alert("Connected successfully")</script>';
}
else
{
    
    echo '<script>alert("Connected successfully")</script>';

}


?>