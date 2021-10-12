<?php



if (session_id() == "")               //this is for diplaying name
{
   session_start();
}

 $emailid = $_SESSION['loginid'];

 

$hjdb=$_SESSION['hhherd'];
$bhcf=$_SESSION['hhhwer'] ;       

// Including database connections
require_once './databaseFiles/database_connections.php'; 
// mysqli query to fetch all data from database
$query = "select  ob2.id as 'jobid', ob3.id as 'jobownerid' , messagejob.message,messagejob.date_time ,outt.id as 'pid',outt.firstname as 'firstperson' ,ob.id as 'spid' ,ob.firstname as 'secondperson' ,ob2.pname as 'project' from messagejob join outt on messagejob.jobneed=outt.id join outt ob  on messagejob.jobneedto=ob.id  join outtjob ob2 on messagejob.jobid=ob2.id   join outt ob3 on ob2.kisne=ob3.id      where messagejob.id in   (SELECT MAX(messagejob.id )FROM messagejob group by messagejob.jobid,((jobneed=$emailid or jobneedto=$emailid)and jobpost!=$emailid)) and ((jobneed=$emailid or jobneedto=$emailid)and jobpost!=$emailid and  (jobneed not in (select uid from block where blockby=$emailid) and jobneedto not in (select uid from block where blockby=$emailid)) and hide1=1) order by messagejob.id desc limit $hjdb,$bhcf";
$result = mysqli_query($con, $query);
$arr = array();
if(mysqli_num_rows($result) != 0) {
	while($row = mysqli_fetch_assoc($result)) {
			$arr[] = $row;
	}
}
// Return json array containing data from the database
if(count($arr) > 0){
echo json_encode($arr);}
exit;
