<?php
			include "connect1.php";
			
			$id = $_POST['id'];
			$name = $_POST['name'];
			$description = $_POST['description'];
			
			$query = "UPDATE category SET name='$name', description='$description' WHERE id=$id";

			
			$hasil = mysqli_query($koneksi, $query);
			
			if($hasil){
					header('location: category.php');
			}
?>
