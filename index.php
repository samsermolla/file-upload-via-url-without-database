<?php
//contact: samsermolla@gmail.com
//don't delete this text otherwise code not work properly 
//Any Help contact with me
//author: Molla Samser

if($_POST){
//get the url
$url = $_POST['url'];

//add time to the current filename
$name = basename($url);
list($txt, $ext) = explode(".", $name);
$name = $txt.time();
$name = $name.".".$ext;

//here is the actual code to get the file from the url and save it to the uploads folder
//get the file from the url using file_get_contents and put it into the folder using file_put_contents
$upload = file_put_contents("upload/$name",file_get_contents($url));
//check success
if($upload)  echo "<img src='file/rimsam.png' width='20%' height='30%' /> 🛏️🛏️<img src='upload/".$name."'><hr />download Here:<a href='upload/".$name."' target='_blank'>Check Uploaded</a>"; else "please check your folder permission<hr />";
}
?>

<html>
<head>
<title>༒riͥϻsͣaͫϻ00 - Simple File Upload from URL Script!</title>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="file/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
<hr />
<marquee width="100%" height="10%" behavior="alternate" style="border:2px solid red">  
<marquee behavior="alternate">  
<h4>༒riͥϻsͣaͫϻ00༒ - Very Simple File Upload from URL Script!</h4>
  
</marquee>  
</marquee>  <br /><br />

	<form action="" method="post">
		Your URL: <input type="text" name="url" />
	</form><hr />
<marquee><img src="file/rimsam00.png" alt="riͥϻsͣaͫϻ00" width="25%" height="15%" /><br /></marquee>
</body>
</html>
