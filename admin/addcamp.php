<?php
session_start();
include_once 'db.php';
include 'news.php';

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Add Camp</title>



  <link rel="stylesheet" href="../assets/css/material.css">
  <link rel="stylesheet" href="../assets/css/tether.min.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/socicon.min.css">
  <link rel="stylesheet" href="../assets/css/animate.min.css">
  <link rel="stylesheet" href="../assets/dropdown/css/style.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/add.css" type="text/css">



</head>
<body>
<section id="ext_menu-s">

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="../index" class="navbar-logo"><img src="../assets/images/logo.png" alt="Bloodbank"></a>
                        <a class="navbar-caption" href="../index.html">BLOODBANK</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
					<li class="nav-item"><a class="nav-link link" href="../index">HOME</a></li>
					<li class="nav-item"><a class="nav-link link" href="account">ACCOUNT</a></li>
					  <li class="nav-item"><a class="nav-link link" href="../camps">CAMPS</a></li>
					  <li class="nav-item"><a class="nav-link link" href="../search">SEARCH</a></li>
					              <li class="nav-item"><a class="nav-link link" href="../about">ABOUT</a></li>
                        					  </ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>
<section class="mbr-section mbr-after-navbar" id="msg-box3-z" style="background-color: rgb(242, 242, 242); padding-top: 120px; padding-bottom: 120px;">

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
                <h3 class="mbr-section-title display-2">Add Camp</h3>
                    <form method="post" enctype="multipart/form-data">
                    <table cellpadding="0" cellspacing="0" style="margin:auto; width:100%; " >
                    <tr><td colspan="2">&nbsp;</td></tr>
                    <td style="vertical-align:top">
                    <table cellpadding="0" cellspacing="0" style="width:100%;">
                      <?php
                        if(isset($msg1)){
                          echo $msg1;
                        }

                        ?>

  <tr>
      <td>Camp Name</td>
      <td> <span id="sprytextfield1">
        <label for="title"></label>
        : <input type="text" name="title" class="text-input" id="title" required="required" /></span>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Camp Location</td>
      <td>: <span id="sprytextfield2">
        <label for="body"></label>
        <input type="text" name="body" class="text-input" id="body" required="required" />
      </span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Camp organized by</td>
      <td>: <span id="sprytextfield3">
        <label for="author"></label>
        <input type="text" name="author" class="text-input" id="author" required="required" />
      </span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Camp  Opening Date</td>
      <td>: <span id="sprytextfield4">
      <label for="odate"></label>
      <input type="date" name="odate" class="text-input" id="odate" value="<?php echo date('Y/m/d'); ?>" required="required" />
      </span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Camp Closing Date</td>
      <td>: <span id="sprytextfield5">
        <label for="cdate"></label>
        <input type="date" name="cdate" class="text-input" id="cdate" value="<?php echo date('Y/m/d', strtotime('+14 days')); ?>" required="required" />
      </span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>

      <td>&nbsp;</td>
      <td> <input type="submit" value="Update Camps"  name="btncamp"
style="border:0px;  width:150px; height:40px;  box-shadow:1px 1px 5px black; color:white; font-weight:bold; font-size:14px;
 background-color:#D50000; "></td>
    </tr>

</table>
</td></tr>
</table>
</form>


            </div>
        </div>
    </div>

</section>

<section class="mbr-section mbr-section-md-padding mbr-footer footer1" id="contacts1-1" style="background-color: rgb(190, 22, 22); padding-top: 60px; padding-bottom: 30px;">

    <div class="container">
        <div class="row">
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <div><img src="../assets/images/logo.png"></div>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Address</strong><br>Ottapalam<br>Palakkad, Kerala</p>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p><strong>Contacts</strong><br>
Email: support@bloodbank.com<br>
            </div>
            <div class="mbr-footer-content col-xs-12 col-md-3">
                <p></p><p><strong>Links</strong><br>
<a href="../user/viewrequests" class="text-white">View Request</a><br><a href="../camps" class="text-white">Camps</a><br><a href="../about" class="text-white">About</a><br><a href="../contact" class="text-white">Contact us</a></p><p></p>
            </div>

        </div>
    </div>
</section>

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-9" style="background-color: rgb(190, 22, 22); padding-top: 1.75rem; padding-bottom: 1.75rem;">

    <div class="container">
        <p class="text-xs-center">&copy; <?php
$copyYear = 2016;
$curYear = date('Y');
echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
?> | <a class="text-white" href="bloodbank.appslab.co.ke">BLOODBANK</a></p>
    </div>
    </div>
</footer>


  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/tether.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/SmoothScroll.js"></script>
  <script src="../assets/js/jquery.viewportchecker.js"></script>
  <script src="../assets/dropdown/js/script.min.js"></script>
  <script src="../assets/js/jquery.touchSwipe.min.js"></script>
  <script src="../assets/js/script.js"></script>


  <input name="animation" type="hidden">
   <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon"></i></a></div>
  </body>
</html>
