<?php
require_once './databaseFiles/database_connections.php'; 


$data = json_decode(file_get_contents("php://input"));

$data11=$data->a;
$data21=$data->b;
$data31=$data->c;


$sql="UPDATE messagejobwant SET status1=1 WHERE jobid=$data11 and jobneed=$data21 and jobneedto=$data31 ";	
$result=mysqli_query($con, $sql);

$sql="select * from comments ORDER BY id DESC limit 5";
$result=mysqli_query($con, $sql);

$response='';
while($row=mysqli_fetch_array($result)) {
	$response = $response . "<div class='notification-item'>" .
	"<div class='notification-subject'>". $row["subject"] . "</div>" . 
	"<div class='notification-comment'>" . $row["comment"]  . "</div>" .
	"</div>";
}
if(!empty($response)) {
	print $response;
}


?>