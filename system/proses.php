<?php
	if(!empty($_POST['username'])){
		$conn = mysqli_connect('localhost', 'root', '', 'example_checkusername');
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$sql = "select * from users where username = '$username'";
		$process = mysqli_query($conn, $sql);
		$num = mysqli_num_rows($process);
		if($num == 0){
			echo " &#10004; Username available";
		} else {
			echo " &#10060; Username unavailable";
		}
	} else {
		echo " &#10060; Username empty";
	}
?>