<?php
if (session_id() == "")
{
session_start();
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chat Box</title>
<style type="text/css">
<!--
.shout_box {
	background: #627BAE;
	width: 260px;
	overflow: hidden;
	position: fixed;
	bottom: 0;
	right: 20%;
	z-index:9;
}
.shout_box .header .close_btn {
	background: url(images/close_btn.png) no-repeat 0px 0px;
	float: right;
	width: 15px;
	height: 15px;
}
.shout_box .header .close_btn:hover {
	background: url(images/close_btn.png) no-repeat 0px -16px;
}

.shout_box .header .open_btn {
	background: url(images/close_btn.png) no-repeat 0px -32px;
	float: right;
	width: 15px;
	height: 15px;
}
.shout_box .header .open_btn:hover {
	background: url(images/close_btn.png) no-repeat 0px -48px;
}
.shout_box .header{
	padding: 5px 3px 5px 5px;
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
	font-weight: bold;
	color:#fff;
	border: 1px solid rgba(0, 39, 121, .76);
	border-bottom:none;
	cursor: pointer;
}
.shout_box .header:hover{
	background-color: #627BAE;
}
.shout_box .message_box {
	background: #FFFFFF;
	height: 200px;
	overflow:auto;
	border: 1px solid #CCC;
}
.shout_msg{
	margin-bottom: 10px;
	display: block;
	border-bottom: 1px solid #F3F3F3;
	padding: 0px 5px 5px 5px;
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
	color:#7C7C7C;
}
.message_box:last-child {
	border-bottom:none;
}
time{
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
	font-weight: normal;
	float:right;
	color: #D5D5D5;
}
.shout_msg .username{
	margin-bottom: 10px;
	margin-top: 10px;
}
.user_info input {
	width: 98%;
	height: 25px;
	border: 1px solid #CCC;
	border-top: none;
	padding: 3px 0px 0px 3px;
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
}
.shout_msg .username{
	font-weight: bold;
	display: block;
}
-->
</style>

<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

	// load messages every 1000 milliseconds from server.
	load_data = {'fetch':1};
        
        aaa();
        
        function aaa()
        {
          $.post('shout.php', load_data,  function(data) {
		$('.message_box').html(data);
		var scrolltoh = $('.message_box')[0].scrollHeight;
		$('.message_box').scrollTop(scrolltoh);
	 });   
        }
        
        
        
        function ccc()
        {
            $.post('sqlmessageresolveetra.php' , function(data)
         {
           if(data==true)  
           {
            aaa();
           }
         });
        
        }
        
        
        
        
        function bbb()
        {
        $.post('sqlmessageetra.php', function(data)
        {
         if (data==true) 
         {
             ccc();
         }
 
        });   
        }
        
        
        
	window.setInterval(function(){
	bbb();
	}, 1000);
	
        
        
        
	//method to trigger when user hits enter key
	$("#shout_message").keypress(function(evt) {
		if(evt.which == 13) {
				var iusername = $('#shout_username').val();
				var imessage = $('#shout_message').val();
                                
                                var ijobid = $('#jobid').val();
                                var ikisnepost = $('#kisnepost').val();
                                var ikonapply = $('#konapply').val();
                                var ikiskoapply = $('#kiskoapply').val();
                                
				post_data = {'username':iusername, 'message':imessage , 'sjobid':ijobid , 'skisnepost':ikisnepost , 'skonapply':ikonapply  , 'skiskoapply':ikiskoapply  };
			 	
				//send data to "shout.php" using jQuery $.post()
				$.post('shout.php', post_data, function(data) {
					
					//append data into messagebox with jQuery fade effect!
					$(data).hide().appendTo('.message_box').fadeIn();
	
					//keep scrolled to bottom of chat!
					var scrolltoh = $('.message_box')[0].scrollHeight;
					$('.message_box').scrollTop(scrolltoh);
					
					//reset value of message box
					$('#shout_message').val('');
					
				}).fail(function(err) { 
				
				//alert HTTP server error
				alert(err.statusText); 
				});
			}
	});
	
	//toggle hide/show shout box
	$(".close_btn").click(function (e) {
		//get CSS display state of .toggle_chat element
		var toggleState = $('.toggle_chat').css('display');
		
		//toggle show/hide chat box
		$('.toggle_chat').slideToggle();
		
		//use toggleState var to change close/open icon image
		if(toggleState == 'block')
		{
			$(".header div").attr('class', 'open_btn');
		}else{
			$(".header div").attr('class', 'close_btn');
		}
		 
		 
	});
});

</script>
</head>

<body> 
     <?php
   
      
     
  if($_GET)
       {
           $rjobid = $_GET["jobid"];
       $rkisnepost = $_GET["kisnepost"];
       $rkonapply = $_GET["konapply"];
       $rkiskoapply = $_GET["kiskoapply"];
       }
       else
       {
           
       $rjobid = $_SESSION['a'];
       $rkisnepost = $_SESSION['b'];
       $rkonapply = $_SESSION['c'];
       $rkiskoapply = $_SESSION['d'];
       
       }
       
    
       
       
       
       $_SESSION['fulljob'] =  $rjobid;
       $_SESSION['fulljobkon'] =  $rkonapply;
       $_SESSION['fulljobkis'] =  $rkiskoapply;
       
        
?>
    

   
    
    
<div class="shout_box">
<div class="header">Chat <div class="close_btn">&nbsp;</div></div>
  <div class="toggle_chat">
  <div class="message_box">
    </div>
    <div class="user_info">
   

        <input name="jobid" id="jobid" type="hidden" value="<?php echo $rjobid; ?> "  />
        <input name="kisnepost" id="kisnepost" type="hidden" value="<?php echo $rkisnepost ; ?> "  />
        <input name="konapply" id="konapply" type="hidden"  value="<?php echo $rkonapply; ?> " />
        <input name="kiskoapply" id="kiskoapply" type="hidden"  value="<?php echo $rkiskoapply; ?> " />
       
       <input name="shout_username" id="shout_username" type="hidden" placeholder="Your Name" maxlength="15" />
        
   
       
       <?php  
    require_once("./databaseFiles/database_connections.php");
    $result=mysqli_query($con,"select * from block where uid=$rkonapply  and  blockby=$rkiskoapply");
    $row  = mysqli_fetch_array($result);
    
     if(!is_array($row))
    {
         
    
         
         
         
    $result2=mysqli_query($con,"select pname from outtjob where id=$rjobid  and  active=1");
    $row2  = mysqli_fetch_array($result2);  
      
     if(is_array($row2))
     {
    ?>
       
       
       <input name="shout_message" id="shout_message" type="text" placeholder="Type Message Hit Enter"  /> 
    
    
      <?php 
     }
     else
     {
      echo "Post removed by User ";     
     }
      
      
      
      
      
    }
 else {
     echo "you have been blocked ";  
      }
 
   
 ?>
      
    
    
    
    
    </div>
    </div>
</div>
</body>
</html>
