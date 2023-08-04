<?php
		include "connect1.php";
		
		$id = $_POST['id'];
		
		$query = "delete from home2 where id = '$id'";
		$hasil = mysqli_query ($koneksi, $query);
		
		if($hasil){
			header("location: home_setting.php");
		}
?>
