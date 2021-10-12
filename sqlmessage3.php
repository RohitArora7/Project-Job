<?php



if (session_id() == "")               //this is for diplaying name
{
   session_start();
}

 $emailid = $_SESSION['loginid'];
 




require_once("./databaseFiles/database_connections.php");

 $result=mysqli_query($con,"select messagejob.jobid, messagejob.date_time,messagejob.jobpost,messagejob.jobtemp,ob2.pname as 'project',messagejob.message,ob4.id as 'pid' ,ob4.firstname as 'firstperson' ,ob5.id as 'spid' , ob5.firstname as 'secondperson' from messagejob join outt on messagejob.jobtemp=outt.id join outtjob ob2 on messagejob.jobid=ob2.id join outt ob4 on messagejob.jobneed=ob4.id join outt ob5  on messagejob.jobneedto=ob5.id  where messagejob.id in   (SELECT MAX(messagejob.id )FROM messagejob group by messagejob.jobid,messagejob.jobtemp,((jobneed=$emailid or jobneedto=$emailid)and jobpost=$emailid)) and ((jobneed=$emailid or jobneedto=$emailid)and jobpost=$emailid and (jobneed not in (select uid from block where blockby=$emailid) and jobneedto not in (select uid from block where blockby=$emailid)) and hide2=1 and extra2=0) order by messagejob.id desc ");
    
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
