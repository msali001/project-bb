<?php
include_once 'db.php';
$id = $_POST['id'];
$st = $_POST['st'];
$id = $_POST['id'];
$iu = $_POST['iu'];
$cd = $_POST['cd'];
//$chk = $_POST['chk'];
$chkcount = count($id);
//echo $chkcount;
for($i=0; $i<$chkcount; $i++)
{
	// echo $chkcount;
	// echo $id[$i];
	// echo $st[$i];

	// echo $iu[$i];


	echo "UPDATE requests SET status='$st[$i]',issueddate='$cd[$i]', issuedunits='$iu[$i]' WHERE id=".$id[$i];
	$MySQLi_CON->query("UPDATE requests SET status='$st[$i]',issueddate=$cd[$i],issuedunits='$iu[$i]' WHERE id=".$id[$i]);

	//echo $id[0];
}
header("Location: viewrequests.php");
?>