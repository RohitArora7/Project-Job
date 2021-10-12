<?php  
 require_once './databaseFiles/database_connections.php'; 
 $output = '';  
 $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
 $result = mysqli_query($con, $query);  
 while($row = mysqli_fetch_array($result))  
 {  
      $output[] = $row;  
 }  
 echo json_encode($output);  
 ?>  