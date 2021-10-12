<?php

if($_POST)
{
    
         if (session_id() == "")
      {
         session_start();
      }
	//connect to mysql db
	require_once './databaseFiles/database_connections.php'; 
	
        
         $ruid=$_POST["uid"];
         $rby=$_POST["by"];
         $raction=$_POST["action"];
         
         if($raction=='Block')
         { 
             mysqli_query($con,"INSERT INTO block(uid, blockby) value('$ruid','$rby')");
             
             mysqli_query($con,"UPDATE messagejob SET status2=1 WHERE  jobneed=$ruid and jobneedto=$rby ");
         //all message read by shewta that is send by rohit    1  and 2
             
             mysqli_query($con,"UPDATE messagejob SET status1=1 WHERE  jobneed=$ruid and jobneedto=$rby ");
        
         //all notifications between search job and post job gets deleted
             
             mysqli_query($con,"UPDATE messagejobwant SET status2=1 WHERE  jobneed=$ruid and jobneedto=$rby ");
         //all message read by shewta that is send by rohit    1  and 2
             
             mysqli_query($con,"UPDATE messagejobwant SET status1=1 WHERE  jobneed=$ruid and jobneedto=$rby ");
        
         //all notifications between search job and post job gets deleted
             
             
             
             
         }
         else
         {mysqli_query($con,"delete from block where uid='$ruid' and  blockby='$rby'");}
}

?>