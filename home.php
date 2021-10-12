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
    </head>
    <body>
        <?php
        if (session_id() == "")               //this is for diplaying name
{
   session_start();
}


        ?>
        
 
    
        <div style="position:absolute;left:10px;top:-29px;width:681px;height:50px;z-index:11">
        
        <h6 ><a class="button button1"  href="#displayjobsmessage" >Search Job</a></h6>
        <h6 ><a class="button button1" href="#displayemployeemessage" >Search Employee</a></h6>
        <h6 ><a class="button button1" ng-href="#projectmessage" >Post Job</a></h6>
        <h6 ><a class="button button1" ng-href="#jobprofilemessage">Job Profile</a></h6>
        </div>
    
        
    </body>
</html>
