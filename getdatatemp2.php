<?php



if (session_id() == "")               //this is for diplaying name
{
   session_start();
}

 $emailid = $_SESSION['loginid'];
 

 $data = json_decode(file_get_contents("php://input"));

$row = $data->row;
$rowperpage = $data->rowperpage;
$temp=$data->temp;

$_SESSION['hhherd']=$row;

$_SESSION['hhhwer']=$rowperpage;





require_once("./databaseFiles/database_connections.php");

 $result=mysqli_query($con,"select  ob2.id as 'jobid', ob3.id as 'jobownerid' , messagejobwant.message,messagejobwant.date_time,outt.id as 'pid',outt.firstname as 'firstperson' ,ob.id as 'spid' , ob.firstname as 'secondperson' ,ob2.pname as 'project' from messagejobwant join outt on messagejobwant.jobneed=outt.id join outt ob  on messagejobwant.jobneedto=ob.id  join outtjobwant ob2 on messagejobwant.jobid=ob2.id   join outt ob3 on ob2.kisne=ob3.id      where messagejobwant.id in   (SELECT MAX(messagejobwant.id )FROM messagejobwant group by messagejobwant.jobid,((jobneed=$emailid or jobneedto=$emailid)and jobpost!=$emailid)) and ((jobneed=$emailid or jobneedto=$emailid)and jobpost!=$emailid  and  (jobneed not in (select uid from block where blockby=$emailid) and jobneedto not in (select uid from block where blockby=$emailid)) and hide1=1 ) order by messagejobwant.id desc limit $temp,$rowperpage");
    
    $row  = mysqli_fetch_array($result);
    
    
    if(is_array($row))
    {
        echo true;
    }
    else
    {
         echo false;
    }


exit;
