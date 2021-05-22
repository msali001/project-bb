<?php
	
	error_reporting(0);

	include_once 'db.php';

	if(isset($_POST['chk'])=="")
	{
		?>
        <script>
		alert('At least one checkbox Must be Selected !!!');
		window.location.href='viewrequests.php';
		</script>
        <?php
	}
	$chk = $_POST['chk'];
	$chkcount = count($chk);
	
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="">
    <title>Edit Status</title>
  
  

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
                        <a href="index" class="navbar-logo"><img src="../assets/images/logo.png" alt="Bloodbank Logo"></a>
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
					  <li class="nav-item"><a class="nav-link link" href="../search">SEARCH</a></li><li class="nav-item"><a class="nav-link link" href="../about">ABOUT</a></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="engine"><a rel="external" href="index">top site design software download</a></section><section class="mbr-section mbr-after-navbar" id="msg-box3-v" style="background-color: rgb(242, 242, 242); padding-top: 120px; padding-bottom: 120px;">

    
<div class="container">
<form method="post" action="update_status.php">
<table class='table table-bordered'>
<tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Pints required</th>
    <th>Last Required Date</th>
    <th>Status</th>
    <th>Issued Date</th>
    <th>Issued Units</th>

</tr>
<?php
for($i=0; $i<$chkcount; $i++)
{
	$id = $chk[$i];			
	$res=$MySQLi_CON->query("SELECT * FROM requests WHERE id=".$id);
	while($row=$res->fetch_array())
	{
		?>
		<tr>
		<td>
    	<input type="hidden" name="id[]" value="<?php echo $row['id'];?>" />
            <input title="fname" type="text" name="fn[]" value="<?php echo $row['fname'];?>" class="form-control" readonly />
        </td>
            <td>
                <input title="lname" type="text" name="ln[]" value="<?php echo $row['lname'];?>" class="form-control" readonly />
            </td>
            <td>
                <input title="units" type="tel" name="units[]" value="<?php echo $row['units'];?>" class="form-control" readonly/>
            </td>
            <td>
                <input title="reqdate" type="tel" name="reqdate[]" value="<?php echo $row['reqdate'];?>" class="form-control" readonly/>
            </td>
            <td>
            <select title="status" name="st[]" value="<?php echo $row['status'];?>" class="form-control">
                <option value="Waiting" style="color: red;">Waiting</option>
                <option value="Received" style="color: green;">Received</option>
            </select>
        </td>
            <td>
                <input title="issueddate" type="text" id="curdate" name="cd[]" value="<?php echo date('Y/m/d'); ?>" required readonly  class="form-control"/>
            </td>
            <td>
                <input title="issuedunits" type="number" name="iu[]" value="<?php echo $row['issuedunits'];?>"  class="form-control" required/>
            </td>

		</tr>
		<?php	
	}			
}
?>
<tr>
<td colspan="2">
<button type="submit" name="savemul" class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i> &nbsp; Update</button>&nbsp;
<a href="viewrequests.php" class="btn btn-large btn-success"> <i class="glyphicon glyphicon-fast-backward"></i> &nbsp; Cancel</a>
</td>
</tr>
</table>
</form>
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

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-5" style="background-color: rgb(190, 22, 22); padding-top: 1.75rem; padding-bottom: 1.75rem;">
    
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

  <!-- <script>
        var el_down = document.getElementById("curdate");
  
        function gfg_Run() {
            var date = today.toJSON().slice(0, 10);
            var nDate = date.slice(8, 10) + '/' 
                       + date.slice(5, 7) + '/' 
                       + date.slice(0, 4);
            el_down.value = nDate;
        }
        window.onload = gfg_Run();
    </script> -->
  
  
  <input name="animation" type="hidden">
   <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon"></i></a></div>
  </body>
</html>