<?php
if (session_id() == "")               //this is for diplaying name
{
   session_start();
}
$emailid = $_SESSION['loginid'];
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
             <style>
            #o13
{
   background-color: #FDFAFB;
   
 border: 1px #DCDCDC solid;
 
   -moz-box-shadow: 1px 0px 2px red;
   -webkit-box-shadow: 1px 0px 2px #DCDCDC;
   box-shadow: 0px 1px 1px black;
}
#o14
{
   background-color: #EAEAF0;
   background-image: none;
   border: 1px #049AA2 solid;
   
   border-bottom: 2px #049AA2 ridge;
   border-left:1px #C0C0C0 solid;
   border-top: 0px;
   border-right: 1px #C0C0C0 solid;
   
}
#objective_o1 
{
   background-color: transparent;
   background-image: none;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: left;
}
#objective_o1 div
{
   text-align: left;
}
#objective_o2 
{
   background-color: transparent;
   background-image: none;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: left;
}
#objective_o2 div
{
   text-align: left;
}
#objective_o3 
{
   background-color: transparent;
   background-image: none;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: left;
}
#objective_o3 div
{
   text-align: left;
}
#objective_o4 
{
   background-color: transparent;
   background-image: none;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: left;
}
#objective_o4 div
{
   text-align: left;
}
#objective_o9 
{
   background-color: transparent;
   background-image: none;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: left;
}
#objective_o9 div
{
   text-align: left;
}
#objective_o11 
{
   background-color: transparent;
   background-image: none;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: left;
}
#objective_o11 div
{
   text-align: left;
}
#objective_o5 
{
   background-color: transparent;
   background-image: none;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: left;
}
#objective_o5 div
{
   text-align: left;
}
#objective_o6 
{
   background-color: transparent;
   background-image: none;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: left;
}
#objective_o6 div
{
   text-align: left;
}
#objective_o7 
{
   background-color: transparent;
   background-image: none;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: left;
}
#objective_o7 div
{
   text-align: left;
}
#objective_o8 
{
   background-color: transparent;
   background-image: none;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: left;
}
#objective_o8 div
{
   text-align: left;
}
#objective_o10 
{
   background-color: transparent;
   background-image: none;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: left;
}
#objective_o10 div
{
   text-align: left;
}
#objective_o12 
{
   background-color: transparent;
   background-image: none;
   border: 0px #000000 solid;
   padding: 0;
   margin: 0;
   text-align: left;
}
#objective_o12 div
{
   text-align: left;
}

        </style>

        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript">
function reload() 
{
    document.getElementById('InlineFrame1').src += '';
} 
	</script>
    </head>
    <body>
       <div ng-init="callmebdisplayemployee();"></div>

       <div style="float:right;">{{one}}----{{two}}----{{three}}</div>
        
       
       <div style="position:absolute;left:10px;top:-29px;width:681px;height:50px;z-index:11">
             
             <h6 ><a class="button button1"  href="#displayemployee" >Employees Available</a></h6>
             <h6 ><a class="button button1"  href="#displayemployeemessage" >Message</a></h6>
         </div>
          
          <br><br>  
            
   
        
      <div style="position:relative;left:0px;top:4px" dir-paginate="detail in displayemployeeback | filter:q | itemsPerPage: pageSize" current-page="currentPage" >
             

           
           
           
<div style="position:relative;left:0px;top:0px"> 
           
      
           
           
           
<div id="o13" style="position:relative;text-align:left;left:15px;top:12px;width:484px;height:127px;z-index:12;">
<div id="objective_o7" style="position:relative;left:133px;top:71px;width:90px;height:16px;z-index:0;">
<span style="color:#4F4F4F;font-family:Arial;font-size:13px;">{{ detail.pdur}}</span></div>
<div  id="objective_o8" style="position:relative;left:103px;top:95px;width:352px;height:32px;z-index:1;">
</div>
<div id="objective_o6" style="position:relative;left:134px;top:-3px;width:129px;height:16px;z-index:2;">
<span style="color:#696969;font-family:Arial;font-size:13px;">{{ detail.pname}}</span></div>
<div id="objective_o10" style="position:relative;left:433px;top:-54px;width:30px;height:16px;z-index:3;">
<span style="color:#000000;font-family:Arial;font-size:13px;">{{ detail.ppay}}</span></div>
<div id="objective_o9" style="position:relative;left:405px;top:-70px;width:30px;height:16px;z-index:4;">
<span style="color:#000000;font-family:Arial;font-size:13px;"></span></div>
<div id="objective_o4" style="position:relative;left:21px;top:-74px;width:189px;height:16px;z-index:5;">
<span style="color:#000000;font-family:Arial;font-size:13px;"><strong>Name</strong>:</span></div>

<div id="objective_o4" style="position:relative;left:21px;top:-17px;width:109px;height:16px;z-index:5;">
<span style="color:#000000;font-family:Arial;font-size:13px;"><strong>Category</strong>:</span></div>

<div id="objective_o6" style="position:relative;left:131px;top:-31px;width:229px;height:16px;z-index:2;">
    <span style="color:#4F4F4F;font-family:Arial;font-size:13px;"> {{ detail.pcat}}<span style="color:#0000FF;font-family:Arial;font-size:13px;">&nbsp&nbsp <a href class="style1" id="btn"  ng-click="displayemployeefull(detail)"> Read More</a></span></div>



<div id="objective_o3" style="position:relative;left:21px;top:-73px;width:109px;height:16px;z-index:6;">
<span style="color:#000000;font-family:Arial;font-size:13px;"><strong>Work Location</strong> : </span></div>
<div id="objective_o2" style="position:relative;left:21px;top:-114px;width:69px;height:16px;z-index:7;">
<span style="color:#000000;font-family:Arial;font-size:13px;"><strong>Experiance</strong>: </span></div>
<div id="objective_o1" style="position:relative;left:134px;top:-154px;width:211px;height:22px;z-index:8;">
<span style="color:#4F4F4F;font-family:Arial;font-size:13px;"> <a class="style1" href  id="click" ng-click="profileviewpass(detail.jobownerid) "> {{detail.firstname}}</a></span></div>
</div>

    
<div id="o14" style="position:relative;text-align:left;left:15px;top:11px;width:484px;height:26px;z-index:13;">
<div id="objective_o11" style="position:relative;left:373px;top:5px;width:20px;height:16px;z-index:9;">
<span style="color:#000000;font-family:Arial;font-size:13px;"></span></div>
<div id="objective_o12" style="position:relative;left:393px;top:-10px;width:80px;height:16px;z-index:10;">
<span style="color:#0000CD;font-family:Arial;font-size:13px;"></span></div>
<div id="objective_o5" style="position:relative;left:9px;top:-28px;width:69px;height:17px;z-index:11;">
<span style="color:#0000FF;font-family:Arial;font-size:15px;"><a class="style1" id="btn" href ng-click="displayjobsmessageview2(detail.jobid,detail.jobownerid,<?php echo $emailid; ?>,detail.jobownerid);  ">Message</a>  </span></div>
</div>
           
           
           
           
           
           
           
           
    <br>
    <br>

</div>   
            
</div>


<div class="bootstrap-iso" style="background-color:#EEEEEE; ">

          <dir-pagination-controls boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)" template-url="dirPagination.tpl.html"></dir-pagination-controls>
</div>
    
    
            


       
   
  <div id="Layer2" style="position:fixed;text-align:left;left:auto;right:0px;top:auto;bottom:0px;width:27.7251%;height:294px;z-index:27;">
<iframe name="InlineFrame1" id="InlineFrame1" style="position:absolute;left:0px;top:1px;width:350px;height:292px;z-index:12;" ng-src="{{detailFrame}}"></iframe>
</div>

    </body>
</html>
