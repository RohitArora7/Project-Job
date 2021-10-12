<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_name']) && $_POST['form_name'] == 'loginform')
{
$mysql_server = 'localhost';
$mysql_username = 'rohit';
$mysql_password = 'rohit';
$mysql_database = 'ticket_database2';
$mysql_table = 'outt';
$success_page = './welcome.php';

$crypt_pass = $_POST['password'];

$error_page = './index.php';

$found = false;

$fullname = '';
$loginid = '';

$session_timeout = 6000;

$db = mysqli_connect($mysql_server,$mysql_username,$mysql_password,$mysql_database)or die('could not connect to database');



 $sql = "SELECT  id, password, firstname, active FROM ".$mysql_table." WHERE email = '".$_POST['email']."'";
  
 $result=mysqli_query($db, $sql);
  
  if ($data = mysqli_fetch_array($result))
   {
      if ($crypt_pass == $data['password'] && $data['active'] != 0)             //both password are equal
      {
         $found = true;
         $fullname = $data['firstname'];
         $loginid = $data['id'];
      }
   }

 mysqli_close($db);
 
 
 
 if($found == false)
   {
      header('Location: '.$error_page);
      exit;
   }
   else
   {
       
      if (session_id() == "")
      {
         session_start();
      }
      
      $_SESSION['fullname'] = $fullname;
      $_SESSION['loginid'] = $loginid;
      $_SESSION['email'] = $_POST['email'];    //has to unique so that when we pass we call that person info
      $_SESSION['expires_by'] = time() + $session_timeout;
      $_SESSION['expires_timeout'] = $session_timeout; 
  
      
      header('Location: '.$success_page);                //it found that email present with correct password enter
      exit;
      
      }
   
   
   
   
   
   }
 
 
 



?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>
<link href="new_singlepage_fullscreen.css" rel="stylesheet">
<link href="Login.css" rel="stylesheet">
</head>
<body>

<div id="PageHeader1" style="position:fixed;text-align:left;left:0;top:0;right:0;height:106px;z-index:7777;">
<div id="objective_Text3" style="position:absolute;left:82px;top:29px;width:187px;height:48px;z-index:2;">
<span style="color:#000000;font-family:'Bookman Old Style';font-size:43px;">Job-xyz</span></div>
<div id="Layer5" style="position:relative;text-align:center;width:382px;height:88px;float:right;display:block;z-index:3;">
<div id="Layer5_Container" style="width:382px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="objective_CssMenu1" style="position:absolute;left:94px;top:35px;width:139px;height:36px;z-index:0;">
<ul>
<li class="firstmain"><a href="./index.php" target="_self">Sign&nbsp;Up</a>
</li>
</ul>
</div>
<div id="objective_CssMenu3" style="position:absolute;left:233px;top:35px;width:119px;height:36px;z-index:1;">
<ul>
<li class="firstmain"><a href="./Login.php" target="_self">LogIn</a>
</li>
</ul>
</div>
</div>
</div>
</div>
<div id="Layer1" style="position:relative;text-align:left;width:100%;height:847px;float:left;clear:left;display:block;z-index:62;">
<div id="objective_Text1" style="position:absolute;left:479px;top:175px;width:363px;height:42px;z-index:10;">
<span style="color:#4F4F4F;font-family:Arial;font-size:37px;">Start a New Project</span></div>
<hr id="Line1" style="position:absolute;left:440px;top:296px;width:406px;height:1px;z-index:11;">
<div id="objective_Text2" style="position:absolute;left:342px;top:249px;width:620px;height:18px;z-index:12;">
<span style="color:#808080;font-family:Arial;font-size:16px;">Our submission form is around 4-5 questions and takes about 2-3 minutes to complete.</span></div>

<div id="objective_Text2" style="position:absolute;left:1042px;top:249px;width:420px;height:18px;z-index:20;">

    <span style="color:#000000;font-family:Arial;font-size:16px;">Login - ( For Testing )</span><br>
    <span style="color:#808080;font-family:Arial;font-size:14px;">Email</span> : aaa@gmail.com<br>
    <span style="color:#808080;font-family:Arial;font-size:14px;">Password</span> : aaa</span>
</div>


<hr id="Line2" style="position:absolute;left:289px;top:22px;width:14px;height:515px;z-index:13;">
<hr id="Line3" style="position:absolute;left:214px;top:11px;width:14px;height:415px;z-index:14;">
<div id="objective_Form1" style="position:absolute;left:459px;top:390px;width:358px;height:180px;z-index:15;">

    
    
    
    <form name="contact" method="post" action="<?php echo basename(__FILE__); ?>" id="Form1">
<input type="hidden" name="form_name" value="loginform">  <!--  security that this form has send it -->
        <label for="Editbox4" id="Label4" style="position:absolute;left:56px;top:58px;width:60px;height:18px;line-height:18px;z-index:4;">Email :</label>
<input type="text" id="Editbox4" style="position:absolute;left:150px;top:58px;width:160px;height:18px;line-height:18px;z-index:5;" name="email" value="" spellcheck="false">
<label for="Editbox5" id="Label5" style="position:absolute;left:57px;top:89px;width:80px;height:18px;line-height:18px;z-index:6;">Password :</label>
<input type="password" id="Editbox5" style="position:absolute;left:150px;top:89px;width:160px;height:18px;line-height:18px;z-index:7;" name="password" value="" spellcheck="false">
<input type="submit" id="Button1" name="" value="Send" style="position:absolute;left:148px;top:128px;width:96px;height:25px;z-index:8;">
<div id="objective_Text18" style="position:absolute;left:133px;top:11px;width:89px;height:29px;z-index:9;">
<span style="color:#FFFFFF;font-family:Verdana;font-size:24px;">Log In</span></div>
</form>







</div>
<div id="objective_JavaScript1" style="position:absolute;left:431px;top:726px;width:665px;height:84px;z-index:16;">
<div style="position:relative;left:0;top:0;">
<span id="text_highlighter" style="position:absolute;left:0;top:0;font-size:26px;font-family:Arial;font-weight:bold;font-style:normal;text-decoration:none;background-color:#FAF8F5;clip:rect(0px 0px auto 0px)"></span>
</div>
</div>
</div>

<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:left;left:0px;top:936px;width:100%;height:246px;z-index:65;">
<div id="objective_Text9" style="position:absolute;left:681px;top:61px;width:165px;height:133px;z-index:57;">
<span style="color:#000000;font-family:Arial;font-size:17px;">Our Team<br>Terms &amp; Conditions<br>Privacy Policy<br>Project Protection<br>Press Kit<br>FAQs<br></span></div>
<div id="objective_Text10" style="position:absolute;left:885px;top:61px;width:214px;height:144px;z-index:58;">
<span style="color:#000000;font-family:Arial;font-size:16px;">Labs<br>How Much To Make<br>Moodboard<br>How to Build an Online Business<br>Validate your Business Idea Course<br></span></div>
<div id="objective_Text11" style="position:absolute;left:82px;top:103px;width:393px;height:36px;z-index:59;">
<span style="color:#000000;font-family:Arial;font-size:16px;">We&#8217;re Tiny along with Dribbble, Designer News, MetaLab, Pixel Union, We Work Remotely, and more.</span></div>
<div id="objective_Text12" style="position:absolute;left:75px;top:43px;width:187px;height:48px;z-index:60;">
<span style="color:#000000;font-family:'Bookman Old Style';font-size:43px;">Job-xyz</span></div>
</div>
<script src="jquery-1.12.4.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script src="wwb12.min.js"></script>
<script src="Login.js"></script>
</body>
</html>