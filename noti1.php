<?php

if (session_id() == "")               //this is for diplaying name
{
   session_start();
}





 $emailid = $_SESSION['loginid'];
require_once './databaseFiles/database_connections.php'; 

$count1=0;
 
$sql1="SELECT * FROM messagejob WHERE jobneed!=$emailid and jobneedto=$emailid and status2 = 0    ";
$result1=mysqli_query($con, $sql1);
$count1=mysqli_num_rows($result1);

if($count1>0) 
    { echo $count1; }
    else
        {echo 0;}

?>