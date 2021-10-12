<?php

if (session_id() == "")               //this is for diplaying name
{
   session_start();
}





 $emailid = $_SESSION['loginid'];
 require_once './databaseFiles/database_connections.php'; 


$count2=0;

$sql2="SELECT * FROM messagejob WHERE jobneed!=$emailid and jobneedto=$emailid and  status1 = 0    ";
$result2=mysqli_query($con, $sql2);
$count2=mysqli_num_rows($result2);

if($count2>0) 
    { echo $count2; }
    else
        {echo 0;}

?>