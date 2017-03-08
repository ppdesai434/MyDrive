<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Mydrive.com</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<?php
$con=mysql_connect("localhost","root","");
$qry="create database logininfo";
mysql_query($qry,$con);
mysql_select_db("logininfo",$con) or die("abc");
$qry2="CREATE TABLE `log` (
`name` VARCHAR( 12 ) NOT NULL ,
`nickname` VARCHAR( 12 ) NOT NULL ,
`email` VARCHAR( 30 ) NOT NULL ,
`phone` INT( 10 ) NOT NULL ,
`password` VARCHAR( 12 ) NOT NULL ,
`cpassword` VARCHAR( 12 ) NOT NULL ,
PRIMARY KEY (  `email` )
)";
mysql_query($qry2,$con) ;
?>
<script type="text/javascript" src="js/jquery-1.3.2.min.js" ></script>
<script type="text/javascript" src="js/jquery-ui.min.js" ></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
});
</script>
<!-- Cufon START  -->
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script src="js/GeosansLight_500.font.js" type="text/javascript"></script>
<script type="text/javascript">
Cufon.replace('.logo', { fontFamily: 'GeosansLight' });
Cufon.replace('h1', { fontFamily: 'GeosansLight' });
Cufon.replace('h2', { fontFamily: 'GeosansLight' });
</script>    
<!-- Cufon END  -->
</head>
<body>
<div id="main_container">

        
	<div class="header">

            <div class="logo"><a href="home.php">Mydrive</a></div>
            <div class="slogan"></div> 
        
			<div class="header_socials">
            <a href="#"><img src="images/rss.png" alt="" title="" border="0" /></a>
            <a href="#"><img src="images/facebook.png" alt="" title="" border="0" /></a>
            <a href="#"><img src="images/linkedin.png" alt="" title="" border="0" /></a>
            <a href="#"><img src="images/twitter.png" alt="" title="" border="0" /></a>
            <a href="#"><img src="images/flickr.png" alt="" title="" border="0" /></a>
            </div>

    </div> <!--end of header--> 
    
    <div class="menu">
        <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="about.html">Why Us<!--[if IE 7]><!--></a><!--<![endif]-->
        <!--[if lte IE 6]><table><tr><td><![endif]-->
            
        <!--[if lte IE 6]></td></tr></table></a><![endif]-->
        </li>
        <li></li>
        <li><a href="">Join</a>
        <ul>
            <li><a href="contact2.html">Register</a></li>
            <li><a href="contact3.html">Login</a></li>
           
            </ul>
        </li>
        </ul>
    </div>
         
         
<div id="slider1" class="sliderwrapper">
	<div class="slider_content">
		<div id="featured">
        <div id="fragment-1" class="ui-tabs-panel" style="">
            <img src="images/one.png" alt="" width="631" height="292" border="0" title="" />
            <div class="info" >
            <p>We owe high security scalable servers which can be scaled upto users needs! Use only the share you need.</p>
            </div>
        </div>
        
        <div id="fragment-2" class="ui-tabs-panel" style="">
            <img src="images/two.png" alt="" width="631" height="292" border="0" title="" />
            <div class="info" >
            <p>Access Mydrive any time, any where . Doesnt matter you are on the earth, sea or in air our services are always available to you.</p>
            </div>
        </div>
        
        <div id="fragment-3" class="ui-tabs-panel" style="">
            <img src="images/three.png" alt="" width="631" height="292" title="" border="0" />
            <div class="info" >
            <p>No matter you're using an Android , Black Berry , Symbian or Ios our cross platform application is always there to upload , access and to update contents of mydrive.</p>
            </div>
        </div>
        
        <div id="fragment-4" class="ui-tabs-panel" style="">
            <img src="images/b.jpg" alt="" width="631" height="292" title="" border="0" />
            <div class="info" >
            <p>We offer 21 days free trial and the then simple business plans according to your business needs.</p>
            </div>
        </div>
        
        <div id="fragment-5" class="ui-tabs-panel" style="">
            <img src="images/slider1.jpg" alt="" title="" width="631" height="292" border="0" />
            <div class="info" >
            <p>Mydrive helps world go greener by central ecofriendly less power consuming but highly reliable and fast servers.</p>
            </div>
        </div>
        
		  <ul class="ui-tabs-nav">                    
	        <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-1"><a href="#fragment-1">Scalable and hassle free servers</a></li>
            <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-2"><a href="#fragment-2">Access to your precious files on the GO</a></li>
            <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-3"><a href="#fragment-3">Mobile computing made easy</a></li>
             <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-4"><a href="#fragment-4">Simple corporate plans</a></li>
            <li class="ui-tabs-nav-item ui-tabs-selected" id="nav-fragment-5"><a href="#fragment-5">Help world go greener</a></li>
	      </ul>
  
	   </div>

	</div>

</div>  <!--end of slider --> 

		<div class="center_content">
        	<div class="leftbox">
              <h2>Non Stop</h2>
              <img src="images/pic1.jpg" alt="" title="" border="0" />
              <p>We promise a non stop service for our consumers! 
       	  </p></div>
            
        	<div class="leftbox">
              <h2>Access from Space</h2>
              <img src="images/pic2.jpg" alt="" title="" border="0" />
              <p>Our reliable services allow you to access mydrive from any space on or off earth.</p>
              
        	</div>
            
        	<div class="leftbox_right">
              <h2>Guaranteed services</h2>
              <img src="images/pic3.jpg" alt="" title="" border="0" />
              <p>
Any where no matter which country you are you get full and guranteed services.
              </p>
           	</div>

        </div>
         
         
		<div class="center_content">
        
        	<div class="leftbox">
              <h2>From the Blog</h2>
				<div class="news_box">
                	<div class="date">12.05.2011</div>
                    <h3><a href="#">Awesome</a></h3>
                    <p>
                   Just Awesome quality and experience. 
                    </p>
                </div>       
                      
        	</div>
        
        
        
        	<div class="leftbox">
              <h2>Testimonials</h2>
              <div class="testimonial">
                    <div class="testimonial_quotes">
                    <p>Just Go for Mydrive.com , Just Awesome</p>
                    <a href="#">Tony Stark- Stark Industries</a>
                    </div>
              </div>
        	</div>
            

            
        	<div class="leftbox_right">
              <h2>Get in touch</h2>
              
              <p>
              Start Exploring the exciting features of Mydrive.com
              </p>
              
        	</div> 

        </div>  
         
        
        <div class="clear"></div>
        
<div class="footer">
    <div class="copyrights">
    Developed by <a href="http://www.facebook.com/parth.being" target="_new">Being Parth</a>
    </div>
    <div class="footer_right">
    <a href="home.php">Home</a>
    <a href="about.html">Why Us</a>
    <a href="privacy.html">Privacy Policy</a>
    <a href="contact2.html">Join Now</a>
    </div>
    <div class="clear"></div>
</div>

</div> <!--end of main container-->
    
    

</body>
</html>