<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">

function check2()
{
	var mail=cnform.mailcnf.value;
	var pass=cnform.passcnf.value;
	
	alert(mail);
	alert(pass);
	var re=/^[a-z 0-9]+(\.[a-z 0-9]+)*@[a-z 0-9]+(\.[a-z 0-9]+)*\.([a-z]{2,4})$/;
	
	
	if(pass!=" " && re.test(mail) && mail!=" ")
	{
		
		
			return true;

	}
	else
	{
		return false;
	}
	
	
}

</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign up</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js" ></script>
<script type="text/javascript" src="js/jquery-ui.min.js" ></script>
<script type="text/javascript">
var popup = window.createPopup( );
var bod = popup.document.body;
bod.style.border = "3px solid #ff8800";
bod.style.padding = "2px";
bod.style.backgroundColor = "lightyellow";
bod.innerHTML ="Some popup text.";
popup.show(100, 100, 100, 26, document.body);
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
<style type="text/css">
#fillform table tr td label {
	color: #F00;
}
</style>
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
        <li><a href="about.html">About Us<!--[if IE 7]><!--></a><!--<![endif]-->
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
        <li></li>
        <li></li>
        <li><a href="contact.html">Join</a></li>
        </ul>
</div>
         
         
         
		<div class="center_content_pages">
        	<div class="pages_banner">Create Your Personalized drive</div>
        	<div class="left_content"> 
                       
                <div class="box290">
                <h2>&nbsp;</h2>
</div>
                
                <div class="box290">
                  <h2>What clients say?</h2>
                      <div class="testimonial">
                            <div class="testimonial_quotes">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="#">John doe - company name</a>
                            </div>
                      </div> 
                      <div class="testimonial">
                            <div class="testimonial_quotes">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <a href="#">John doe - company name</a>
                            </div>
                      </div>           
                </div>
            </div> <!--end of left content-->
<?php
$enroll=$_POST['enl'];
$password=$_POST['ps1l'];
$con=mysql_connect("localhost","root","");
mysql_select_db("registration",$con);
$qry="select * from register";
$result=mysql_query($qry,$con);
while($row=mysql_fetch_array($result))
{
if($row["enrollmentno"]==$enroll && $row["password"]==$password)
{
header("location:enter.php");
}
else
{
echo "wrong id or password";
}
}
?>
            <form id="cnform" name="cnform" method="post" onsubmit="return check2(this.form)" action="welcome2.php">
              
                <h2>Access Mydrive</h2>
                <table>
                <tr>
                <td>
                    <label>Email id</label>
                    </td><td>
                    <input name="mailcnf" type="text" class="form_input" id="mailcnf" />
                    
                 </td>
                 <tr>
                    <td><label>Password:</label></td><td>
                    <input type="password" class="form_input" name="passcnf" id="passcnf" />
                </td></tr>
				  
                  </table>
                    <input type="submit" class="form_submit" value="Access" />
                    
                  
				 <p>
                    <input type="button" class="form_submit" value="Sign Up" onclick="window.open('about.html','popUpWindow','height=500,width=400,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');" />
                    <input type="button" class="form_submit" value="Reload Page" onclick="document.location.reload(true)" />
                  </p>
                  </table>
                  </div>
                </div>
              </div>
            </form>
<div class="clear"></div>
        </div>  
         
        
        
        
<div class="footer">
    <div class="copyrights"></div>
    <div class="footer_right">
    <a href="#">Home</a>
    <a href="#">About Us</a>
    <a href="#">Privacy Policy</a>
    <a href="#">Contact Us</a>
    </div>
    <div class="clear"></div>
</div>

</div> <!--end of main container-->
    
    

</body>
</html>