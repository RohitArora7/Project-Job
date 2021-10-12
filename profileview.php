<?php 


if (session_id() == "")               //this is for diplaying name
{
   session_start();
}

 $emailid = $_SESSION['loginid'];


require_once("./databaseFiles/database_connections.php");

$data = json_decode(file_get_contents("php://input")); 

$sname = $data->pname;


$_SESSION['hhh']=$sname;




echo true;
?>