<?php
if (session_id() == "")               //this is for diplaying name
{
   session_start();
}
$emailid = $_SESSION['loginid'];
?>
<html>
    <head>
        <script type="text/javascript">
function reload() 
{
    document.getElementById('InlineFrame1').src += '';
} 
</script>
<style>
    #jobdetail
    {
   background-color: #FDFAFB;
   background-image: none;
   -moz-box-shadow: 0px 1px 2px #808080;
   -webkit-box-shadow: 0px 1px 2px #808080;
   box-shadow: 0px 1px 2px #808080;
  padding: 20px;
   padding-left: 30px;
   
    }
    
 #mar
 {
     margin-top: 5px;
     margin-left: 5px;
 }
</style>
    </head>
    <body>
       
        <div ng-init="displayemployeefullcallme();"></div>
        
        <div id="jobdetail" style="position:relative;left:10px;top:-29px;width:584px;">        



<br>
<div ><span  style="color:#4F4F4F;font-family:Arial;font-size:26px;  ">{{desiredLocation.pcat}}</span></div>
<div  ng-if="detail.jobownerid" ng-repeat='detail in desiredLocation'><span  style="color:#4F4F4F;font-family:Arial;font-size:26px;">{{desiredLocation.pcat}} {{detail.pcat}}</span></div>
<br>



<br><span style="color:#000000;font-family:Arial;font-size:18px;">Posted By :</span><br>
<div id="mar"><span  style="color:#000000;font-family:Arial;font-size:14px;"><a class="style1" href  id="click" ng-click="profileviewpass(desiredLocation.jobownerid) "> {{desiredLocation.firstname}}</a></span></div>
<div id="mar" ng-if="detail.jobownerid" ng-repeat='detail in desiredLocation' ><span  style="color:#000000;font-family:Arial;font-size:14px;"><a class="style1" href  id="click" ng-click="profileviewpass(detail.jobownerid); "> {{detail.firstname}}</a></span></div>


<br><span style="color:#000000;font-family:Arial;font-size:18px;">Experiance : </span><br>
<div id="mar"><span  style="color:#4F4F4F;font-family:Arial;font-size:14px;">{{desiredLocation.pname}}</span></div>
<div id="mar" ng-if="detail.jobownerid" ng-repeat='detail in desiredLocation'><span  style="color:#4F4F4F;font-family:Arial;font-size:16px;  ">{{desiredLocation.pname}}{{detail.pname}}</span></div>



<br><span style="color:#000000;font-family:Arial;font-size:18px;">Work Location : </span><br>
<div id="mar"><span style="color:#4F4F4F;font-family:Arial;font-size:14px;">{{desiredLocation.pdur}}</span></div>
<div id="mar" ng-if="detail.jobownerid" ng-repeat='detail in desiredLocation'><span style="color:#4F4F4F;font-family:Arial;font-size:14px;">{{desiredLocation.pdur}} {{detail.pdur}}</span></div>


<br><span style="color:#000000;font-family:Arial;font-size:18px;">Description : </span><br>
<div id="mar"><span  style="color:#4F4F4F;font-family:Arial;font-size:14px;">{{desiredLocation.pdes}}</span></div>
<div id="mar" ng-if="detail.jobownerid" ng-repeat='detail in desiredLocation'><span  style="color:#4F4F4F;font-family:Arial;font-size:14px;">{{detail.pdes}}</span></div>




<br><span style="color:#000000;font-family:Arial;font-size:18px;">Contact : </span><br>
<div ng-if="desiredLocation.jobownerid" >
<div id="mar"><span style="color:#000000;font-family:Arial;font-size:14px;"><a class="style1" id="btn" href ng-click="displayjobsmessageview2(desiredLocation.jobid,desiredLocation.jobownerid,<?php echo $emailid; ?>,desiredLocation.jobownerid);  ">Message</a></span></div>
</div>

<div ng-if="detail.jobownerid" ng-repeat='detail in desiredLocation'>
<div id="mar"><span style="color:#000000;font-family:Arial;font-size:14px;"><a class="style1" id="btn" href ng-click="displayjobsmessageview2(detail.jobid,detail.jobownerid,<?php echo $emailid; ?>,detail.jobownerid);  ">Message</a></span></div>
</div>
        
        
        
        
</div>



<div id="Layer2" style="position:fixed;text-align:left;left:auto;right:0px;top:auto;bottom:0px;width:27.7251%;height:294px;z-index:27;">
<iframe name="InlineFrame1" id="InlineFrame1" style="position:absolute;left:0px;top:1px;width:350px;height:292px;z-index:12;" ng-src="{{detailFrame}}"></iframe>
</div>


    </body>
</html>