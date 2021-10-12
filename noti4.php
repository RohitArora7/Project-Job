<?php

if (session_id() == "")               //this is for diplaying name
{
   session_start();
}





 $emailid = $_SESSION['loginid'];
 require_once './databaseFiles/database_connections.php'; 


$count4=0;
 
$sql4="SELECT * FROM messagejobwant WHERE jobneed!=$emailid and jobneedto=$emailid and status2 = 0    ";
$result4=mysqli_query($con, $sql4);
$count4=mysqli_num_rows($result4);


if($count4>0) 
    { echo $count4; }
    else
        {echo 0;}

?>