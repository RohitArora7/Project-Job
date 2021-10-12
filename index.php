<?php
$mysql_server = 'localhost';
$mysql_username = 'id12185376_id1964882_rohit';
$mysql_password = 'abc2020';
$mysql_database = 'id12185376_id1964882_test';
$mysql_table = 'outt';
$success_page = './Login.php';
$error_message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_name']) && $_POST['form_name'] == 'signupform')
{

   $newfirstname = $_POST['First_name'];
   $newlastname = $_POST['Last_Name'];
   $newcompanyname = $_POST['Company_Name'];
   $newemail = $_POST['Email'];
   $newpassword = $_POST['Password'];
   $confirmpassword = $_POST['Cpassword'];
  
   
   
   
     if ($newpassword != $confirmpassword)
   {
      $error_message = 'Password and Confirm Password are not the same!';
   }
    
   
   
    if (empty($error_message))
   {
      $db = mysqli_connect($mysql_server,$mysql_username,$mysql_password,$mysql_database)or die('could not connect to database');
      
      
      $sql = "SELECT email FROM ".$mysql_table." WHERE email = '".$newemail."'";
      $result=mysqli_query($db, $sql);
      if ($data = mysqli_fetch_array($result))
      {
         $error_message = 'email already used. Please select another email.';
      }
   }
  
    
  if (empty($error_message))
   {
      $sql = "INSERT `".$mysql_table."` (`firstname`,`lastname`,`companyname`, `password`, `email`) VALUES ('$newfirstname ', '$newlastname', '$newcompanyname', '$newpassword', '$newemail')";
      $result=mysqli_query($db, $sql);
      mysqli_close($db);
   } 
   
   
   
    
    if (empty($error_message))
     {
   header('Location: '.$success_page);
      exit;  
   }

   
     }
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>
<link href="new_singlepage_fullscreen.css" rel="stylesheet">
<link href="index.css" rel="stylesheet">
</head>
<body>

<div id="PageHeader1" style="position:fixed;text-align:left;left:0;top:0;right:0;height:106px;z-index:7777;">
<div id="objective_Text3" style="position:absolute;left:82px;top:29px;width:187px;height:48px;z-index:2;">
<span style="color:#000000;font-family:'Bookman Old Style';font-size:33px;">Jobbb-want</span></div>
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
<div id="Layer1" style="position:relative;text-align:left;width:100%;height:847px;float:left;clear:left;display:block;z-index:78;">
<div id="objective_Text1" style="position:absolute;left:479px;top:175px;width:363px;height:42px;z-index:18;">
<span style="color:#4F4F4F;font-family:Arial;font-size:37px;">Start a New Project</span></div>
<hr id="Line1" style="position:absolute;left:440px;top:296px;width:406px;height:1px;z-index:19;">
<div id="objective_Text2" style="position:absolute;left:342px;top:249px;width:620px;height:18px;z-index:20;">
<span style="color:#808080;font-family:Arial;font-size:16px;">Our submission form is around 4-5 questions and takes about 2-3 minutes to complete.</span></div>

<div id="objective_Text2" style="position:absolute;left:1042px;top:249px;width:420px;height:18px;z-index:20;">

    <span style="color:#000000;font-family:Arial;font-size:16px;">Login - ( For Testing )</span><br>
    <span style="color:#808080;font-family:Arial;font-size:14px;">Email</span> : aaa@gmail.com<br>
    <span style="color:#808080;font-family:Arial;font-size:14px;">Password</span> : aaa</span>
</div>


<hr id="Line2" style="position:absolute;left:289px;top:22px;width:14px;height:515px;z-index:21;">
<hr id="Line3" style="position:absolute;left:214px;top:11px;width:14px;height:415px;z-index:22;">
<div id="objective_Form1" style="position:absolute;left:460px;top:344px;width:358px;height:321px;z-index:23;">

        
        
        
        <form name="contact" method="post" action="<?php echo basename(__FILE__); ?>"  id="Form1">
<input type="hidden" name="form_name" value="signupform">
<label for="Editbox1" id="Label1" style="position:absolute;left:24px;top:58px;width:110px;height:18px;line-height:18px;z-index:4;">First name :</label>
<input type="text" id="Editbox1" style="position:absolute;left:154px;top:58px;width:160px;height:18px;line-height:18px;z-index:5;" name="First_name" value="" spellcheck="false">
<label for="Editbox2" id="Label2" style="position:absolute;left:21px;top:89px;width:110px;height:18px;line-height:18px;z-index:6;">Last name :</label>
<input type="text" id="Editbox2" style="position:absolute;left:154px;top:89px;width:160px;height:18px;line-height:18px;z-index:7;" name="Last_Name" value="" spellcheck="false">
<label for="Editbox3" id="Label3" style="position:absolute;left:20px;top:120px;width:123px;height:18px;line-height:18px;z-index:8;">Company name :</label>
<input type="text" id="Editbox3" style="position:absolute;left:154px;top:120px;width:160px;height:18px;line-height:18px;z-index:9;" name="Company_Name" value="" spellcheck="false" placeholder="optional">
<label for="Editbox4" id="Label4" style="position:absolute;left:20px;top:151px;width:110px;height:18px;line-height:18px;z-index:10;">Email :</label>
<input type="text" id="Editbox4" style="position:absolute;left:154px;top:151px;width:160px;height:18px;line-height:18px;z-index:11;" name="Email" value="" spellcheck="false">
<label for="Editbox5" id="Label5" style="position:absolute;left:21px;top:182px;width:110px;height:18px;line-height:18px;z-index:12;">Password :</label>
<input type="password" id="Editbox5" style="position:absolute;left:154px;top:182px;width:160px;height:18px;line-height:18px;z-index:13;" name="Password" value="" spellcheck="false">
<label for="Editbox6" id="Label6" style="position:absolute;left:18px;top:213px;width:132px;height:17px;line-height:17px;z-index:14;">Confirm Password :</label>
<input type="password" id="Editbox6" style="position:absolute;left:154px;top:213px;width:160px;height:18px;line-height:18px;z-index:15;" name="Cpassword" value="" spellcheck="false">
<?php echo $error_message; ?>
<input type="submit" id="Button1" name="" value="Send" style="position:absolute;left:138px;top:261px;width:96px;height:25px;z-index:16;">
<div id="objective_Text18" style="position:absolute;left:120px;top:10px;width:159px;height:32px;z-index:17;">
<span style="color:#FFFFFF;font-family:Verdana;font-size:27px;">Sign Up</span></div>
</form>

        
        
        
        
        
        </div>
<div id="objective_JavaScript1" style="position:absolute;left:431px;top:726px;width:665px;height:84px;z-index:24;">
<div style="position:relative;left:0;top:0;">
<span id="text_highlighter" style="position:absolute;left:0;top:0;font-size:26px;font-family:Arial;font-weight:bold;font-style:normal;text-decoration:none;background-color:#FAF8F5;clip:rect(0px 0px auto 0px)"></span>
</div>
</div>
</div>
<div id="Layer2" style="position:relative;text-align:left;width:100%;height:549px;float:left;clear:left;display:block;z-index:79;">
<div id="Layer3" style="position:relative;text-align:right;width:901px;height:18px;float:right;display:block;z-index:42;">
</div>
<div id="Layer4" style="position:relative;text-align:right;width:18px;height:246px;float:right;clear:both;display:block;z-index:43;">
</div>
<div id="objective_Image1" style="position:absolute;left:129px;top:50px;width:166px;height:141px;visibility:hidden;z-index:44;">
<img src="images/img.png" id="Image1" alt=""></div>
<div id="objective_Image2" style="position:absolute;left:233px;top:167px;width:169px;height:143px;visibility:hidden;z-index:45;">
<img src="images/img2.png" id="Image2" alt=""></div>
<div id="objective_Image3" style="position:absolute;left:121px;top:252px;width:205px;height:192px;visibility:hidden;z-index:46;">
<img src="images/img3.png" id="Image3" alt=""></div>
<div id="objective_Text4" style="position:absolute;left:298px;top:116px;width:70px;height:32px;z-index:47;">
<span style="color:#4F4F4F;font-family:Arial;font-size:27px;">24/7</span></div>
<div id="objective_Text5" style="position:absolute;left:209px;top:434px;width:113px;height:27px;z-index:48;">
<span style="color:#4F4F4F;font-family:Arial;font-size:24px;">Best Job-want</span></div>
<div id="objective_Text6" style="position:absolute;left:89px;top:215px;width:173px;height:27px;z-index:49;">
<span style="color:#4F4F4F;font-family:Arial;font-size:24px;">help at the click </span></div>
<div id="Layer6" style="position:absolute;text-align:left;left:815px;top:99px;width:340px;height:113px;z-index:50;">
<div id="objective_Shape1" style="position:absolute;left:326px;top:2px;width:11px;height:12px;z-index:39;">
<img src="images/img0001.png" id="Shape1" alt="" style="width:11px;height:12px;"></div>
<div id="objective_Text7" style="position:absolute;left:47px;top:38px;width:250px;height:36px;z-index:40;">
<span style="color:#000000;font-family:Arial;font-size:16px;"><strong>High fidelity wireframes</strong></span><span style="color:#000000;font-family:Arial;font-size:15px;"><br>Wireframes of the payment process</span></div>
</div>
<div id="Layer7" style="position:absolute;text-align:left;left:665px;top:252px;width:340px;height:113px;z-index:51;">
<div id="objective_Text8" style="position:absolute;left:40px;top:17px;width:276px;height:69px;z-index:41;">
<span style="color:#000000;font-family:Arial;font-size:15px;">Hey Tymn, remember that we are just </span><span style="color:#FF0000;font-family:Arial;font-size:15px;">waiting on deliverables</span><span style="color:#000000;font-family:Arial;font-size:15px;"> from you to go on.<br> <br><strong>MARLEE AT 11:29AM</strong></span></div>
</div>
<div id="objective_Image4" style="position:absolute;left:669px;top:95px;width:138px;height:120px;z-index:52;">
<img src="images/Untitled-1.png" id="Image4" alt=""></div>
<div id="objective_Image5" style="position:absolute;left:1029px;top:257px;width:101px;height:103px;z-index:53;">
<img src="images/3Untitled-1.png" id="Image5" alt=""></div>
<div id="objective_Bookmark1" style="position:absolute;left:460px;top:45px;width:47px;height:33px;z-index:54;">
<a id="Bookmark1" style="visibility:hidden">&nbsp;</a>
</div>
<div id="objective_Bookmark2" style="position:absolute;left:519px;top:62px;width:47px;height:33px;z-index:55;">
<a id="Bookmark2" style="visibility:hidden">&nbsp;</a>
</div>
<div id="objective_Bookmark3" style="position:absolute;left:566px;top:29px;width:47px;height:33px;z-index:56;">
<a id="Bookmark3" style="visibility:hidden">&nbsp;</a>
</div>
<div id="objective_Bookmark4" style="position:absolute;left:1210px;top:507px;width:47px;height:33px;z-index:57;">
<a id="Bookmark4" style="visibility:hidden">&nbsp;</a>
</div>
</div>
<div id="Layer8" style="position:relative;text-align:left;width:100%;height:518px;float:left;clear:left;display:block;z-index:80;">
<div id="Layer9" style="position:relative;text-align:left;width:738px;height:18px;float:left;display:block;z-index:63;">
</div>
<div id="objective_Text13" style="position:absolute;left:58px;top:290px;width:279px;height:189px;z-index:64;">
<span style="color:#006400;font-family:Arial;font-size:15px;"><strong><br></strong></span><span style="color:#4F4F4F;font-family:Arial;font-size:15px;"><strong>Internship in Holidify: Travel Writing Internship in Jaipur</strong></span><span style="color:#006400;font-family:Arial;font-size:15px;"><strong><br></strong></span><span style="color:#000000;font-family:Arial;font-size:13px;"><br></span><span style="color:#000000;font-family:Arial;font-size:15px;">Want to get ahead in your career as a writer? An internship with Holidify will give your career a big boost and teach you the fun and the serious aspects of travel and travel writing.<br><br></span><span style="color:#4169E1;font-family:Arial;font-size:15px;">read more</span></div>
<div id="objective_Text15" style="position:absolute;left:656px;top:298px;width:250px;height:171px;z-index:65;">
<span style="color:#4F4F4F;font-family:Arial;font-size:15px;"><strong>Internship at Wipro: Learn While You Earn</strong></span><span style="color:#04ADA4;font-family:Arial;font-size:15px;"><strong><br></strong></span><span style="color:#000000;font-family:Arial;font-size:13px;"><br></span><span style="color:#000000;font-family:Arial;font-size:15px;">Wipro Ltd. is inviting you to be a part of its ever-growing team with a fresh internship. Put on your sales hat and get ready for this once in a lifetime opportunity.<br><br></span><span style="color:#4169E1;font-family:Arial;font-size:15px;">read more</span></div>
<div id="objective_Text14" style="position:absolute;left:377px;top:298px;width:250px;height:171px;z-index:66;">
<span style="color:#4F4F4F;font-family:Arial;font-size:15px;"><strong>College Admissions | Last days and Cut-Offs for DU Colleges</strong></span><span style="color:#000000;font-family:Arial;font-size:13px;"><br><br></span><span style="color:#000000;font-family:Arial;font-size:15px;">With the onset of the hunt for the perfect college, DU Colleges have released their first cut-off lists for College Admissions 2017. Read on to know the deets and deadlines.<br><br></span><span style="color:#4169E1;font-family:Arial;font-size:15px;">read more</span></div>
<div id="objective_Text16" style="position:absolute;left:945px;top:298px;width:250px;height:137px;z-index:67;">
<span style="color:#4F4F4F;font-family:Arial;font-size:15px;"><strong>Pan-India Internships | Earn up to Rs. 30,000 (June 28)</strong></span><span style="color:#000000;font-family:Arial;font-size:13px;"><br><br></span><span style="color:#000000;font-family:Arial;font-size:15px;">Explore through these wondrous Pan-India Internships to suit your interest and have a great internship!<br><br></span><span style="color:#4169E1;font-family:Arial;font-size:15px;">read more</span></div>
<div id="objective_Text17" style="position:absolute;left:562px;top:44px;width:250px;height:32px;z-index:68;">
<span style="color:#000000;font-family:Arial;font-size:27px;">From the Blog</span></div>
<div id="objective_Image6" style="position:absolute;left:104px;top:134px;width:162px;height:132px;z-index:69;">
<img src="images/x0jtnb2rls.jpg" id="Image6" alt=""></div>
<div id="objective_Image7" style="position:absolute;left:416px;top:136px;width:158px;height:129px;z-index:70;">
<img src="images/s6t019sni8.jpg" id="Image7" alt=""></div>
<div id="objective_Image8" style="position:absolute;left:697px;top:134px;width:160px;height:133px;z-index:71;">
<img src="images/xe7nhd9uln.jpg" id="Image8" alt=""></div>
<div id="objective_Image9" style="position:absolute;left:992px;top:136px;width:156px;height:129px;z-index:72;">
<img src="images/nvd4nf1j8y.jpg" id="Image9" alt=""></div>
</div>
<div id="PageFooter1" style="position:absolute;overflow:hidden;text-align:left;left:0px;top:1936px;width:100%;height:246px;z-index:81;">
<div id="objective_Text9" style="position:absolute;left:681px;top:61px;width:165px;height:133px;z-index:73;">
<span style="color:#000000;font-family:Arial;font-size:17px;">Our Team<br>Terms &amp; Conditions<br>Privacy Policy<br>Project Protection<br>Press Kit<br>FAQs<br></span></div>
<div id="objective_Text10" style="position:absolute;left:885px;top:61px;width:214px;height:144px;z-index:74;">
<span style="color:#000000;font-family:Arial;font-size:16px;">Labs<br>How Much To Make<br>Moodboard<br>How to Build an Online Business<br>Validate your Business Idea Course<br></span></div>
<div id="objective_Text11" style="position:absolute;left:82px;top:103px;width:393px;height:36px;z-index:75;">
<span style="color:#000000;font-family:Arial;font-size:16px;">We&#8217;re Tiny along with Dribbble, Designer News, MetaLab, Pixel Union, We Work Remotely, and more.</span></div>
<div id="objective_Text12" style="position:absolute;left:75px;top:43px;width:187px;height:48px;z-index:76;">
<span style="color:#000000;font-family:'Bookman Old Style';font-size:43px;">Job-want</span></div>
</div>
<script src="jquery-1.12.4.min.js"></script>
<script src="jquery-ui.min.js"></script>
<script src="ib.min.js"></script>
<script src="index.js"></script>
</body>
</html>