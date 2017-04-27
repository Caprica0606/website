<!DOCTYPE html>
<html lang="en-us">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="codingCommanders.css">
<title>Contact Us</title>
</head>
<body>
<!-- Top Menu-->
  <div class = "menuDiv">
    <span class = "row">
      <a class = "nav" href = "codingCommanders.php">Home</a> <a class ="nav" href ="curriculum.php">Curriculum</a>  <a class = "nav" href = "https://www.youtube.com/channel/UC-gCUMK_EGUqJ7P9VA7BJmQ">YouTube Channel</a> <a class = "nav" href = "blog.html">B l o g</a>
   </div>
 </body>
 </html>
<?php
$action=$_REQUEST['action'];
if ($action=="")    /* display the contact form */
{
?>
<form  action="" method="POST" enctype="multipart/form-data">
<input type="hidden" name="action" value="submit">
Your name:<br>
<input name="name" type="text" value="" size="30"/><br>
Your email:<br>
<input name="email" type="text" value="" size="30"/><br>
Your message:<br>
<textarea name="message" rows="7" cols="30"></textarea><br>
<input type="submit" value="Send email"/>
</form>
<?php
}
else                /* send the submitted data */
{
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];
if (($name=="")||($email=="")||($message==""))
{
echo "All fields are required, please fill <a href=\"\">the form</a> again.";
}
else{
$from="From: $name<$email>\r\nReturn-path: $email";
$subject="Message sent using your contact form";
// mail("youremail@yoursite.com", $subject, $message, $from);
echo "Email sent!";
}
}
?>
