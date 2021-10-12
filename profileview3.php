<?php
if (session_id() == "")               //this is for diplaying name
{
   session_start();
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <script>
       
      function call(a,b)
       {
           
     var x = document.getElementById("one").value;
     
        post_data = {'uid':a, 'by':b , 'action':x  };
			 	
    $.post('block.php', post_data, function(data) {
					
					
				}).fail(function(err) { 
				
				//alert HTTP server error
				alert(err.statusText); 
				});   
    };
       
          function call2(a,b)
       {
           
     var x = document.getElementById("second").value;
     
        post_data = {'uid':a, 'by':b , 'action':x  };
			 	
    $.post('block.php', post_data, function(data) {
					
					
				}).fail(function(err) { 
				
				//alert HTTP server error
				alert(err.statusText); 
				});   
    };
        
       </script>
        
     <style>
    #profileview3
    {
   background-color: #FDFAFB;
   background-image: none;
   -moz-box-shadow: 0px 1px 2px #808080;
   -webkit-box-shadow: 0px 1px 2px #808080;
   box-shadow: 0px 1px 2px #808080;
  padding: 20px;
   padding-left: 30px;
   
    }
    </style>
    </head>
    <body>
      
         <br>
        <br><h5>Profile</h5>
        <br><br>
 


 
        
        

 
 <?php
 
 
 

require_once("./databaseFiles/database_connections.php");

$rpersonid = $_SESSION['hhh'];
$emailid = $_SESSION['loginid'];
$temp; 
$sql = "select * from outt where id=$rpersonid" ;
$result = mysqli_query($con,$sql);
?>

<?php
while($row = mysqli_fetch_array($result)) {
?>
   <div id="profileview3">
    ID : <?php echo $row["id"]; $temp=$row["id"];?><br>    
    First Name : <?php echo $row["firstname"]; ?><br>
    Last Name : <?php echo $row["lastname"]; ?><br>
    Email : <?php echo $row["email"]; ?><br>
 
   
 <?php 
} 

 
if($temp==$emailid )
{echo "";}
else
{
    $result=mysqli_query($con,"select * from block where uid=$temp and  blockby=$emailid");
    
    $row  = mysqli_fetch_array($result);
    
    
    if(!is_array($row))
    {
?>
     
    
<input type="button" name="Like" id="one" value="Block" onclick="call(<?php echo $temp ?>,<?php echo $emailid ?>);">

<script>
    $(document).ready(function(){
    $("#one").click(function(e) {
        e.preventDefault();
    if ($(this).val() == "Block") {
        $(this).val('Unblock');
    }
    else {
        $(this).val('Block');
    }
    return false;
});
    
    });
</script>


<?php 
    }
 else {   ?>
      
    
    <input type="button" name="Like" id="second" value="Unblock" onclick="call2(<?php echo $temp ?>,<?php echo $emailid ?>);">

<script>
    $(document).ready(function(){
    $("#second").click(function(e) {
        e.preventDefault();
    if ($(this).val() == "Unblock") {
        $(this).val('Block');
    }
    else {
        $(this).val('Unblock');
    }
    return false;
});
    
    });
</script>  
      
      <?php
      
 }
}
?>

   </div>
    </body>
</html>
