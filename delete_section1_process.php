<?php
		include "connect1.php";
		
		$id = $_POST['id'];
		
		$query = "delete from home where id = '$id'";
		$hasil = mysqli_query ($koneksi, $query);
		
		if($hasil){
			header("location:add_section1.php");
		}
?>
