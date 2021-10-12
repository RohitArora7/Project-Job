<?php
if (session_id() == "")
{
   session_start();
}
if (!isset($_SESSION['email']))
{
   header('Location: ./Login.php');
   exit;
}

if (isset($_SESSION['expires_by']))
{
   $expires_by = intval($_SESSION['expires_by']);
   if (time() < $expires_by)
   {
      $_SESSION['expires_by'] = time() + intval($_SESSION['expires_timeout']);
   }
   else
   {
      unset($_SESSION['username']);
      unset($_SESSION['expires_by']);
      unset($_SESSION['expires_timeout']);
      header('Location: ./Login.php');
      exit;
   }
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_name']) && $_POST['form_name'] == 'logoutform')
{
   if (session_id() == "")
   {
      session_start();
   }
   unset($_SESSION['email']);
   unset($_SESSION['fullname']);
   header('Location: ./Login.php');
   exit;
}
if (session_id() == "")               //this is for diplaying name
{
   session_start();
}






?>
<!doctype html>
<html >
<head>
<meta charset="utf-8">
<title>page</title>
<meta name="generator" content="">
<link href="new_singlepage_fullscreen.css" rel="stylesheet">
<link href="page7.css" rel="stylesheet">



<!-- Include jQuery library -->
<script src="js/jQuery/jquery.min.js"></script>
<!-- Include AngularJS library -->

<script src="lib/angular/angular.min.js"></script>
<script src="lib/angular/angular-route.js"></script>
<script src="lib/angular/angular-sanitize.js"></script>
<script src="lib/angular/angular-cookies.js"></script>
<script src="lib/angular/angular-ui-router.js"></script>
<script src="lib/angular/dirPagination.js"></script>
<script src="js/angularscript.js"></script>

<link rel="stylesheet" href="lib/angular/bootstrap-iso.css">

<script src="lib/angular/ngStorage.js"></script>

  


   
  


   <style>
 
  
#Table1
{
   border: 1px #A9A9A9 none;
   background-color: transparent;
   background-image: none;
   border-collapse: collapse;
   border-spacing: 5px;
}
#Table1 td
{
   padding: 0px 0px 0px 0px;
}
#Table1 td div
{
   white-space: nowrap;
}
#Table1 .cell0
{
   background-color: #EEEEEE;
   background-image: none;
   border: 1px #EEEEEE solid;
   border-bottom: 6px solid #049AA2;
   text-align: left;
   vertical-align: middle;
   width: 182px;
   height: 26px;
}
#Table1 .cell1
{
   background-color: #EEEEEE;
   background-image: none;
   border: 1px #EEEEEE solid;
   border-bottom: 0.4px solid #A9A9A9;
   text-align: center;
   vertical-align: middle;
   width: 222px;
   height: 26px;
}
#Table1 .cell2
{
   background-color: #EAEAF0;
   background-image: none;
   
   text-align: left;
   vertical-align: middle;
   width: 182px;
   height: 46px;
    border-left:1px #C0C0C0 solid;
}
#Table1 .cell3
{
   background-color: #EAEAF0;
   background-image: none;
   border-right:1px #C0C0C0 solid;
   text-align: center;
   vertical-align: middle;
   width: 222px;
   height: 46px;
}
#Table1 .cell4
{
   background-color:  #FDFAFB;
   background-image: none;
   border: 1px #C0C0C0 solid;
   text-align: left;
   vertical-align: middle;
   height: 60px;
}
#Table1 .cell5
{
   background-color: #F5F5F5;
   background-image: none;
   border: 1px #A9A9A9 solid;
   text-align: left;
   vertical-align: middle;
   height: 24px;
}
  
#Table1 .footer
{
   
    text-align: center;
   vertical-align: center;
   border: 1px #A9A9A9 none;
   border-collapse: collapse;
}
        </style>

 <style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 70%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 5px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #5F9EA0;
    color: white;
}


#customers .footer
{
   
    text-align: center;
   vertical-align: center;
   border: 1px #A9A9A9 none;
   border-collapse: collapse;
}
</style>
<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 6px 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    transition: box-shadow .3s;
  border-radius:3px;
  border: 1px solid #ccc;
  background-color: #FDFAFB;
  color: #0000FF;
     text-decoration: none;
     box-shadow: 0 0 1px rgba(33,33,33,.2); 
     padding: 8px;
}

.button1:hover {
    background-color: #FAF8F5;
    color: #0000FF;
      text-decoration: none;
      box-shadow: 0 0 5px rgba(33,33,33,.2); 
}

</style>
<style>
    #statusbox{
   
   padding:10px;
   padding-left: 23px;
   background-color: #FDFAFB;
   background-image: none;
   -moz-box-shadow: 0px 1px 2px #808080;
   -webkit-box-shadow: 0px 1px 2px #808080;
   box-shadow: 0px 1px 2px #808080;
    }
    
    #picturebox
    {
   background-color: #FDFAFB;
   background-image: none;
   -moz-box-shadow: 0px 1px 2px #808080;
   -webkit-box-shadow: 0px 1px 2px #808080;
   box-shadow: 0px 1px 2px #808080;
   
   
    }
    
</style>



<link href="./css/style_1.css" rel="stylesheet">
<script src="./js/jquery.min.js"></script>
<script src="./js/jquery.form.js"></script>
<script>
$(document).on('change', '#image_upload_file', function () {
var progressBar = $('.progressBar'), bar = $('.progressBar .bar'), percent = $('.progressBar .percent');

$('#image_upload_form').ajaxForm({
    beforeSend: function() {
		progressBar.fadeIn();
        var percentVal = '0%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    uploadProgress: function(event, position, total, percentComplete) {
        var percentVal = percentComplete + '%';
        bar.width(percentVal)
        percent.html(percentVal);
    },
    success: function(html, statusText, xhr, $form) {		
		obj = $.parseJSON(html);	
		if(obj.status){		
			var percentVal = '100%';
			bar.width(percentVal)
			percent.html(percentVal);
			$("#imgArea>img").prop('src',obj.image_medium);	
                        
                      //  alert(obj.image_medium);
		}else{
			alert(obj.error);
		}
    },
	complete: function(xhr) {
		progressBar.fadeOut();			
	}	
}).submit();		

});
</script>


</head>
<body ng-app="myApp">

    
    
    
    
    

<div id="Html2" style="position:absolute;left:287px;top:204px;width:609px;height:457px;z-index:17">

   
    
    

<div ng-view></div>




</div>

<div id="objective_Text4" style="position:absolute;left:24px;top:320px;width:180px;height:56px;z-index:19;">
   
<span style="color:#0000FF;font-family:Arial;font-size:16px;"><a href="#jobgive" class="style1"> Post Job</a></span><br><br>
<span style="color:#0000FF;font-family:Arial;font-size:16px;"><a href="#jobwant" class="style1"> Post Employee Profile</a></span><br><br>

</div>

<div id="objective_Text4" style="position:absolute;left:24px;top:425px;width:180px;height:179px;z-index:19;">
    <span style="color:#0000FF;font-family:Arial;font-size:16px;"><a style="color:black;" class="style1"> Edit Profile</a></span><br><br>
    <span style="color:#0000FF;font-family:Arial;font-size:16px;"><a style="color:black;" class="style1"> Change Password</a></span><br><br>
    <span style="color:#0000FF;font-family:Arial;font-size:16px;"><a style="color:black;" class="style1"> Privacy Check</a></span><br><br>
    <span style="color:#0000FF;font-family:Arial;font-size:16px;"><a href="#blockuser" class="style1"> Blocked Users</a></span><br><br>
    <span style="color:#0000FF;font-family:Arial;font-size:16px;"><a  style="color:black;"> Deactivate Account</a></span>
    
   
</div>


<?php
$emailid = $_SESSION['loginid'];
require_once './databaseFiles/database_connections.php'; 
 $query = "SELECT name FROM tbl_images where id = $emailid ";  
 $result = mysqli_query($con, $query);
$output = ''; 
while($row = mysqli_fetch_array($result))
{ 
$output = $row["name"];    
}
?>
    
    
<div id="picturebox" style="position:absolute;left:24px;top:146px;width:220px;height:166px;z-index:20">
        
<div id="imgContainer" style="position: absolute;top:8px; ">
  <form enctype="multipart/form-data" action="image_upload_demo_submit.php" method="post" name="image_upload_form" id="image_upload_form">
      <div id="imgArea" ><img src="./uploades/medium/<?php echo $output ?>" >
      <div class="progressBar">
        <div class="bar"></div>
        <div class="percent">0%</div>
      </div>
      <div id="imgChange"><span>Change Photo</span>
        <input type="file" accept="image/*" name="image_upload_file" id="image_upload_file">
      </div>
    </div>
  </form>
</div>
    
</div>

<div id="statusbox" style="position:absolute;left:972px;top:160px;width:210px;height:210px;">
<div id="objective_Text8" style="width:191px;height:28px;z-index:16;">
<span style="color:#000000;font-family:Gadugi;font-size:24px;">Message Status:</span></div><br><br>



    
<div style="position:absolute;left:28px;top:70px;" ng-controller="DbController" ng-init="notificationcall();">
    
    
<div id="objective_Text7" style="width:191px;height:22px;z-index:21;">
<span style="color:#000000;font-family:Arial;font-size:19px;">({{greeting3}})&nbsp&nbspEmployee Profile</span></div><br>
<div id="objective_Text13" style="width:191px;height:22px;z-index:22;" >
<span style="color:#000000;font-family:Arial;font-size:19px;">({{greeting}})&nbsp&nbspSearch Job </span></div><br>
<div id="objective_Text14" style="width:191px;height:22px;z-index:23;">
<span style="color:#000000;font-family:Arial;font-size:19px;">({{greeting2}})&nbsp&nbspPost Job </span></div><br>
<div id="objective_Text15" style="width:191px;height:22px;z-index:24;">
<span style="color:#000000;font-family:Arial;font-size:19px;">({{greeting4}})&nbsp&nbspSearch Employee </span></div><br>
</div>

</div>


<div id="PageHeader1" style="position:fixed;text-align:left;left:0;top:0;right:0;height:93px;z-index:7777;">
<div id="objective_Text3" style="position:absolute;left:81px;top:24px;width:187px;height:48px;z-index:0;">
<span style="color:#000000;font-family:'Bookman Old Style';font-size:43px;">Job-xyz</span></div>


<form name="logoutform" method="post" action="<?php echo basename(__FILE__); ?>" id="logoutform">
<input type="hidden" name="form_name" value="logoutform">
<input type="submit" id="Button1" name="logout" value="Logout" style="position:absolute;left:1102px;top:34px;width:96px;height:25px;z-index:1;">
</form>





</div>
<div id="Layer1" style="position:fixed;text-align:left;left:0px;top:0px;width:1264px;height:138px;z-index:25;">
<div id="objective_Text6" style="position:absolute;left:1037px;top:110px;width:161px;height:18px;z-index:2;">
<span style="color:#000000;font-family:Arial;font-size:16px;">Welcome: </span><span style="color:#000000;font-family:Arial;font-size:15px;">

<?php
if (isset($_SESSION['email']))
{
   echo $_SESSION['fullname'];

}
else
{
   echo 'Not logged in';
}
?>!

</span></div>
<div id="objective_Text16" style="position:absolute;left:296px;top:109px;width:91px;height:18px;z-index:3;">
<span style="color:#000000;font-family:Arial;font-size:16px;"><a href="#jobsavailable" class="style1">Search Job</a></span></div>
<div id="objective_Text17" style="position:absolute;left:400px;top:109px;width:128px;height:18px;z-index:4;">
<span style="color:#000000;font-family:Arial;font-size:16px;"><a href="#displayemployee" class="style1">Search Employee</a></span></div>
<!--<div id="objective_Text21" style="position:absolute;left:770px;top:109px;width:109px;height:18px;z-index:5;">
<span style="color:#000000;font-family:Arial;font-size:16px;"><a href="#allmessage"  class="style1">Message </a></span></div>-->
<!--<div id="objective_Text18" style="position:absolute;left:543px;top:109px;width:71px;height:18px;z-index:6;">
<span style="color:#000000;font-family:Arial;font-size:16px;"><a  class="style1" id="status">Status</a></span></div>-->
<!--<div id="objective_Text19" style="position:absolute;left:624px;top:109px;width:136px;height:18px;z-index:7;">
<span style="color:#000000;font-family:Arial;font-size:16px;"><a href="#jobwant" class="style1">Create Job Profile</a></span></div>-->
<hr id="Line1" style="position:absolute;left:391px;top:111px;width:1px;height:17px;z-index:8;">
<!--<hr id="Line4" style="position:absolute;left:271px;top:111px;width:1px;height:17px;z-index:9;">-->
<!--hr id="Line2" style="position:absolute;left:534px;top:111px;width:1px;height:17px;z-index:10;">
<!--<hr id="Line3" style="position:absolute;left:600px;top:111px;width:1px;height:17px;z-index:11;">-->
</div>
<div id="PageFooter1" style="position:absolute;overflow:auto;text-align:left;left:0px;top:1286px;width:100%;height:246px;z-index:2;">
<div id="objective_Text9" style="position:absolute;left:681px;top:61px;width:165px;height:133px;z-index:12;">
<span style="color:#000000;font-family:Arial;font-size:17px;">Our Team<br>Terms &amp; Conditions<br>Privacy Policy<br>Project Protection<br>Press Kit<br>FAQs<br></span></div>
<div id="objective_Text10" style="position:absolute;left:885px;top:61px;width:214px;height:144px;z-index:13;">
<span style="color:#000000;font-family:Arial;font-size:16px;">Labs<br>How Much To Make<br>Moodboard<br>How to Build an Online Business<br>Validate your Business Idea Course<br></span></div>
<div id="objective_Text11" style="position:absolute;left:82px;top:103px;width:393px;height:36px;z-index:14;">
<span style="color:#000000;font-family:Arial;font-size:16px;">We&#8217;re Tiny along with Dribbble, Designer News, MetaLab, Pixel Union, We Work Remotely, and more.</span></div>
<div id="objective_Text12" style="position:absolute;left:75px;top:43px;width:187px;height:48px;z-index:15;">
<span style="color:#000000;font-family:'Bookman Old Style';font-size:43px;">Job-xyz</span></div>
</div>
</body>
</html>