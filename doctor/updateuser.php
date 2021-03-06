<?php
include_once 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
    <meta name="description" content="">
    <title>Manage Users</title>



    <link rel="stylesheet" href="../assets/css/material.css">
    <link rel="stylesheet" href="../assets/css/tether.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/socicon.min.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/dropdown/css/style.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/add.css" type="text/css">
    <script src="jquery.js" type="text/javascript"></script>
    <script src="js-script.js" type="text/javascript"></script>



</head>
<body>
<section id="ext_menu-s">

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="index" class="navbar-logo"><img src="../assets/images/logo.png" alt="Bloodbank Logo"></a>
                        <a class="navbar-caption" href="../index">BLOODBANK</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                        <li class="nav-item"><a class="nav-link link" href="../index">HOME</a></li>
                        <li class="nav-item"><a class="nav-link link" href="account">ACCOUNT</a></li>
                        <li class="nav-item"><a class="nav-link link" href="../camps">CAMPS</a></li><li class="nav-item"><a class="nav-link link" href="search.html">SEARCH</a></li><li class="nav-item"><a class="nav-link link" href="about.html">ABOUT</a></li></ul>
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
        <form method="post" name="frm">
            <table class='table table-bordered table-responsive'>
                <tr>
                    <th>##</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Blood Group</th>
                    <th>Last Donation Date</th>
                    <th>Number Of Donations</th>
                    <th>Last Donation Camp</th>
                </tr>
                <?php
                $res = $MySQLi_CON->query("SELECT * FROM donarregister ");
                $count = $res->num_rows;

                //$query=mysqli_query($MySQLi_CON,"select * from donarregister WHERE email='$email'");
                if($count > 0)
                    if($count > 0) {
                        while ($ft = mysqli_fetch_array($res)) {
                            ?>
                            <tr class="bg-table">
                                <td><input type="checkbox" name="chk[]" class="chk-box" value="<?= $ft['0'] ?>"/></td>
                                <td><?= $ft['1'] ?></td>
                                <td><?= $ft['2'] ?></td>
                                <td><?= $ft['11'] ?></td>
                                <td><?= $ft['4'] ?></td>
                                <td><?= $ft['13'] ?></td>
                                <td><?= $ft['15'] ?></td>
                                <td><?= $ft['14'] ?></td>
                            </tr>
                            <?php
                        }
                    }


                    else
                    {
                        ?>
                        <tr>
                            <td colspan="3"> No Records Found ...</td>
                        </tr>
                        <?php
                    }
                ?>
                <?php

                if($count > 0)
                {
                    ?>
                    <tr>
                        <td colspan="3">
                            <label><input type="checkbox" class="select-all" /> Check / Uncheck All</label>


                            <label style="margin-left:100px;">
                                <span style="word-spacing:normal;"> with selected :</span>
                                <span><img src="edit.png" onClick="edit_records();" alt="delete" />&nbsp;</span>
                            </label>


                        </td>
                    </tr>
                    <?php
                }

                ?>




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

<footer class="mbr-small-footer mbr-section mbr-section-nopadding" id="footer1-2" style="background-color: rgb(190, 22, 22); padding-top: 1.75rem; padding-bottom: 1.75rem;">

    <div class="container">
        <p class="text-xs-center">&copy; <?php
$copyYear = 2016;
$curYear = date('Y');
echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
?> | <a class="text-white" href="#">BLOODBANK</a></p>
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