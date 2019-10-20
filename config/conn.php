<?php
$con = mysqli_connect('localhost','root','','db_orca');
if (mysqli_connect_errno()) {
	# code...
	echo "error" . mysqli_connect_error();
}
?>