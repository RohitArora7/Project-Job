<?php


if (session_id() == "")               //this is for diplaying name
{
   session_start();
}

 $emailid = $_SESSION['loginid'];


require_once("./databaseFiles/database_connections.php");

$data = json_decode(file_get_contents("php://input")); 

$sname = $data->pname;

$query = "SELECT  outtjobwant.id as 'jobid', outt.id as 'jobownerid' ,outtjobwant.* , outt.firstname from      outtjobwant join outt  on outtjobwant.kisne=outt.id  where outt.id!=$emailid and outt.id not in (select uid from block where blockby=$emailid) and outtjobwant.id=$sname order by outtjobwant.id desc";
$result = mysqli_query($con, $query);
$arr = array();
if(mysqli_num_rows($result) != 0) {
	while($row = mysqli_fetch_assoc($result)) {
			$arr[] = $row;
	}
}
// Return json array containing data from the database
echo $json_info = json_encode($arr);
?>