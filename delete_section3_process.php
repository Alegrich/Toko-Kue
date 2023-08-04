<?php
		include "connect1.php";
		
		$id = $_POST['id'];
		
		$query = "delete from sect3 where id = '$id'";
		$hasil = mysqli_query ($koneksi, $query);
		
		if($hasil){
			header("location:add_section3.php");
		}
?>
