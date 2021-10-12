$(document).ready(function()
{
   function Bookmark1Scroll()
   {
      var $obj = $("#objective_Bookmark1");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
      {
         $obj.addClass("in-viewport");
         ShowObjectWithEffect('objective_Image1', 1, 'fade', 1000);
      }
   }
   Bookmark1Scroll();
   $(window).scroll(function(event)
   {
      Bookmark1Scroll();
   });
   function Bookmark2Scroll()
   {
      var $obj = $("#objective_Bookmark2");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
      {
         $obj.addClass("in-viewport");
         ShowObjectWithEffect('objective_Image2', 1, 'fade', 1000);
      }
   }
   Bookmark2Scroll();
   $(window).scroll(function(event)
   {
      Bookmark2Scroll();
   });
   function Bookmark3Scroll()
   {
      var $obj = $("#objective_Bookmark3");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
      {
         $obj.addClass("in-viewport");
         ShowObjectWithEffect('objective_Image3', 1, 'fade', 1000);
      }
   }
   Bookmark3Scroll();
   $(window).scroll(function(event)
   {
      Bookmark3Scroll();
   });
   function Bookmark4Scroll()
   {
      var $obj = $("#objective_Bookmark4");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(false))
      {
         $obj.addClass("in-viewport");
         ShowObjectWithEffect('Layer8', 1, 'fade', 1000);
      }
   }
   Bookmark4Scroll();
   $(window).scroll(function(event)
   {
      Bookmark4Scroll();
   });
});
/*
Highligher Scroller script- By JavaScript Kit
For this and over 400+ free scripts, visit http://www.javascriptkit.com/
This notice must stay intact
*/
var tickercontents=new Array()
tickercontents[0]='Hire a trusted creative freelancer';
tickercontents[1]='Smart project management system ';
tickercontents[2]='No headaches. No bull. No Fake';

// delay btw messages
var tickdelay = 3000; 
// 10 pixels at a time.
var highlightspeed = 10; 

////Do not edit pass this line////////////////
var currentmessage = 0;
var clipwidth = 0;
function changetickercontent()
{
   crosstick.style.clip="rect(0px 0px auto 0px)";
   crosstick.innerHTML=tickercontents[currentmessage];
   highlightmsg();
}
function highlightmsg()
{
   var msgwidth=crosstick.offsetWidth;
   if (clipwidth<msgwidth)
   {
      clipwidth+=highlightspeed;
      crosstick.style.clip="rect(0px "+clipwidth+"px auto 0px)";
      beginclip=setTimeout("highlightmsg()",20);
   }
   else
   {
      clipwidth=0;
      clearTimeout(beginclip);
      if (currentmessage==tickercontents.length-1) currentmessage=0;
      else currentmessage++;
      setTimeout("changetickercontent()",tickdelay);
   }
}
function start_ticking()
{
   crosstick = document.getElementById("text_highlighter");
   crosstickParent=crosstick.parentNode? crosstick.parentNode : crosstick.parentElement;
   if (parseInt(crosstick.offsetHeight)>0)
      crosstickParent.style.height=crosstick.offsetHeight+'px';
   else
      setTimeout("crosstickParent.style.height=crosstick.offsetHeight+'px'",100); 
   changetickercontent();
}
start_ticking();
