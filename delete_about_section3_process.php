<?php
		include "connect1.php";
		
		$id = $_POST['id'];
		
		$query = "delete from mission where id = '$id'";
		$hasil = mysqli_query ($koneksi, $query);
		
		if($hasil){
			header("location: add_about_section3.php");
		}
?>
