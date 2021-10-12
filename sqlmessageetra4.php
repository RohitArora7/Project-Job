<?php



if (session_id() == "")               //this is for diplaying name
{
   session_start();
}

 $emailid = $_SESSION['loginid'];
 




require_once("./databaseFiles/database_connections.php");

 $result=mysqli_query($con,"select messagejobwant.jobid, messagejobwant.date_time ,messagejobwant.jobpost,messagejobwant.jobtemp,ob2.pname as 'project',messagejobwant.message,ob4.id as 'pid' ,ob4.firstname as 'firstperson' ,ob5.id as 'spid' , ob5.firstname as 'secondperson' from messagejobwant join outt on messagejobwant.jobtemp=outt.id join outtjobwant ob2 on messagejobwant.jobid=ob2.id join outt ob4 on messagejobwant.jobneed=ob4.id join outt ob5  on messagejobwant.jobneedto=ob5.id  where messagejobwant.id in   (SELECT MAX(messagejobwant.id )FROM messagejobwant group by messagejobwant.jobid,messagejobwant.jobtemp,((jobneed=$emailid or jobneedto=$emailid)and jobpost=$emailid)) and ((jobneed=$emailid or jobneedto=$emailid)and jobpost=$emailid and (jobneed not in (select uid from block where blockby=$emailid) and jobneedto not in (select uid from block where blockby=$emailid)) and hide2=1 and etra2=0) order by messagejobwant.id desc  ");
    
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
