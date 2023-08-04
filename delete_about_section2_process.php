<?php
		include "connect1.php";
		
		$id = $_POST['id'];
		
		$query = "delete from owner where id = '$id'";
		$hasil = mysqli_query ($koneksi, $query);
		
		if($hasil){
			header("location: add_about_section2.php");
		}
?>
