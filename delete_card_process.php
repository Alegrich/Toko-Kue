<?php
		include "connect1.php";
		
		$id = $_POST['id'];
		
		$query = "delete from cardblog where id = '$id'";
		$hasil = mysqli_query ($koneksi, $query);
		
		if($hasil){
			header("location:add_card.php");
		}
?>
