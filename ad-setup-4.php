<?PHP
include 'config.php';
session_start();
$id = $_SESSION['id'];


$budget = $_POST['budget'];
$_SESSION{'budget'] = $budget;


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="robots" content="all" /> 
<meta name="robots" content="index, follow" /> 
<meta name="googlebot" content="index, follow" /> 
<meta name="msnbot" content="index, follow" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Faceworld | Ad Setup 3</title>
<link href="css/ad-setup-3.css" rel="stylesheet" type="text/css" media="screen" />
<meta name="description" content="Faceworld is an utility that connects you to friends and family by location!">
<meta name="keywords" content="social, social network, network" />
<link rel="shortcut icon" href="http://www.faceworld.io/img/favicon.ico">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
 

</head>

<body>
<div id="wrapper">

  <div id="header">
    <div id="center_box">
      <div id="rightbox"><strong><?PHP echo'<a class="white" href="http://www.faceworld.io/profile.php?id='; echo $id; echo'">'; echo'Faceworld'; echo'</a>'; ?></strong></div>
    </div>
  </div>
  <div id="cube">
    <form action="ad-setup-5.php" method="post" enctype="multipart/form-data"> 
    <div id="rect_box">
      <div id="rect_passbox">
        <div id="forgot_titlebox">
          <div id="fortitlebx"><strong>Amount per click?</strong></div>
        </div>
        <div id="forgot_box">
          <div id="c_forbox">
            <label>
              <select name="ppc" id="ppc">
                <option>.05</option>
                <option>.10</option>
                <option>.25</option>
                <option>.50</option>
                <option>.75</option>
                <option>1.00</option>
  
              </select>
            </label>
          </div>
        </div>
        <div id="buttonrow">
          <div id="recover_button_bx"><input type="image" src="http://www.faceworld.io/img/next.png" name="image" width="87" height="35"></div>
        </div>
      </div>
    </div>
     </form>
<div id="footer">
  <div id="bx1"><strong><a class="gray" href="http://www.faceworld.io/blog/index.php">Blog</a> | <a class="gray" href="http://www.faceworld.io/terms.php">Terms</a> | <a class="gray" href="http://www.faceworld.io/privacy.php">Privacy</a> | <a class="gray" href="http://
  +www.faceworld.io/index.php">&copy; 2021 Faceworld</a></strong></div>
  <div id="bx2"></div>
</div>
  </div>
</div>

</body>

</html>



<?php include_once("analyticstracking.php") ?>
