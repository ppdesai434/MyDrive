<?PHP
setcookie("ma", "", time()-3600);
	setcookie("pa", "", time()-3600);
	setcookie("nn", "", time()-3600);
setcookie("tg", "", time()-3600);

$con=mysql_connect("localhost","root","");
mysql_select_db("logininfo",$con) or die("abc");
$name=$_POST['name'];
$nkname=$_POST['nkname'];
$mailid=$_POST['mailid'];
$phno=$_POST['phno'];
$ps1=$_POST['ps1'];
$ps2=$_POST['ps2'];

$qry="select * from register";
$result=mysql_query($qry,$con);
while($row=mysql_fetch_array($result))
{
if($row["email"]==$mailid)
{
echo "you can't register twice";
header("location:contact2.html");
}
}




$qry3="INSERT INTO  `logininfo`.`log` (
`name` ,
`nickname` ,
`email` ,
`phone` ,
`password` ,
`cpassword`
)
VALUES (
'$name',  '$nkname',  '$mailid',  '$phno',  '$ps1',  '$ps2')";
mysql_query($qry3,$con);
require_once("settings.php");
$tar = Settings::$uploadFolder;
	$tar = $tar.$nkname;
	$tar = $tar;
	
	mkdir($tar)or die(":(");


header("location:home.php");


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Free CSS Templates | by CssTemplatesMarket.com</title>
<link rel="stylesheet" type="text/css" href="style.css" />
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
Cufon.replace('.pages_banner', { fontFamily: 'GeosansLight' });
</script>    
<!-- Cufon END  -->
</head>
<body>
<div id="main_container">

        
	<div class="header">

            <div class="logo"><a href="index.html">Mydrive</a></div>
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
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">Why Us<!--[if IE 7]><!--></a><!--<![endif]-->
        <!--[if lte IE 6]><table><tr><td><![endif]-->
            <ul>
            <li><a href="about.html" title="">Out Team</a></li>
            <li><a href="about.html" title="">Departments</a></li>
            <li><a href="about.html" title="">Locations</a></li>
            </ul>
        <!--[if lte IE 6]></td></tr></table></a><![endif]-->
        </li>
        <li><a href="#">Services<!--[if IE 7]><!--></a><!--<![endif]-->
        <!--[if lte IE 6]><table><tr><td><![endif]-->
            <ul>
            <li><a href="" title="">Webdesign</a></li>
            <li><a href="" title="">Programming</a></li>
            <li><a href="" title="">Development</a></li>
            <li><a href="" title="">Coding</a></li>
            </ul>
        <!--[if lte IE 6]></td></tr></table></a><![endif]-->
        </li>
        <li><a href="">Portfolio</a></li>
        <li><a href="">Testimonials</a></li>
        <li><a href="">Blog</a></li>
        <li><a href="contact.html">Join</a></li>
        </ul>
    </div>
         
         
         
		<div class="center_content_pages">
        	<div class="pages_banner">
            More details about us
            </div>
        	<div class="left_content"> 
                       
                <div class="box290">
                <h2>Subpages</h2>
                    <ul class="left_menu">
                        <li><a href="about.html" title="">Out Team</a></li>
                        <li><a href="about.html" title="">Departments</a></li>
                        <li><a href="about.html" title="">Locations</a></li>
                    </ul>
                </div>
                
                <div class="box290">
                  <h2>From the Blog</h2>
                    <div class="news_box">
                        <div class="date">15.10.2011</div>
                        <h3><a href="#">Lore ipsum doloer ametis</a></h3>
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        </p>
                    </div>
                    <div class="news_box">
                        <div class="date">08.10.2011</div>
                        <h3><a href="#">Lore ipsum doloer ametis</a></h3>
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit 
                        </p>
                    </div>               
                </div>
            </div> <!--end of left content-->
            
            
          <div class="right_content">
            <h2>Why us?	</h2>
           		  <img src="images/pages.jpg" alt="" title="" border="0" class="pages_pic" />
                  <ul>
                    <li>
                        <h5>Unlimited Cloud Storage</h5>
                        <p>Unlike other cloud storage services here at just cloud we don't limit the amount of files you can store, so you can enjoy the freedom of unlimited online storage.</p>
                      </li>
                      <li><span id="why-us-2"> </span>
                        <h5>Mobile Device Apps</h5>
                        <p>Backup your phones camera roll, quickly upload voice memos and text notes. Open, print and share documents whilst on the move.</p>
                      </li>
                      <li><span id="why-us-3"> </span>
                        <h5>100 % Automated Backups</h5>
                        <p>Losing even one day of data is painful, with JustCloud your backups are automated so you will never lose any files or data again.</p>
                      </li>
                      <li><span id="why-us-4"> </span>
                        <h5>Complete Data Security</h5>
                        <p>JustCloud takes the security and privacy of your data very seriously. All your files are encrypted with 265 Bit Encryption.</p>
                      </li>
                      <li><span id="why-us-5"> </span>
                        <h5>Access Files Anywhere</h5>
                        <p>Access your files wherever, whenever through our online control panel, mobile apps or mobile optimized site. Never be without your files again.</p>
                      </li>
                      <li><span id="why-us-6"> </span>
                        <h5>Lost laptop? Find it with JustCloud</h5>
                        <p>Lost or stolen laptop? We can help you get it back! Map the location of your laptop hourly to track where it is. Easily recover lost files from your account.</p>
                      </li>
                      <li><span id="why-us-7"> </span>
                        <h5>Sync Multiple Computers</h5>
                        <p>Automatically sync files across computers. You decide which files and folders you want to sync and JustCloud works in the background to sync them to the cloud.</p>
                      </li>
                      <li><span id="why-us-8"> </span>
                        <h5>Drag &amp; Drop to Backup</h5>
                        <p>Quickly and easily drag individual files to your Just Cloud app or online control panel. It’s a simple way to sync files straight to all your devices.</p>
                      </li>
                      <li><span id="why-us-9"> </span>
                        <h5>Share files with Friends</h5>
                        <p>Share your files and folders between friends and family. You can invite them by email, Facebook, Twitter or giving them your own custom link.</p>
                      </li>
                      <li><span id="why-us-10"> </span>
                        <h5>24 / 7 Technical Support</h5>
                        <p>Should you need us for anything, we’re always here to help. With 24/7 365 day dedicated support, there’s always someone to answer your questions.</p>
                      </li>
            </ul>
                  <p>&nbsp;</p>
            </div>
            
            
            
        <div class="clear"></div>
        </div>  
         
        
        
        
<div class="footer">
    <div class="copyrights">
    Free CSS Template by <a href="http://csstemplatesmarket.com" target="_blank">Css templates market</a>
    </div>
    <div class="footer_right">
    <a href="index.html">Home</a>
    <a href="about.html">Why Us</a>
    <a href="#">Privacy Policy</a>
    <a href="#">Contact Us</a>
    </div>
    <div class="clear"></div>
</div>

</div> <!--end of main container-->
    
    

</body>
</html>