<?php
		include "connect1.php";
		
		$name = $_POST['name'];
		$description = $_POST['description'];
		$slug = $_POST['slug'];
				
		$query = "insert into category(name, slug, description) VALUES ('$name', '$slug', '$description')";
		
		$hasil = mysqli_query($koneksi, $query);
		
		if($hasil){
				header('location: category.php');
		}
?>
