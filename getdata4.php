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
$query =  " select messagejobwant.jobid, messagejobwant.date_time ,messagejobwant.jobpost,messagejobwant.jobtemp,ob2.pname as 'project',messagejobwant.message,ob4.id as 'pid' ,ob4.firstname as 'firstperson' ,ob5.id as 'spid' , ob5.firstname as 'secondperson' from messagejobwant join outt on messagejobwant.jobtemp=outt.id join outtjobwant ob2 on messagejobwant.jobid=ob2.id join outt ob4 on messagejobwant.jobneed=ob4.id join outt ob5  on messagejobwant.jobneedto=ob5.id  where messagejobwant.id in   (SELECT MAX(messagejobwant.id )FROM messagejobwant group by messagejobwant.jobid,messagejobwant.jobtemp,((jobneed=$emailid or jobneedto=$emailid)and jobpost=$emailid)) and ((jobneed=$emailid or jobneedto=$emailid)and jobpost=$emailid and (jobneed not in (select uid from block where blockby=$emailid) and jobneedto not in (select uid from block where blockby=$emailid)) and hide2=1 ) order by messagejobwant.id desc  limit $hjdb,$bhcf";
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
