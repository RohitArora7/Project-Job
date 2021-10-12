<?php

	$rrjobid="";
if($_POST)
{
    
         if (session_id() == "")
      {
         session_start();
      }
	//connect to mysql db
	require_once './databaseFiles/database_connections.php'; 
	
	//check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    } 

	if(isset($_POST["message"]) &&  strlen($_POST["message"])>0)
	{
		//sanitize user name and message received from chat box
		//You can replace username with registerd username, if only registered users are allowed.
		$username = filter_var(trim($_POST["username"]),FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
		$message = filter_var(trim($_POST["message"]),FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
		
                $rrjobid=$_POST["sjobid"];
                $rrkisnepost=$_POST["skisnepost"];
                $rrkonapply=$_POST["skonapply"];
                $rrkiskoapply=$_POST["skiskoapply"];
                
                
                
		  //stop insert into database when blocked           
    require_once("./databaseFiles/database_connections.php");            
    $result=mysqli_query($con,"select * from block where uid=$rrkonapply and  blockby=$rrkiskoapply");
    $row  = mysqli_fetch_array($result);
    
     if(!is_array($row))
    {	
	$result2=mysqli_query($con,"select pname from outtjobwant where id=$rrjobid  and  active=1");
    $row2  = mysqli_fetch_array($result2);  
      
     if(is_array($row2))
     {

		//insert new message in db
		if(mysqli_query($con,"INSERT INTO messagejobwant(jobid, jobpost,jobtemp ,jobneed ,jobneedto ,message,status2) value('$rrjobid','$rrkisnepost', '$rrkonapply' , '$rrkonapply', '$rrkiskoapply', '$message',1 )"))
		{
		mysqli_query($con,"UPDATE messagejobwant SET status2=1 WHERE jobid=$rrjobid and jobneed=$rrkiskoapply and jobneedto=$rrkonapply");	
                //$msg_time = date('h:i A M d',time()); // current time
		//	echo '<div class="shout_msg">  <span class="username">'.$rrjobid.'</span> <span class="username">'.$rrkonapply.'</span>      <span class="message">'.$message.'</span></div>';
		}
		
     }
                }	// delete all records except last 10, if you don't want to grow your db size!
		//mysqli_query($sql_con,"DELETE FROM shout_box WHERE id NOT IN (SELECT * FROM (SELECT id FROM shout_box ORDER BY id DESC LIMIT 0, 10) as sb)");
	}
	elseif($_POST["fetch"]==1)
	{
       
		$sql="select messagejobwant.* , outt.firstname as 'sender' from messagejobwant join outt on messagejobwant.jobneed=outt.id   where ((jobneed='".$_SESSION['fulljobkon']."' or jobneed='".$_SESSION['fulljobkis']."') and (jobneedto='".$_SESSION['fulljobkis']."' or jobneedto='".$_SESSION['fulljobkon']."')) and  jobid='".$_SESSION['fulljob']."' order by messagejobwant.id";
		
                $results = mysqli_query($con,$sql);
                
                while($row = mysqli_fetch_array($results))
		{
			$msg_time = date('h:i A M d',strtotime($row["date_time"])); //message posted time
			echo '<div class="shout_msg"> <time>'.$msg_time.'</time> <span class="username">'.$row["sender"].'</span>  <span class="message">'.$row["message"].'</span></div>';
		}
	}
	else
	{
		header('HTTP/1.1 500 Are you kiddin me?');
    	exit();
	}
}