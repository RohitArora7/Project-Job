<?php

if (session_id() == "")               //this is for diplaying name
{
   session_start();
}





 $emailid = $_SESSION['loginid'];
require_once './databaseFiles/database_connections.php'; 


$count3=0;

$sql3="SELECT * FROM messagejobwant WHERE jobneed!=$emailid and jobneedto=$emailid and status1 = 0    ";
$result3=mysqli_query($con, $sql3);
$count3=mysqli_num_rows($result3);


if($count3>0) 
    { echo $count3; }
    else
        {echo 0;}

?>