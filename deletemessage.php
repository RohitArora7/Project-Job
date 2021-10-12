<?php
require_once './databaseFiles/database_connections.php'; 



$data = json_decode(file_get_contents("php://input"));

$data11 = $data->a;
$data21 = $data->b;
$data31 = $data->c;








$sql="UPDATE messagejob SET hide1=0 WHERE jobid=$data11 and (jobneed=$data21 or jobneedto=$data21)  ";	
mysqli_query($con, $sql);

// to delete all notification along with message

$sql="UPDATE messagejob SET status2=1 WHERE jobid=$data11 and jobneed=$data21 and jobneedto=$data31 ";	
mysqli_query($con, $sql);


echo true;
exit;

?>