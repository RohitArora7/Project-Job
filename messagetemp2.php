<?php



if (session_id() == "")               //this is for diplaying name
{
   session_start();
}

 $emailid = $_SESSION['loginid'];
 

 $data = json_decode(file_get_contents("php://input"));

$a = $data->a;
$b = $data->b;
$c = $data->c;
$d = $data->d;


$_SESSION['a']=$a;
$_SESSION['b']=$b;
$_SESSION['c']=$c;
$_SESSION['d']=$d;

//header("Location: ./message.php?jobid=$a&kisnepost=$b&konapply=$c&kiskoapply=$d " ); 
echo true;
exit;