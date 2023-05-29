<?PHP
session_start(); 
include 'config.php';


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="robots" content="all" /> 
<meta name="robots" content="index, follow" /> 
<meta name="googlebot" content="index, follow" /> 
<meta name="msnbot" content="index, follow" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Faceworld | Email Sent!</title>
<link href="css/email_sent.css" rel="stylesheet" type="text/css" media="screen" />
<meta name="description" content="Faceworld is an utility that connects you to friends and family by location!">
<meta name="keywords" content="social, social network, network" />
<link rel="shortcut icon" href="http://www.faceworld.io/img/favicon.ico">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />


<body>
<div id="wrapper">

  <div id="header">
    <div id="center_box">
      <div id="logoboxl"></div>
      <div id="rightbox"><strong><a class="white" href="http://www.faceworld.io/index.php">Faceworld</a></strong></div>
    </div>
  </div>
  <div id="cube">
    <form name="input" id="commentForm" action="http://www.faceworld.io/get_password.php" method="post"> 
    <div id="rect_box">
      <div id="emailsentboxx">Email Sent: <?PHP     $email = $_SESSION['email'];    echo $email;       ?></div>
    </div>
     </form>
<div id="footer">
  <div id="bx1"><strong><a class="gray" href="http://www.faceworld.io/terms.php">Terms</a> | <a class="gray" href="http://www.faceworld.io/privacy.php">Privacy</a> | <a class="gray" href="http://www.faceworld.io/index.php">&copy; 2023 Faceworld</a></strong></div>
  <div id="bx2"></div>
</div>
  </div>
</div>

</body>

</html>



<?php include_once("analyticstracking.php") ?>