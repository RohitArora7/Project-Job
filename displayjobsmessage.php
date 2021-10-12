<?php
if (session_id() == "")               //this is for diplaying name
{
   session_start();
}
$emailid = $_SESSION['loginid'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

     
        <link rel="stylesheet" href="notification-demo-style.css" type="text/css">
       
	<script type="text/javascript">



function reload() 
{
    document.getElementById('InlineFrame1').src += '';
} 



	</script>
        
    </head>
    <body>
       <div ng-init="callmeb();"></div>
       
 
        
        
       
       <div style="float:right;"> {{inc}}---{{incc}}---{{inccc}}</div>
        <br>
          <div style="position:absolute;left:10px;top:-29px;width:681px;height:50px;z-index:11">
             
             <h6 ><a class="button button1"  href="#jobsavailable" >Jobs Available</a></h6>
             <h6 ><a class="button button1"  href="#displayjobsmessage" >Message</a></h6>
         </div>
        
 
        
       <table style="position:absolute;left:37px;top:27px;width:407px;height:181px;z-index:0;" id="Table1">


     <tbody ng-repeat='detail in posts'>     

<tr>
<td class="cell0">&nbsp;</td>
<td class="cell1">&nbsp;</td>
</tr>
<tr>
<td class="cell2"><span style="color:#000000;font-family:Arial;font-size:16px;line-height:19px;"><strong>&nbsp;&nbsp; {{detail.project}} </strong></span></td>
<td class="cell3"><span style="color:#4F4F4F;font-family:Arial;font-size:13px;line-height:16px;"><a class="style1" href  id="click" ng-click="profileviewpass(detail.pid) "> {{detail.firstperson}}</a> -&gt; <a class="style1" href ng-click="profileviewpass(detail.spid)"> {{detail.secondperson}}</a></span></td>
</tr>
<tr>
<td colspan="2" class="cell4"><span style="color:#000000;font-family:arial;font-size:19px;line-height:21px;">&nbsp; <hm-read hmtext="{{ detail.message }}" hmlimit="37" ></hm-read></span></td>
</tr>
<tr>
    <td colspan="2" class="cell5"><span style="color:#000000;font-family:arial;font-size:13px;line-height:16px;">&nbsp; </span>
        <span style="color:#4169E1;font-family:arial;font-size:13px;line-height:16px;">
            <a class="style1" id="btn" href ng-click="displayjobsmessageview(detail.jobid,detail.jobownerid,<?php echo $emailid; ?>,detail.jobownerid); displayjobsmessagenotification(detail.jobid,detail.jobownerid,<?php echo $emailid; ?>); ">Message</a> 
            &nbsp<a class="style1" href   ng-click="profileviewjob(detail.jobid) ">View</a>
            &nbsp<a class="style1" href  ng-click="displayjobsmessagedelete(detail.jobid,detail.jobownerid,<?php echo $emailid; ?>)" >Delete</a> </span><div style="float:right;color:#4F4F4F;">{{date_time}}</div></td>
</tr>

</tbody>
<tfoot>
    <tr><td colspan="2">&nbsp;</td></tr>
<tr>
    <td colspan="2" class="footer"><h3 href ng-show="showLoadmore" ng-click='getPostsclick()'><a href style="color:blue;text-decoration:none;">{{ buttonText }}</a></h3></td>
    
</tr>
</tfoot>
           
</table> 
          

      
        
 
     
    

 <div id="Layer2" style="position:fixed;text-align:left;left:auto;right:0px;top:auto;bottom:0px;width:27.7251%;height:294px;z-index:27;">
<iframe name="InlineFrame1" id="InlineFrame1" style="position:absolute;left:0px;top:1px;width:350px;height:292px;z-index:12;" ng-src="{{detailFrame}}" ></iframe>
</div>
        
       
    </body>
</html>
