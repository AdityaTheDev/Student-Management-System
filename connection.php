<?php 
$host="localhost";
$user="root";
$pass="";
$db="student";


$con=mysqli_connect($host,$user,$pass,$db);

if($con){
    echo "";
}
else{
    echo "DB not connnected";
}

?>
