<?php
error_reporting(0);
//Load the settings
require_once("settings.php");

$a = $_COOKIE["tg"].$_COOKIE["nn"]."/";
echo $a;
$message = "";
//Has the user uploaded something?
if(isset($_FILES['file']))
{
//	$target_path = Settings::$uploadFolder;

	$target_path = $a;
	$target_path = $target_path . time() . '_' . basename( $_FILES['file']['name']); 
	
	//Check the password to verify legal upload
	if($_POST['password'] != Settings::$password)
	{
		$message = "Invalid Password!";
	}
	else
	{
		//Try to move the uploaded file into the designated folder
		if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
		    $message = "The file ".  basename( $_FILES['file']['name']). 
		    " has been uploaded";
		} else{
		    $message = "There was an error uploading the file, please try again!";
		}
	}
	
	//Clear the array
	unset($_FILES['file']);
}

if(strlen($message) > 0)
{
	$message = '<p class="error">' . $message . '</p>';
}

/** LIST UPLOADED FILES **/
$uploaded_files = "";

//Open directory for reading
$dh = opendir($a);

//LOOP through the files
while (($file = readdir($dh)) !== false) 
{
	if($file != '.' && $file != '..')
	{
		$filename = $a . $file;
		$parts = explode("_", $file);
		$size = formatBytes(filesize($filename));
		$added = date("m/d/Y", $parts[0]);
		$origName = $parts[1];
		$filetype = getFileType(substr($file, strlen($file) - 3));
        $uploaded_files .= "<li class=\"$filetype\"><a href=\"$filename\">$origName</a> $size - $added</li>\n";
	}
}
closedir($dh);

if(strlen($uploaded_files) == 0)
{
	$uploaded_files = "<li><em>No files found</em></li>";
}

function getFileType($extension)
{
	$images = array('jpg', 'gif', 'png', 'bmp');
	$docs 	= array('txt', 'rtf', 'doc');
	$apps 	= array('zip', 'rar', 'exe');
	
	if(in_array($extension, $images)) return "Images";
	if(in_array($extension, $docs)) return "Documents";
	if(in_array($extension, $apps)) return "Applications";
	return "";
}

function formatBytes($bytes, $precision = 2) { 
    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 
   
    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
    $pow = min($pow, count($units) - 1); 
   
    $bytes /= pow(1024, $pow); 
   
    return round($bytes, $precision) . ' ' . $units[$pow]; 
} 
?>

<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<style type="text/css" media="all"> 
	@import url("style/style2.css");
</style>

<title>Online file storage</title>
</head>
<body>

<div id="container">

<h1>Online File Storage</h1>

<form method="post" action="enter.php" enctype="multipart/form-data">
	<input type="hidden" name="MAX_FILE_SIZE" value="1000000000" />
    <?php //echo $_COOKIE["ma"];
	//echo $_COOKIE["pa"];
	echo "Hey ! Welcome, ";
	echo $_COOKIE["nn"];?> &nbsp;&nbsp;&nbsp;&nbsp;<a href="lol.php">Switch off mydrive</a>
	<fieldset>
		<legend>Add a new file to the storage</legend>
			<?php echo $message; ?>
			<p><label for="name">Select file</label><br />
			<input type="file" name="file" /></p>
			<p><label for="password">Password for upload</label><br />
			<input type="password" name="password" />type "mydrive"</p>
			<p><input type="submit" name="submit" value="Start upload" /></p>	
		</fieldset>
	</form>

	<fieldset>
		<legend>Previousely uploaded files</legend>
			<ul id="menu">
				<li><a href="">All files</a></li>
				<li><a href="">Documents</a></li>
				<li><a href="">Images</a></li>
				<li><a href="">Applications</a></li>
			</ul>
			
			<ul id="files">
				<?php echo $uploaded_files; ?>
			</ul>
	</fieldset>

</div>

<script src="js/filestorage.js" />
</body>
</html>