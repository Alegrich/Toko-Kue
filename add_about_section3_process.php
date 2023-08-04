<?php
			include "connect1.php";
			
			$title = $_POST['title'];
			$description = $_POST['description'];
			
			$query = "insert into mission(title, description) values ('$title', '$description')";
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
				header('location: add_about_section3.php');      
			}
?>
