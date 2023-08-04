<?php
		include "connect1.php";
		
		$id = $_POST['id'];
		
		$query = "delete from blog where id = '$id'";
		$hasil = mysqli_query ($koneksi, $query);
		
		if($hasil){
			header("location: add_blog_section1.php");
		}
?>
